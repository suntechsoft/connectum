<?php

namespace Platron\Connectum\services\order_refund;

use Platron\Connectum\services\BasePutRequest;

class OrderRefundRequest extends BasePutRequest {
    
    /** @var int */
    protected $id;
    /** @var string */
    protected $amount;
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return self::BASE_URL.'/orders/'.$this->id.'/refund';
    }
    
    /**
     * @param int $id
     * @param float $amount
     */
    public function __construct($id, $amount) {
        $this->id = $id;
        $this->amount = $amount;
    }

}
