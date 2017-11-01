<?php

namespace Platron\Connectum\services\order_create;

use Platron\Connectum\services\BaseResponse;
use Platron\Connectum\services\order\OrderInfoResponse;

class CreateOrderResponse extends BaseResponse {
    /** @var OrderInfoResponse */
    public $orders;
}
