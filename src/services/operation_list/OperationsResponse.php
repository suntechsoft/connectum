<?php

namespace Platron\Connectum\services\operation_list;

use Platron\Connectum\services\BaseResponse;
use Platron\Connectum\data_objects\CashflowData;

class OperationsResponse extends BaseResponse {
    public $amount;
    public $auth_code;
    public $created;
    public $currency;
    public $iso_message;
    public $iso_response_code;
    public $status;
    public $type;
    /** @var CashflowData */
    public $cashflow;
}
