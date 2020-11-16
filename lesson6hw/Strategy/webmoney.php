<?php


class webmoney implements IPay
{

    public function pay(Order $order)
    {
        echo " Оплата заказа носков через <b>WEBMONEY</b> на сумму " . $order->amount . "по номеру телефона " . $order->phone ." прошла успешно <br>";
    }
}