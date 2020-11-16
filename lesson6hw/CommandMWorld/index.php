<?php

spl_autoload_register(function ($class) {
    include $class.'.php';
});
$filename="Some text.txt";
$text="Some text for editing";
file_put_contents($filename,$text);


$Text = New Text();
$Text->action('copy',$filename,1,4);
$Text->action('cut',$filename,1,4);
$Text->action('cut',$filename,2,5);
$Text->action('paste',$filename,1,0);

$Text->down(2);
$Text->up(2);