<?php

namespace Platron\Connectum\services\order_info;

use Platron\Connectum\services\BaseResponse;
use Platron\Connectum\data_objects\CardData;
use Platron\Connectum\data_objects\ClientData;
use Platron\Connectum\data_objects\IssuerData;
use Platron\Connectum\data_objects\LocationData;
use Platron\Connectum\data_objects\Secure3dData;
use Platron\Connectum\services\operation_list\OperationListResponse;
use stdClass;

class OrderInfoResponse extends BaseResponse {
    
    public $amount;
    public $amount_charged;
    public $amount_refunded;
    public $auth_code;
    public $created;
    public $currency;
    public $description;
    public $descriptor;
    public $id;
    public $merchant_order_id;
    public $pan;
    
    /** @var CardData */
    public $card;
    /** @var ClientData */
    public $client;
    /** @var IssuerData */
    public $issuer;
    /** @var LocationData */
    public $location;
    /** @var Secure3dData */
    public $secure3d;
    /** @var OperationListResponse[] */
    public $operations;
    
    /**
     * {@inheritdoc}
     */
    public function __construct(stdClass $response) {
        parent::__construct($response);
    }
}
