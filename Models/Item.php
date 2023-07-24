<?php

class Item
{
    private $title;
    private $image;
    private $type;

    // contructor
    public function __construct($title, $image, $type)
    {
        $this->setTitle($title);
        $this->setImage($image);
        $this->setType($type);
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

    // type
    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}
