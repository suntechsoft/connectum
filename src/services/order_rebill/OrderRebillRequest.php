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
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return self::BASE_URL.'/orders/'.$this->id.'/rebill';
    }

    /**
     * @param float $amount
     * @param string $currency
     * @param LocationData $location
     */
    public function __construct($amount, $currency, LocationData $location) {
        $this->amount = (string)$amount;
        $this->currency = $currency;
        $this->location = $location;
    }
    
    /**
     * Set card
     * @param CardData $card
     */
    public function setCard(CardData $card){
        $this->card = $card;
    }
}
