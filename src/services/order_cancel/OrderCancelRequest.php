<?php

namespace Platron\Connectum\services\order_cancel;

use Platron\Connectum\services\BasePostRequest;

class OrderCancelRequest extends BasePostRequest {
    
    /** @var int */
    protected $id;
    /** @var string */
    protected $amount;
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return self::BASE_URL.'/orders/'.$this->id.'/cancel';
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
