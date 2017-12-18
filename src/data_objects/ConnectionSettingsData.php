<?php

namespace Platron\Connectum\data_objects;

class ConnectionSettingsData extends BaseDataObject {
    public $login;
    public $password;
    public $certificatePath;
    public $privateKeyPath;
    public $privateKeyPassword;
    public $connectionTimeout = 30;
    protected $baseUrl = 'https://api.connectum.eu';
    
    public function setTestingMode(){
        $this->baseUrl = 'https://api.sandbox.connectum.eu';
    }
    
    public function getBaseUrl(){
        return $this->baseUrl;
    }
}
