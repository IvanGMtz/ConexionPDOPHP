<?php

function my_autoload($clase){
    $carpeta=(array)[
        dirname(__DIR__)."/scripts/clientes",
        dirname(__DIR__)."/scripts/compras"
    ];

    foreach($carpeta as $ruta){
        if($handler = opendir($ruta)){
            while($file =readdir($handler)){
                if($file != "." & $file != ".."){
                    require_once($ruta ."/".$file);
                }
            }
        }
    }
}
spl_autoload_register("my_autoload");

print_r(\app\detail\detail::getInstance(["nombre"=>"Ivan","edad"=> 23]));
// new app\userDetails\userDetails();