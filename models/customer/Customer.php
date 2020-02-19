<?php

namespace app\models\customer;

class Customer
{
    public string $name;
    public \DateTime $birth_date;
    public string $notes;
    public array $phones;

    public function __construct($name, $birth_date)
    {
        $this->name = $name;
        $this->birth_date = $birth_date;
    }
}