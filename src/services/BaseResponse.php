<?php

namespace Platron\Connectum\services;

use stdClass;

abstract class BaseResponse {
    
    /** @var int */
    protected $failure_type;
    
    /** @var string */
    protected $failure_message;
    
    public function __construct(stdClass $response) {
        foreach (get_object_vars($this) as $name => $value) {
			if (!empty($response->$name)) {
				$this->$name = $response->$name;
			}
		}
    }
    
    /**
     * Проверка на ошибки в ответе
     * @param array $response
     * @return boolean
     */
    public function isValid(){
        if(!empty($this->errorCode)){
            return false;
        }
        else {
            return true;
        }
    }
    
    /**
     * Получить тип ошибки
     * @return string
     */
    public function getErrorType(){
        return $this->failure_type;
    }
    
    /**
     * Получить описание ошибки
     * @return string
     */
    public function getErrorMessage(){
        return $this->failure_message;
    }
}
