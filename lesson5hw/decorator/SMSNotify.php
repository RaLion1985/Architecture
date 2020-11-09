<?php


class SMSNotify implements INotification
{
    protected INotification $objNotify;

    public function __construct(INotification $objNotify)
    {
        $this->objNotify = $objNotify;
    }
    public function Notify()
    {
        echo "SMS notification <br>";
        $this->objNotify->Notify();
    }
}