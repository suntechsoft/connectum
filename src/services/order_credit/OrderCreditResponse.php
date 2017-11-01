<?php

namespace Platron\Connectum\services\order_credit;

use Platron\Connectum\services\BaseResponse;
use Platron\Connectum\services\order_info\OrderInfoResponse;

class OrderCreditResponse extends BaseResponse {
    /** @var OrderInfoResponse */
    public $orders;
}
