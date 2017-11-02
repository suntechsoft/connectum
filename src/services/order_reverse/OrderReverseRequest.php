<?php

namespace Platron\Connectum\services\order_reverse;

use Platron\Connectum\services\BasePutRequest;

class OrderReverseRequest extends BasePutRequest {
    
    /** @var int */
    protected $id;
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return $this->getBaseUrl().'/orders/'.$this->id.'/reverse';
    }

    /**
     * @param type $id
     */
    public function __construct($id) {
        $this->id = $id;
    }
}
