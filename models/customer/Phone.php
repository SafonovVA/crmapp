<?php


namespace app\models\customer;


class Phone
{
    public string $number;

    public function __construct($number)
    {
        $this->number = $number;
    }
}