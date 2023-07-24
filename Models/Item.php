<?php

require_once __DIR__ . '/Element.php';

class Item extends Element
{
    private $category;
    private $price;

    // constructor
    public function __construct($title, $image, $type, $category, $price)
    {
        parent::__construct($title, $image, $type);
    }
}
