<?php
error_reporting(-1);

require_once 'classes/File.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

//$obj1 = new File('file.txt');
//$obj2 = new File('file2.txt');
$obj1 = new File(__DIR__ . '/file.txt');
$obj2 = new File(__DIR__ . '/file2.txt');


//debug($obj1);

$obj1->write("Something!");
//debug($obj1);

$obj1->write("Something else...");
//debug($obj1);

$obj2->write("12345...");
//debug($obj2);
