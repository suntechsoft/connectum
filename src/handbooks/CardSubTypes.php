<?php

namespace Platron\Connectum\handbooks;

class CardSubTypes {
    const 
        MASTERCARD_DEBIT = 'mastercard-debit',
        MAESTRO = 'maestro',
        INTERNATIONAL_MAESTRO = 'international-maestro',
        ELECTRON = 'electron',
        VISA_DEBIT = 'visa-debit',
        CLASSIC = 'classic',
        STANDART = 'standart';
    
    public static function getTypes(){
        return array(
            self::MASTERCARD_DEBIT,
            self::MAESTRO,
            self::INTERNATIONAL_MAESTRO,
            self::ELECTRON,
            self::VISA_DEBIT,
            self::CLASSIC,
            self::STANDART,
        );
    }
}
