<?php

namespace Platron\Connectum\services\order_list;

use DateTime;
use Platron\Connectum\data_objects\CardData;
use Platron\Connectum\data_objects\ClientData;
use Platron\Connectum\data_objects\IssuerData;
use Platron\Connectum\data_objects\LocationData;
use Platron\Connectum\services\BaseGetRequest;

class OrderListRequest extends BaseGetRequest {
    
    /** @var array */
    protected $expands;
    /** @var string */
    protected $status;
    /** @var string */
    protected $created_from;
    /** @var string */
    protected $created_to;
    /** @var string */
    protected $merchant_order_id;
    /** @var CardData */
    protected $card;
    /** @var IssuerData */
    protected $issuer;
    /** @var ClientData */
    protected $client;
    /** @var LocationData */
    protected $location;
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return self::BASE_URL.'/orders/';
    }

    /**
     * Set expands
     * @param array $expands
     * @return $this
     */
    public function setExpands($expands) {
        $this->expands = implode(',', $expands);
        return $this;
    }
    
    /**
     * Set status
     * @param string $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }
    
    /**
     * Set created from
     * @param DateTime $dateFrom
     * @return $this
     */
    public function setCreatedFrom(DateTime $dateFrom){
        $this->created_from = $dateFrom->format('Y-m-d H:i:s');
        return $this;
    }
    
    /**
     * Set created to
     * @param DateTime $dateTo
     * @return $this
     */
    public function setCreatedTo(DateTime $dateTo){
        $this->created_to = $dateTo->format('Y-m-d H:i:s');
        return $this;
    }
    
    /**
     * Set merchant order id
     * @param string $order
     * @return $this
     */
    public function setOrder($order){
        $this->merchant_order_id = $order;
        return $this;
    }
    
    /**
     * Set card filter
     * @param CardData $card
     * @return $this
     */
    public function setCard(CardData $card){
        $this->card = $card;
        return $this;
    }
    
    /**
     * Set issuer filter
     * @param IssuerData $issuer
     * @return $this
     */
    public function setIssuer(IssuerData $issuer){
        $this->issuer = $issuer;
        return $this;
    }
    
    /**
     * Set client filter
     * @param IssuerData $client
     * @return $this
     */
    public function setClient(ClientData $client){
        $this->client = $client;
        return $this;
    }
    
    /**
     * Set location
     * @param LocationData $location
     * @return $this
     */
    public function setLocation(LocationData $location){
        $this->location = $location;
        return $this;
    }
}
