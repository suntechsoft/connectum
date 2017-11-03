<?php

namespace Platron\Connectum\tests\integration;

use Platron\Connectum\tests\integration\MerchantSettings;

class IntegrationTestBase extends \PHPUnit_Framework_TestCase {
    /** @var string */
    protected $testingUrl;
    /** @var string */
    protected $login;
    /** @var string */
    protected $password;
    /** @var string */
    protected $certificatePath;
    /** @var string */
    protected $certificatePassword;
    
    /** @var PsrLogAdapter */
    public $logger;
    
    public function __construct() {
        $this->logger = new PsrLogAdapter();
        $this->testingUrl = MerchantSettings::TESTING_URL;
        $this->login = MerchantSettings::BASIC_LOGIN;
        $this->password = MerchantSettings::BASIC_PASSWORD;
        $this->certificatePath = MerchantSettings::CERTIFICATE_PATH;
        $this->certificatePassword = MerchantSettings::CERTIFICATE_PASSWORD;
        parent::__construct();
    }
}
