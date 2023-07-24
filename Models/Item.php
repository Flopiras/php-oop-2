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
        $this->setCategory($category);
        $this->setPrice($price);
    }

    // methods
    // category
    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    // price
    public function getPrice()
    {
        return '€ ' . $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
}
