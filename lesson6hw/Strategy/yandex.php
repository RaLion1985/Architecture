<?php


class yandex implements IPay
{

    public function pay(Order $order)
    {
        echo " Оплата заказа носков через <b>YANDEX</b> на сумму " . $order->amount . "по номеру телефона " . $order->phone ." прошла успешно <br>";
    }
}