<?php

class Product
{

    private $name;
    protected $price;
    private $discount = 0;
//    public $public = 'PUBLIC';
//    protected $protected = 'PROTECTED';
//    private $private = 'PRIVATE';

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
//        var_dump($this->public);
//        var_dump($this->protected);
//        var_dump($this->private);
    }

    public function getProduct()
    {
        return "<hr><b>О товаре:</b><br>
                Наименование: {$this->name}<br>
                Цена со скидкой: {$this->getPrice()}<br>";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price * (100 - $this->discount) / 100;
    }

    /**
     * @return int
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param int $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }


}