<?php

spl_autoload_register(function ($class) {
   $path = dirname(__DIR__ ). "/class/" . str_replace("\\", "/", $class) . '.php';
   require ($path);
});

use Second_Class\Second;

$msg1 = new First();
$msg1->print_mess1();

$msg2 = new Second();
$msg2->print_mess2();