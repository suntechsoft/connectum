<?php

namespace Platron\Connectum\services\operation_list;

use Platron\Connectum\services\BaseGetRequest;

class OperationsRequest extends BaseGetRequest {
    
    /** @var array */
    protected $expands;
    /** @var string */
    protected $status;
    /** @var string */
    protected $created_from;
    /** @var string */
    protected $created_to;
    /** @var array */
    protected $types;
    
    /**
     * {@inheritdoc}
     */
    public function getRequestUrl() {
        return '/operations/';
    }

    /**
     * Set expands
     * @param array $expands
     * @return $this
     */
    public function setExpands($expands) {
        $this->expands = $expands;
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
     * Set types filter
     * @param array $types
     * @return $this
     */
    public function setTypes($types){
        $this->types = implode(',',$types);
        return $this;
    }
}
