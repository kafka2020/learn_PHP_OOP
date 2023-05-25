<?php

require_once 'classes/FirstClass.php';

$object_1 = new FirstClass();  // Двойный скобки не обязательны, но желательны
$object_2 = new FirstClass();

var_dump($object_1);
var_dump($object_2);