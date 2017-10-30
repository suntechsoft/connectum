<?php

namespace Platron\Connectum\services\orders;

use Platron\Connectum\services\BaseGetRequest;

class OrdersRequest extends BaseGetRequest {
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return self::BASE_URL.'/orders/';
    }
}
