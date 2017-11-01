<?php

namespace Platron\Connectum\services\order_create;

use Platron\Connectum\services\BaseResponse;
use Platron\Connectum\services\order\OrderInfoResponse;

class OrderCreateResponse extends BaseResponse {
    /** @var OrderInfoResponse */
    public $orders;
}
