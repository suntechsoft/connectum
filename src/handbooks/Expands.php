<?php

namespace Platron\Connectum\handbooks;

class Expands {
    const 
        CARD = 'card',
        CLIENT = 'client',
        LOCATION = 'location',
        CUSTOM_FIELDS = 'issuer',
        SECURE3D = 'sucure3d',
        OPERATIONS_CASHFLOW = 'cashflow';
    
    public static function getAllExpands(){
        return array(
            self::CARD,
            self::CLIENT,
            self::LOCATION,
            self::CUSTOM_FIELDS,
            self::SECURE3D,
            self::OPERATIONS_CASHFLOW,
        );
    }
}
