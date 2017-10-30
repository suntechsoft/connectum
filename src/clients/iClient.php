<?php

namespace Platron\Connectum\clients;

use Platron\Connectum\services\BaseServiceRequest;

interface iClient {
    
    /**
     * Послать запрос
     * @param \Platron\Connectum\BaseService $service
     */
    public function sendRequest(BaseServiceRequest $service);
}
