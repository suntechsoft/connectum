<?php

namespace Platron\Connectum\handbooks;

class CardTypes {
    const 
        VISA = 'visa',
        MASTERCARD = 'mastercard',
        DISCOVER = 'discover',
        AMEX = 'amex',
        MIR = 'mir';
    
    public static function getTypes(){
        return array(
            self::VISA,
            self::MASTERCARD,
            self::DISCOVER,
            self::AMEX,
            self::MIR,
        );
    }
}
