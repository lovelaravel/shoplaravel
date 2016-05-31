<?php


namespace Lovelaravel\Shoplaravel\Shops\Contracts;


interface Shop
{

    /**
     * Add shop
     * 
     * @param array $shop with data of shop
     *
     * @return boolean true if shop added, else false if shop not added
     */
    public function add($shop);
}