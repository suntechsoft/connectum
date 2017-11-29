<?php

namespace Platron\Connectum\services\operation_list;

use Platron\Connectum\services\BaseResponse;
use Platron\Connectum\data_objects\OperationData;

class OperationListResponse extends BaseResponse {
    /** @var OperationData[] */
    public $operations;
}
