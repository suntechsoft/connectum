<?php

namespace Platron\Connectum\services\order;

use Platron\Connectum\services\BaseGetRequest;

class OrderInfoRequest extends BaseGetRequest {
    
    /** @var int */
    protected $id;
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return self::BASE_URL.'/orders/'.$this->id;
    }

    /**
     * @param int $id
     */
    public function __construct($id){
        $this->id = $id;
    }
}
