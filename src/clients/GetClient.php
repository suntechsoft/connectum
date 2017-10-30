<?php

namespace Platron\Connectum\clients;

use Platron\Connectum\services\BaseServiceRequest;

class GetClient extends BaseClient {
    
    /**
     * {@inheritdoc}
     */
    public function sendRequest(BaseServiceRequest $service, $logger, $connectionTimeout) {
        $params = $service->getParameters();
        $requestUrl = $service->getRequestUrl();
        
        $curl = curl_init($service->getRequestUrl().'?'.http_build_query($params));
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, $connectionTimeout);
        curl_setopt($curl, CURLOPT_HTTPHEADER, $this->getHeaders());

		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($curl);
        
        if($logger){
            $this->logger->log(self::LOG_LEVEL, 'Requested url '.$requestUrl.' params '. print_r($params, true));
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
