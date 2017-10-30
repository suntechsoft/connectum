<?php

namespace Platron\Connectum\services;

use Platron\Connectum\clients\GetClient;

abstract class BaseGetServiceRequest extends BaseServiceRequest {
	
	/**
	 * {@inheritdoc}
	 */
	public function sendRequest(){
		$client = (new GetClient($this->login, $this->password));
        $client->setLogger($this->logger);
        $client->setConnectionTimeout($this->connectionTimeout);
        return $client->sendRequest($this);
	}
}
