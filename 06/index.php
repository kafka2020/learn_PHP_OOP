<?php
error_reporting(-1);
require_once 'classes/Car.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

echo Car::$countCar;
echo '<br>';
$car1 = new Car('черный', 4, 180, 'volvo');
echo Car::$countCar;
echo '<br>';
$car2 = new Car('черный', 4, 200, 'bmw');
echo Car::getcount();

echo $car1->getCarInfo();
echo $car2->getCarInfo();

echo $car1->Test();
//echo $car1::Test();   // В старых версиях PHP есть возможность вызвать нестатические методы статично

echo $car1->getPrototypeInfo();

echo Car::TEST_CAR_SPEED;
echo Car::TEST_CAR;

echo Car::class;
