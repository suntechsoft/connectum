<?php

namespace Platron\Connectum\services;

use Platron\Connectum\clients\PutClient;

abstract class BasePutRequest extends BaseRequest {
    /**
	 * {@inheritdoc}
	 */
	public function sendRequest(){
		$client = (new PutClient($this->login, $this->password));
        $client->setLogger($this->logger);
        $client->setConnectionTimeout($this->connectionTimeout);
        return $client->sendRequest($this);
	}
}
