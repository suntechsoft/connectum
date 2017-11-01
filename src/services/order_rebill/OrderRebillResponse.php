<?php

namespace Platron\Connectum\services\order_rebill;

use Platron\Connectum\services\BaseResponse;
use Platron\Connectum\services\order_info\OrderInfoResponse;

class OrderRebillResponse extends BaseResponse {
    /** @var OrderInfoResponse */
    public $orders;
}
