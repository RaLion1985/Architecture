<?php


interface IPay
{
    public function pay(Order $order);
}