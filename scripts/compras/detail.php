<?php

namespace app\detail;

class detail
{
    static $getinstance;
    function __construct(public $nombre, public $edad){}
    static function getInstance()
    {
        $arg = (array) func_get_args()[0];
        if(!self::$getinstance instanceof self){
            self::$getinstance = new self(...$arg);
            return self::$getinstance;
        }
        return self::$getinstance;
    }
}