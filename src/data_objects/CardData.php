<?php

namespace Platron\Connectum\data_objects;

class CardData extends BaseDataObject {
    public $holder;
    public $subtype;
    public $type;
    public $cvv;
    public $expiration_month;
    public $expiration_year;
}
