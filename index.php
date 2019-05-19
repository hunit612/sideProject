<?php
require_once ("lib/config.php");

function __autoload($class){
    require LIBRARY .$class . ".php";
}

$app = new Bootstrap();

?>