<?php

// load config file 
require_once('Config/Config.php');


// // load Libaries
// require_once('Libaries/Controller.php');
// require_once('Libaries/Core.php');
// require_once('Libaries/Database.php');

spl_autoload_register(function($className){
    require_once('Libaries/'. $className . '.php');
    
});