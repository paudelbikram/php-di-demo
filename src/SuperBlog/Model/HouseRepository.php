<?php

namespace SuperBlog\Model;

interface HouseRepository
{
    /**
     * @return House[]
     */
    public function getHouses();

    /**
     * @param string $id
     * @return House
     */
    public function getHouse($id);
}