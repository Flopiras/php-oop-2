<?php

class Item
{
    private $title;
    private $image;
    private $type;

    // contructor
    public function __construct($title, $image, $type)
    {
    }

    // methods
    // title
    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    // image
    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }
}