<?php

namespace Platron\Connectum\services\order_info;

use Platron\Connectum\handbooks\Expands;
use Platron\Connectum\SdkException;
use Platron\Connectum\services\BaseGetRequest;

class OrderInfoRequest extends BaseGetRequest {
    
    /** @var int */
    private $id;
    /** @var string */
    protected $expand;
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return '/orders/'.$this->id;
    }

    /**
     * @param int $id
     */
    public function __construct($id){
        $this->id = $id;
    }
    
    /**
     * Set expands
     * @param string $expand
     */
    public function setExpands($expands){
        if(!empty(array_diff($expands, Expands::getAllExpands()))){
            throw new SdkException('Wrong expand. Use from constants');
        }
        $this->expand = implode(',', $expands);
    }
}
