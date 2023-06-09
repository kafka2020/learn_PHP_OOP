<?php

error_reporting(-1);
require_once 'classes/Product.php';
require_once 'classes/I3D.php';
require_once 'classes/IGatget.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/BookProduct.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

function offerCase(IGatget $product){
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

$book = new BookProduct('Три мушкетера', 20, 1000);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');

var_dump($notebook instanceof NotebookProduct);
var_dump($notebook instanceof IGatget);
var_dump($book instanceof IGatget);

offerCase($notebook);
//offerCase($book);

debug($book);
var_dump($book);

echo $book->getProduct();

class A{};
class B extends A{};
class C {};

$a = new A;
$b = new B;
$c = new C;

var_dump($b instanceof A);
