<?php

namespace Platron\Connectum\handbooks;

class OperationTypes {
    const
        AUTHORIZE = 'authorize',
        CREDIT = 'credit',
        REVERSE = 'reverse',
        CHARGE = 'charge',
        REFUND = 'refund',
        CHARGEBACK = 'chargeback',
        REPRESENTMENT = 'representment';
    
    public static function getTypes(){
        return array(
            self::AUTHORIZE,
            self::CREDIT,
            self::CHARGEBACK,
            self::CREDIT,
            self::REFUND,
            self::REPRESENTMENT,
            self::REVERSE,
        );
    }
}
