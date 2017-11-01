<?php

namespace Platron\Connectum\services\order_authorize;

use Platron\Connectum\services\BaseResponse;
use Platron\Connectum\services\order_info\OrderInfoResponse;
use Platron\Connectum\data_objects\Form3dData;

class OrderAuthorizeResponse extends BaseResponse {
    /** @var OrderInfoResponse */
    public $orders;
    /** @var Form3dData */
    public $form3d;
    public $form3d_html;
}
