<?php

namespace Platron\Connectum\tests\integration;

use Platron\Connectum\clients\GetClient;
use Platron\Connectum\services\order_list\OrderListRequest;
use Platron\Connectum\services\order_list\OrderListResponse;

class OrderListRequestTest extends IntegrationTestBase {
    public function testRequest(){
        $client = (new GetClient($this->login, $this->password, $this->certificatePath, $this->certificatePassword))->setTest()->setLogger($this->logger);
        $request = new OrderListRequest();
        
        $this->assertTrue((new OrderListResponse($client->sendRequest($request)))->isValid());
    }
}
