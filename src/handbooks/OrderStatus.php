<?php

namespace Platron\Connectum\handbooks;

class OrderStatus {
    const 
        NEW_STATUS = 'new',
        PREPARED = 'prepared',
        AUTHORIZED = 'authorized',
        CHARGED = 'charged',
        REVERSED = 'reversed',
        REFUNDED = 'refunded',
        REJECTED = 'rejected',
        FRAUD = 'fraud',
        DECLINED = 'declined',
        CHARGEDBACK = 'chargedback',
        CREDITED = 'credited',
        ERROR = 'error';
    
    public static function getAllStatuses(){
        return array(
            self::NEW_STATUS,
            self::PREPARED,
            self::AUTHORIZED,
            self::CHARGED,
            self::REVERSED,
            self::REFUNDED,
            self::REJECTED,
            self::FRAUD,
            self::DECLINED,
            self::CHARGEDBACK,
            self::CREDITED,
            self::ERROR,
        );
    }
}
