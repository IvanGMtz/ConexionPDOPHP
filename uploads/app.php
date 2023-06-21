<?php
trait getInstance{
    static $getinstance;
    static function getInstance()
    {
        $arg = (array) func_get_args()[0];
        if(!self::$getinstance instanceof self){
            try{
                self::$getinstance = new self(...$arg);
                return self::$getinstance;
            }catch(\Throwable $th){
                print_r($th->getMessage());
            }
        }
        return self::$getinstance;
    }
}

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

print_r(app\bill\bill::getInstance([
    "monto"=>500000,
    "nombre"=>"Ivan",
    "productos"=>["lapiz", "cuadernos", "pistolas"],
    "cantidad"=>3
]));