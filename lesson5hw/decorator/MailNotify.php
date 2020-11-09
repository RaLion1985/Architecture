<?php


class MailNotify implements INotification
{
    protected INotification $objNotify;

    public function __construct(INotification $objNotify)
    {
        $this->objNotify = $objNotify;
    }

    public function Notify()
    {
        echo "Mail notification <br>";
        $this->objNotify->Notify();
    }
}