<?php
require "Polugon.php";

class Triangle extends Polugon
{
    public $base;
    public $height;

    public function getArea()
    {
        // TODO: Implement getArea() method.
        return (($this->base * $this->height) / 2);
    }

    public function getNumberOfSides()
    {
        // TODO: Implement getNumberOfSides() method.
        return (3);
    }
}