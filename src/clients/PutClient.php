<?php

namespace Platron\Connectum\clients;

use Platron\Connectum\SdkException;
use Platron\Connectum\services\BasePutRequest;

class PutClient extends BaseClient {
    
    /**
     * {@inheritdoc}
     */
    public function sendRequest(BasePutRequest $service, $logger, $connectionTimeout) {
        $requestParameters = $service->getParameters();
        $requestUrl = $this->baseUrl.$service->getRequestUrl();
        
        $curl = curl_init($service->getRequestUrl());
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $connectionTimeout);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->getHeaders());
        
        if(!empty($requestParameters)){
            curl_setopt($curl, CURLOPT_PUT, 1);
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($requestParameters));
        }
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($curl);
        
        if($logger){
            $this->logger->log(self::LOG_LEVEL, 'Requested url '.$requestUrl.' params '. json_encode($requestParameters));
            $this->logger->log(self::LOG_LEVEL, 'Response '.$response);
        }
		
		if(curl_errno($curl)){
			throw new SdkException(curl_error($curl), curl_errno($curl));
		}

        if (curl_getinfo($curl, CURLINFO_HTTP_CODE) !== self::OK_HTTP_CODE) {
            throw new SdkException('Service error. Wrong http code '.curl_getinfo($curl, CURLINFO_HTTP_CODE));
        }
        
        $decodedResponse = json_decode($response);
        if(empty($decodedResponse)){
            throw new SdkException('Service error. Empty response or not json response');
        }
		
		return $decodedResponse;
    }

}
