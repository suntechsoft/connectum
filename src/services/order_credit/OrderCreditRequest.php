<?php

namespace Platron\Connectum\services\order_credit;

use Platron\Connectum\services\BasePostRequest;
use Platron\Connectum\data_objects\LocationData;

class OrderCreditRequest extends BasePostRequest {
    /** @var int */
    protected $id;
    /** @var string */
    protected $amount;
    /** @var string */
    protected $currency;
    /** @var LocationData */
    protected $location;
    /** @var OptionsData */
    protected $options;
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return self::BASE_URL.'/orders/'.$this->id.'/credit';
    }

    /**
     * @param int $id
     * @param float $amount
     * @param string $currency
     * @param LocationData $location
     */
    public function __construct($id, $amount, $currency, LocationData $location) {
        $this->id = $id;
        $this->amount = (string)$amount;
        $this->currency = $currency;
        $this->location = $location;
    }
    
    /**
     * Set options
     * @param OptionsData $options
     * @return $this
     */
    public function setOptions(OptionsData $options){
        $this->options = $options;
        return $this;
    }
}
