<?php

namespace Platron\Connectum\handbooks;

class OperationStatus {
    const 
        SUCCESS = 'success',
        FAILURE = 'failure',
        ERROR = 'error';
    
    public function getAllStatuses(){
        return array(
            self::SUCCESS,
            self::FAILURE,
            self::ERROR,
        );
    }
}
