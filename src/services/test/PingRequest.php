<?php

namespace Platron\Connectum\services\test;

use Platron\Connectum\services\BaseGetRequest;

class PingRequest extends BaseGetRequest {
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return self::BASE_URL.'/ping';
    }
}
