<?php

namespace Platron\Connectum\services\operation_list;

use Platron\Connectum\services\BaseGetRequest;

class OperationsRequest extends BaseGetRequest {
    
    public function getRequestUrl() {
        return self::BASE_URL.'/operations/';
    }

    public function __construct() {
        
    }
}
