<?php

namespace Platron\Connectum\services\order_list;

use Platron\Connectum\services\BaseResponse;
use Platron\Connectum\services\order_info\OrderInfoResponse;

class OrderListResponse extends BaseResponse{
    
    /** @param OrderInfoResponse[] */
    public $orders;
}
