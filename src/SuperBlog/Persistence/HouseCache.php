<?php
namespace SuperBlog\Persistence;

use SuperBlog\Model\House;
use SuperBlog\Model\HouseRepository;

class HouseCache
{

    private $houses;
    
    public function __construct()
    {
        $this->houses = [
            1 => new House(1, 2000, 300000, '123 street'),
            2 => new House(2, 2001, 200000, '345 street'),
            3 => new House(3, 2002, 100000, '567 street'),
            4 => new House(4, 2003, 150000, '789 street'),
            5 => new House(5, 2004, 250000, '91011 street')
        ];
    }


    public function getHouses()
    {
        return $this->houses;
    }

    public function getHouse($id)
    {
        return $this->houses[$id];
    }
}