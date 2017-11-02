<?php

namespace Platron\Connectum\services;

use Platron\Connectum\data_objects\BaseDataObject;
use Psr\Log\LoggerInterface;

abstract class BaseRequest {
    
    const BASE_URL = 'www.connectum.com';
    
    /** @var LoggerInterface */
    protected $logger = null;
    /** @var integer */
    protected $timeout = 30;
    /** @var string */
    protected $baseUrl = 'www.connectum.com';    
    
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
                if($value instanceof BaseDataObject){
                    $filledvars[$name] = $value->getParameters();
                } else {
                    $filledvars[$name] = $value;
                }
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
    
    /**
     * Set base url
     * @param string $url
     */
    public function setBaseUrl($url){
        $this->baseUrl = $url;
    }
    
    /**
     * Get base url
     * @return string
     */
    public function getBaseUrl(){
        return $this->baseUrl;
    }
}
