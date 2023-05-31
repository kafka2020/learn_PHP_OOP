<?php

use wfm\interfaces\IGadget;
use app\{BookProduct, NotebookProduct};

//require_once 'phpmailer/src/PHPMailer.php';

error_reporting(-1);

require_once __DIR__ . '/vendor/autoload.php';

/*function autoloader1($class)
{
    $class = str_replace("\\", '/', $class);
    $file = __DIR__ . "/{$class}.php";
    if (file_exists($file)) {
        require_once $file;
    };
};

spl_autoload_register('autoloader1');*/

function debug($data)
{
    echo '<pre>' . print_r($data,1) . '</pre>';
}

function offerCase(IGadget $product)
{
    echo "<p>Предлагаем чехол для гаджета {$product->getName()}</p>";
}

$book = new BookProduct('Три мушкетера', 20, 1000);
$notebook = new NotebookProduct('Dell', 1000, 'Intel');

//offerCase($notebook);
//$book->test = 'Hello';
//$book->test2 = 'Hello';
//echo $book->test;
//echo $book->nobody;
echo $book->name;
debug($book);
//debug($notebook);

//echo  $book->getProduct();
//echo $book;