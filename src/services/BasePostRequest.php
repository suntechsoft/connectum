<?php

namespace Platron\Connectum\services;

use Platron\Connectum\clients\PostClient;

abstract class BasePostRequest extends BaseRequest {
	
    /**
	 * {@inheritdoc}
	 */
	public function sendRequest(){
		$client = (new PostClient($this->login, $this->password));
        $client->setLogger($this->logger);
        $client->setConnectionTimeout($this->connectionTimeout);
        return $client->sendRequest($this);
	}
}
