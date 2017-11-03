<?php

namespace Platron\Connectum\clients;

use Platron\Connectum\services\BaseRequest;
use stdClass;
use Psr\Log\LoggerInterface;

abstract class BaseClient {
    
    const OK_HTTP_CODE = 200;
    const REDIRECT_HTTP_CODE = 201;
    
    const LOG_LEVEL = 0;
    
    /** @var string */
    protected $errorDescription;
    /** @var int */
    protected $errorCode;
    
    /** @var string */
    protected $login;
    /** @var string */
    protected $password;
    /** @var string */
    protected $baseUrl = 'https://api.connectum.eu';
    /** @var LoggerInterface */
    protected $logger;
    /** @var int */
    protected $connectionTimeout;
    /** @var string */
    protected $certificatePath;
    /** @var string */
    protected $certificatePassword;
    
    /**
     * Send request
     * @param BaseRequest $service
     * @return stdClass
     */
    abstract public function sendRequest(BaseRequest $service);
    
    /**
     * @param string $login
     * @param string $password
     * @param string $certificatePath PEM certificate
     * @param string $certificatePassword
     */
    public function __construct($login, $password, $certificatePath, $certificatePassword) {
        $this->login = $login;
        $this->password = $password;
        $this->certificatePath = $certificatePath;
        $this->certificatePassword = $certificatePassword;
    }
    
    /**
     * Get headers
     * @return array
     */
    public function getHeaders(){
        return array(
            'Authorization: '.$this->login.' '.$this->password,
            'Content-Type: application/json',
        );
    }
    
    /**
     * Set test mode
     * @return self
     */
    public function setTest(){
        $this->baseUrl = 'https://api.sandbox.connectum.eu';
        return $this;
    }
    
    /**
     * Set connection timeout
     * @param type $connectionTimeout
     * @return self
     */
    public function setConnectionTimeout($connectionTimeout){
        $this->connectionTimeout = $connectionTimeout;
        return $this;
    }
    
    /**
     * Set log
     * @param LoggerInterface $logger
     * @return self
     */
    public function setLogger(LoggerInterface $logger){
        $this->logger = $logger;
        return $this;
    }
}
