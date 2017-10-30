<?php

namespace Platron\Connectum\clients;

use Platron\Connectum\services\BaseServiceRequest;
use Psr\Log\LoggerInterface;

abstract class BaseClient {
    
    const OK_HTTP_CODE = 200;
    const LOG_LEVEL = 0;
    
    /** @var string */
    protected $errorDescription;
    /** @var int */
    protected $errorCode;
    
    /** @var string */
    protected $login;
    /** @var string */
    protected $password;
    
    /**
     * Послать запрос
     * @param BaseServiceRequest $service
     * @param LoggerInterface $logger
     * @param int $connectionTimeout
     */
    abstract public function sendRequest(BaseServiceRequest $service, $logger, $connectionTimeout);
    
    /**
     * @param string $login
     * @param string $password
     */
    public function __construct($login, $password) {
        $this->login = $login;
        $this->password = $password;
    }
    
    /**
     * Получить массив хедеров
     * @return array
     */
    public function getHeaders(){
        return array(
            'Authorization: '.$this->login.' '.$this->password,
            'Content-Type: application/json',
        );
    }
}
