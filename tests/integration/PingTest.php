<?php

namespace Platron\Connectum\tests\integration;

use Platron\Connectum\clients\GetClient;
use Platron\Connectum\services\ping\PingRequest;
use Platron\Connectum\services\ping\PingResponse;

class PingTest extends IntegrationTestBase {
    public function testRequest(){
        $client = (new GetClient($this->login, $this->password))->setTest()->setLogger($this->logger);
        $this->assertTrue(new PingResponse($client->sendRequest(new PingRequest())));
    }
}
