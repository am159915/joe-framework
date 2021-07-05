<?php
define("DS",DIRECTORY_SEPARATOR);
define("ROOT_PATH",dirname(__DIR__).DS);
define("APP",ROOT_PATH.'app'.DS);
define("CORE",APP.'core'.DS);
define("CONFIG",APP.'config'.DS);
define("CONTROLLERS",APP.'controllers'.DS);
define("MODELS",APP.'models'.DS);
define("VIEWS",APP.'views'.DS);
define("ROUTES",APP.'routes'.DS);
define("INC",APP.'inc'.DS);
define("LIBS",APP.'libs'.DS);
define("UPLOADS",ROOT_PATH.'public'.DS.'uploads'.DS);

$modules = [ROOT_PATH ,APP ,CORE,VIEWS ,ROUTES,CONTROLLERS ,MODELS ,CONFIG ,LIBS ,INC];
set_include_path(get_include_path(). PATH_SEPARATOR.implode(PATH_SEPARATOR,$modules));
spl_autoload_register('spl_autoload',false);

new Route();