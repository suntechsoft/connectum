<?php

namespace Platron\Connectum\tests\integration;

use Platron\Connectum\tests\integration\MerchantSettings;

class IntegrationTestBase extends \PHPUnit_Framework_TestCase {
    
    const 
        PAN_SUCCESS = '4111111111111111',
        PAN_NON_3DS_DECLINED = '4276990011343663',
        PAN_INTERNAL_ERROR = '5555555555555599',
        PAN_3DS_NOT_ENROLLED = '4276838748917319',
        PAN_DECLINED_AS_FRAUD = '4000000000000002';
    
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
        $this->certificatePath = __DIR__.'/certificate/'.MerchantSettings::CERTIFICATE_NAME;
        $this->certificatePassword = MerchantSettings::CERTIFICATE_PASSWORD;
        parent::__construct();
    }
}
