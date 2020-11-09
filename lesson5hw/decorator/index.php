<?php
spl_autoload_register(function ($classname) {
    require_once ($classname.'.php');
});

$notify1 = new FacebookNotify(new SMSNotify(new EmptyNotify()));
$notify2 = new SMSNotify(new FacebookNotify(new MailNotify(new EmptyNotify())));
echo "Notification 1 <br>";
$notify1->Notify();
echo "<hr>Notification 2 <br>";
$notify2->Notify();