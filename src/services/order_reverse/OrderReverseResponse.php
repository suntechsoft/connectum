<?php

namespace Platron\Connectum\services\order_reverse;

use Platron\Connectum\services\BaseResponse;
use Platron\Connectum\services\order_info\OrderInfoResponse;

class OrderReverseResponse extends BaseResponse {
    /** @var OrderInfoResponse */
    public $orders;
}
