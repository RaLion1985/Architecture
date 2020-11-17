<?php


class PaymentTransactionScript
{
    public function checkPayment (Data $data)
    {
        echo "Проверка данных: Имя пользователя ". $data->name . " сумма оплаты: ".$data->sum. "<br>";
    }
    public function checkBalance()
    {
        echo "Проверка баланса<br>";
    }
    public function hold(int $sum)
    {
        echo "Заморозка суммы " .$sum. "<br>";
    }
    public function approvePayment(int $sum)
    {
        echo "Потдверждение оплаты на сумму " .$sum ."<br>";
    }
    public function action ($data)
    {
        $this->checkPayment($data);
        $this->checkBalance();
        $this->hold($data->sum);
        $this->approvePayment($data->sum);
    }
}