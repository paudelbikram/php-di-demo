<?php

namespace SuperBlog\Persistence;

use SuperBlog\Model\House;
use SuperBlog\Model\HouseRepository;
use SuperBlog\Persistence\HouseCache;

class InMemoryHouseRepository implements HouseRepository
{
    /**
     * @var HouseCache
     */
    private $housecache;

    public function __construct(HouseCache $housecache)
    {
        $this->housecache = $housecache;
    }

    public function getHouses()
    {
        return $this->housecache->getHouses();
    }

    public function getHouse($id)
    {
        return $this->housecache->getHouse($id);
    }
}
