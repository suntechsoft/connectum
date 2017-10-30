<?php

namespace Platron\Connectum\services;

use Psr\Log\LoggerInterface;

abstract class BaseServiceRequest {
    
    /** @var LoggerInterface */
    protected $logger = null;
    /** @var integer */
    protected $timeout = 30;
    
    /**
     * Отправить запрос
     */
    abstract function sendRequest();
    
    /**
	 * Получить url для запроса
	 * @return string
	 */
	abstract public function getRequestUrl();
    
    /**
	 * Получить параметры, сгенерированные командой
	 * @return array
	 */
	public function getParameters() {
		$filledvars = array();
		foreach (get_object_vars($this) as $name => $value) {
			if ($value) {
				$filledvars[$name] = (string)$value;
			}
		}

		return $filledvars;
	}
    
    /**
     * Установить лог
     * @param LoggerInterface $logger
     */
    public function setLog(LoggerInterface $logger){
        $this->logger = $logger;
    }
    
    /**
     * Установить максимальное время ожидания ответа
     * @param integer $timeout
     */
    public function setConnectionTimeout($timeout){
        $this->timeout = $timeout;
    }
}
