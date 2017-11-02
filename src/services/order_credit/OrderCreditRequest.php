<?php

namespace Platron\Connectum\services\order_credit;

use Platron\Connectum\data_objects\DynamicDescriptorData;
use Platron\Connectum\data_objects\LocationData;
use Platron\Connectum\data_objects\OptionsData;
use Platron\Connectum\services\BasePostRequest;

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
    /** @var DynamicDescriptorData */
    protected $dynamic_descritor;
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return '/orders/'.$this->id.'/credit';
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
     * @return self
     */
    public function setOptions(OptionsData $options){
        $this->options = $options;
        return $this;
    }
    
    /**
     * Set Dynamic descriptor
     * @param DynamicDescriptorData $dynamicDescriptor
     * @return self
     */
    public function setDynamicDescriptor(DynamicDescriptorData $dynamicDescriptor){
        $this->dynamic_descritor = $dynamicDescriptor;
        return $this;
    }
}
