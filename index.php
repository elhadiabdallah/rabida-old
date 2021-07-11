<?php

require_once 'Config/Connect.php';
require_once 'Config/Paths.php';
require_once 'Config/Hash_key.php';

function __autoload($class) {
    require LIBS . $class .".php";
}

$bootstrap = new Bootstrap();

$bootstrap->init();
