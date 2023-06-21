<?php

namespace app\bill;
 
use getInstance as get;

class bill{
    use get;
    function __construct(public $nombre,  public $productos, public $monto,public $cantidad){
    }
}