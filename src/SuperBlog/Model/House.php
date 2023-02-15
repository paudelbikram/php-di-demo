<?php

namespace SuperBlog\Model;

class House
{
    private $id;
    private $year;
    private $price;
    private $address;

    public function __construct($id, $year, $price, $address)
    {
        $this->id = $id;
        $this->year = $year;
        $this->price = $price;
        $this->address = $address;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getAddress()
    {
        return $this->address;
    }
}
