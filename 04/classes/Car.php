<?php

class Car
{

    public $color;
    public $wheels = 4;
    public $speed;
    public $brand;

    public function __construct($color, $wheels, $speed, $brand)
    {
        $this->color = $color;
        $this->wheels = $wheels;
        $this->speed = $speed;
        $this->brand = $brand;
//        echo __METHOD__ . '<br>';
    }

    public function getLorem(){
        ?>
        <div>Hello, world!</div>
        <?php
    }

//    Устаревший способ метода-конструктора. В PHP8 не поддерживается
//    public function Car ($color, $wheels, $speed, $brand)
//    {
//        $this->color = $color;
//        $this->wheels = $wheels;
//        $this->speed = $speed;
//        $this->brand = $brand;
//    }

    public function getCarInfo(){
        return "<h3>О моем авто:</h3>
            Марка: {$this->brand}<br>
            Цвет: {$this->color}<br>
            Кол-во колес: {$this->wheels}<br>
            Скорость: {$this->speed}<br>";
    }

    public function __destruct()
    {
        var_dump($this);
//        var_dump(debug($this));
    }
}