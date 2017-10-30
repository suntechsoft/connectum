<?php

namespace Platron\Connectum\services;

use stdClass;

abstract class BaseResponse {
    
    /** @var int */
    public $failure_type;
    
    /** @var string */
    public $failure_message;
    
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
     * Получить описание ошибки из ответа
     * @return string
     */
    public function getError(){
        return $this->failure_message.' type '.$this->failure_type;
    }
}
