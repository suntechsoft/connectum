<?php

namespace Platron\Connectum\tests\integration;

use Platron\Connectum\clients\GetClient;
use Platron\Connectum\handbooks\OperationStatus;
use Platron\Connectum\services\operation_list\OperationListRequest;
use Platron\Connectum\services\operation_list\OperationListResponse;

class OperationListTest extends IntegrationTestBase{
    public function testRequest(){
        $client = (new GetClient($this->login, $this->password, $this->certificatePath, $this->certificatePassword))->setTest()->setLogger($this->logger);
        $request = new OperationListRequest();
        $request->setStatus(OperationStatus::SUCCESS);
        
        $this->assertTrue((new OperationListResponse($client->sendRequest($request)))->isValid());
    }
}
