<?php

namespace Platron\Connectum\data_objects;

use Platron\Connectum\data_objects\CashflowData;

class OperationData extends BaseDataObject {
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
