<?php

namespace app\engine;

class Autoload
{ /*
    private $path = [
        'model',
        'engine'
    ];

    public function loadClass($className)
    {
        foreach ($this->path as $path) {
            $filename = "../{$path}/{$className}.php";
            var_dump($filename);
            if (file_exists($filename)) {

                include $filename;
                break;
            }
        }

    }*/
    public function loadClass($className){

        $filename = str_replace(["app","\\"],[DIR_ROOT . '/..',DIRECTORY_SEPARATOR], "{$className}.php" );
        //var_dump($className,$filename);
        if (file_exists($filename)) {
            include $filename;
        }


    }
}

