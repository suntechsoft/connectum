<?php

namespace Platron\Connectum\services\order_create;

use Platron\Connectum\services\BaseResponse;
use Platron\Connectum\services\order_info\OrderInfoResponse;

class OrderCreateResponse extends BaseResponse
{

    const REDIRECT_URL = 'https://checkout.cnnn.eu/pay/%s';

    const REDIRECT_URL_SANDBOX = 'https://checkout.sandbox.cnnn.eu/pay/%s';

    /** @var OrderInfoResponse */
    public $order;

    public function __construct(\stdClass $response)
    {
        parent::__construct($response);
        if (!empty($response->orders[0])) {
            $this->order = new OrderInfoResponse($response);
        }
    }


    /**
     * @param $isSandbox bool
     * @return null|string
     */
    public function getRedirectUrl($isSandbox)
    {
        if (isset($this->order->id)) {
            if (isset($isSandbox) && $isSandbox) {

                return sprintf(self::REDIRECT_URL_SANDBOX, $this->order->id);
            }

            return sprintf(self::REDIRECT_URL, $this->order->id);
        }

        return null;
    }
}
