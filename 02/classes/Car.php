<?php

class Car
{

    public $color;
    public $wheels = 4;
    public $speed = 180;
    public $brand; // var - устаревшее ключевое слово
    // since PHP 5.6
    public $path = __DIR__ . '/test';
    public $test = 1 + 2;

}