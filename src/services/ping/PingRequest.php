<?php

namespace Platron\Connectum\services\ping;

use Platron\Connectum\services\BaseGetRequest;

class PingRequest extends BaseGetRequest {
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return $this->getBaseUrl().'/ping';
    }
}
