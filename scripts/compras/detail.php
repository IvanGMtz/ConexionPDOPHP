<?php

namespace app\detail;

use getInstance as get;

class detail
{
    use get;
    function __construct(public $nombre, public $edad){}
}