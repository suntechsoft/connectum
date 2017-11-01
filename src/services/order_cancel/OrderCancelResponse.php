<?php

namespace Platron\Connectum\services\order_cancel;

use Platron\Connectum\services\BaseResponse;
use Platron\Connectum\services\order_info\OrderInfoResponse;

class OrderCancelResponse extends BaseResponse {
    /** @var OrderInfoResponse */
    public $orders;
}