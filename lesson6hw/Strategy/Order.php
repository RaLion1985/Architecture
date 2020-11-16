<?php


class Order
{
    public $amount;
    public $phone;

    public function __construct(float $amount, int $phone)
    {
        $this->amount = $amount;
        $this->phone = $phone;
    }
    public function pay (IPay $pay)
    {
        return $pay->pay($this);
    }

}