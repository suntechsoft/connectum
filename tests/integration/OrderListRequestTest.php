<?php

namespace Platron\Connectum\tests\integration;

use Platron\Connectum\clients\GetClient;
use Platron\Connectum\data_objects\CardData;
use Platron\Connectum\services\order_list\OrderListRequest;
use Platron\Connectum\services\order_list\OrderListResponse;
use Platron\Connectum\handbooks\OrderStatus;

class OrderListRequestTest extends IntegrationTestBase {
    public function testRequest(){
        $client = (new GetClient($this->connectionSettings))->setLogger($this->logger);
        $request = new OrderListRequest();
        
        $card = new CardData();
        $card->type = OrderStatus::PREPARED;
        $request->setCard($card);
        
        $this->assertTrue((new OrderListResponse($client->sendRequest($request)))->isValid());
    }
}
