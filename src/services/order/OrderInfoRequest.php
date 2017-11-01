<?php

namespace Platron\Connectum\services\order;

use Platron\Connectum\services\BaseGetRequest;

class OrderInfoRequest extends BaseGetRequest {
    
    /** @var int */
    protected $id;
    /** @var array */
    protected $expands = [];
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return self::BASE_URL.'/orders/'.$this->id;
    }

    /**
     * @param int $id
     */
    public function __construct($id){
        $this->id = $id;
    }
    
    /**
     * Set expands
     * @param array $expands
     */
    public function setExpands($expands){
        $this->expands = $expands;
    }
    
    /**
     * {@inheritdoc}
     */
    public function getParameters() {
        $params = parent::getParameters();
        $params['expands'] = implode(',',$this->expands);
        return $params;
    }
}
