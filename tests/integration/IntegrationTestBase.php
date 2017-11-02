<?php

namespace Platron\Connectum\tests\integration;

use Platron\Connectum\tests\integration\MerchantSettings;

class IntegrationTestBase extends \PHPUnit_Framework_TestCase {
    
    public $testingUrl;
    public $login;
    public $password;
    public $logger;
    
    public function __construct() {
        $this->testingUrl = MerchantSettings::TESTING_URL;
        $this->login = MerchantSettings::BASIC_LOGIN;
        $this->password = MerchantSettings::BASIC_PASSWORD;
        $this->logger = new PsrLogAdapter();
        parent::__construct();
    }
}
