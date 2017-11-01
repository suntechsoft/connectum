<?php

namespace Platron\Connectum\services\order_create;

use Platron\Connectum\data_objects\ClientData;
use Platron\Connectum\services\BasePostRequest;

class CreateOrderRequest extends BasePostRequest {
    
    /** @var float */
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
    /** @var string */
    protected $ip;
    /** @var string */
    protected $expiration_timeout;
    /** @var boolean */
    protected $force3ds;
    /** @var boolean */
    protected $auto_charge;
    /** @var string */
    protected $language;
    /** @var string */
    protected $return_url;
    /** @var string */
    protected $terminal;
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return self::BASE_URL.'/orders/create';
    }

    /**
     * @param float $amount
     * @param string $currency
     */
    public function __construct($amount, $currency) {
        $this->amount = (string)$amount;
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
     * Set ip
     * @param string $ip
     * @return self
     */
    public function setIp($ip){
        $this->ip = $ip;
        return $this;
    }
    
    /**
     * Set expire timeout
     * @param string $expireTimeout
     * @return self
     */
    public function setExpirationTimeout($expireTimeout){
        $this->expiration_timeout = $expireTimeout;
        return $this;
    }
    
    /**
     * Set force 3ds
     * @return self
     */
    public function setForce3ds(){
        $this->force3ds = true;
        return $this;
    }
    
    /**
     * Set auto capture
     * @return self
     */
    public function setAutoCharge(){
        $this->auto_charge = true;
        return $this;
    }
    
    /**
     * Set language
     * @param string $language
     * @return self
     */
    public function setLanguage($language){
        $this->language = $language;
        return $this;
    }
    
    /**
     * Set return url
     * @param string $returnUrl
     * @return self
     */
    public function setReturnUrl($returnUrl){
        $this->return_url = $returnUrl;
        return $this;
    }
    
    /**
     * Set template (mobile)
     * @param string $template
     * @return self
     */
    public function setTemplate($template){
        $this->return_url = $template;
        return $this;
    }
    
    /**
     * Set terminal
     * @param string $terminal
     * @return self
     */
    public function setTerminal($terminal){
        $this->terminal = $terminal;
        return $this;
    }
}
