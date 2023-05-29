<?php

abstract class Product
{

    private $name;
    protected $price;
    private $discount = 0;

//    const TEST = 10;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
//        self::TEST = 20;
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

    abstract protected function addProduct($name, $price);

}