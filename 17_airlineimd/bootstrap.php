<?php 
    // vette sessie
    session_start();

    spl_autoload_register(function($class){
        require_once(__DIR__. DIRECTORY_SEPARATOR . "classes" .DIRECTORY_SEPARATOR. $class . ".php");
    });

    // load interfaces
    require_once ("interfaces/iTicket.php");

    // load traits
    require_once ("traits/Json.php");