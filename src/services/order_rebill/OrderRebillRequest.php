<?php

namespace Platron\Connectum\services\order_rebill;

use Platron\Connectum\data_objects\CardData;
use Platron\Connectum\data_objects\LocationData;
use Platron\Connectum\services\BasePostRequest;

class OrderRebillRequest extends BasePostRequest {
    
    /** @var int */
    protected $id;
    /** @var string $amount */
    protected $amount;
    /** @var string */
    protected $currency;
    /** @var LocationData */
    protected $location;
    /** @var CardData */
    protected $card;
    /** @var string */
    protected $merchant_order_id;
    /** @var int */
    protected $segment;
    /** @var string */
    protected $description;
    /** @var array */
    protected $custom_fields;
    /** @var ClientData */
    protected $client;
    /** @var OptionsData */
    protected $options;
    /** @var DynamicDescriptorData */
    protected $dynamic_descritor;
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return '/orders/'.$this->id.'/rebill';
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
     * Set cvv in card data
     * @param CardData $card
     * @return self
     */
    public function setCard(CardData $card){
        $this->card = $card;
        return $this;
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
     * Set description
     * @param string $description
     * @return self
     */
    public function setDescription($description){
        $this->description = $description;
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
