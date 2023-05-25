<?php
error_reporting(-1);
require_once 'classes/Car.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$car1 = new Car('черный', 4, 180, 'volvo');
$car2 = new Car('черный', 4, 200, 'bmw');

//$car1->__construct('черный', 4, 180, 'volvo');

echo $car1->getCarInfo();
echo $car2->getCarInfo();

$car1->getLorem();
$car2->getLorem();
