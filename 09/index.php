<?php

error_reporting(-1);
require_once 'classes/Product.php';
//require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$book = new BookProduct('Три мушкетера', 20, 1000);

debug($book);

//$book->discount = 50;
//$book->setDiscount(50);
echo $book->getDiscount();

echo $book->getProduct();

//echo $book->price;
//echo $book->getPrice();

//var_dump($book->public);
//var_dump($book->protected);
//var_dump($book->private);
