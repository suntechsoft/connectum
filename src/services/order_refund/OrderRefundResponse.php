<?php

namespace Platron\Connectum\services\order_refund;

use Platron\Connectum\services\BaseResponse;
use Platron\Connectum\services\order_info\OrderInfoResponse;

class OrderRefundResponse extends BaseResponse {
    /** @var OrderInfoResponse */
    public $orders;
}