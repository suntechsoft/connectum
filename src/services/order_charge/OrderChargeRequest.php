<?php

namespace Platron\Connectum\services\order_charge;

use Platron\Connectum\services\BasePutRequest;

class OrderChargeRequest extends BasePutRequest {
    
    /** @var int */
    private $id;
    /** @var string */
    protected $amount;
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return '/orders/'.$this->id.'/charge';
    }
    
    /**
     * @param int $id
     * @param float $amount
     */
    public function __construct($id, $amount) {
        $this->id = $id;
        $this->amount = (string) round($amount, 2);
    }

}
