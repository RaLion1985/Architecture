<?php


class FacebookNotify implements INotification
{
    protected INotification $objNotify;

    public function __construct(INotification $objNotify)
    {
        $this->objNotify = $objNotify;
    }

    public function Notify()
    {
        echo "Facebook notification <br>";
        $this->objNotify->Notify();
    }
}