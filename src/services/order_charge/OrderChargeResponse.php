<?php

namespace Platron\Connectum\services\order_charge;

use Platron\Connectum\services\BaseResponse;
use Platron\Connectum\services\order_info\OrderInfoResponse;

class OrderChargeResponse extends BaseResponse {
    /** @var OrderInfoResponse */
    public $orders;
}
