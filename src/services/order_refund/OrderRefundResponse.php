<?php

namespace Platron\Connectum\services\order_refund;

use Platron\Connectum\services\BaseResponse;
use Platron\Connectum\services\order_info\OrderInfoResponse;

class OrderRefundResponse extends BaseResponse {
    /** @var OrderInfoResponse */
    public $order;
    
    public function __construct(\stdClass $response) {
        parent::__construct($response);
        if(!empty($response->orders[0])){
            $this->order = new OrderInfoResponse($response);
        }
    }
}