<?php

namespace Platron\Connectum\services\order_create;

use Platron\Connectum\data_objects\ClientData;
use Platron\Connectum\data_objects\DynamicDescriptorData;
use Platron\Connectum\data_objects\LocationData;
use Platron\Connectum\data_objects\OptionsData;
use Platron\Connectum\services\BasePostRequest;

class OrderCreateRequest extends BasePostRequest {
    
    /** @var string */
    protected $amount;
    /** @var string */
    protected $currency;
    /** @var string */
    protected $merchant_order_id;
    /** @var int */
    protected $segment;
    /** @var array */
    protected $custom_fields;
    /** @var ClientData */
    protected $client;
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
        return '/orders/create';
    }

    /**
     * @param float $amount
     * @param string $currency
     */
    public function __construct($amount, $currency) {
        $this->amount = (string) round($amount, 2);
        $this->currency = $currency;
    }
    
    /**
     * Set merchant order id
     * @param string $id
     * @return self
     */
    public function setOrder($id){
        $this->merchant_order_id = $id;
        return $this;
    }
    
    /**
     * Set segment
     * @param int $segment
     * @return self
     */
    public function setSegment($segment){
        $this->segment = $segment;
        return $this;
    }
    
    /**
     * Set custom fields
     * @param array $fields
     * @return self
     */
    public function setCustomFields($fields){
        $this->custom_fields = $fields;
        return $this;
    }
    
    /**
     * Set client
     * @param ClientData $client
     * @return self
     */
    public function setClient(ClientData $client){
        $this->client = $client;
        return $this;
    }
    
    /**
     * Set location
     * @param LocationData $location
     * @return self
     */
    public function setLocation(LocationData $location){
        $this->location = $location;
        return $this;
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
    
    /**
     * {@inheritdoc}
     */
    public function getParameters() {
        $parameters = parent::getParameters();
        $parameters['extra_fielfs'] = $this->dynamic_descritor;
        return $parameters;
    }
}
