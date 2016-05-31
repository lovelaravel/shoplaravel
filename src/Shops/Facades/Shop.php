<?php


namespace Lovelaravel\Shoplaravel\Shops\Facades;


use Illuminate\Support\Facades\Facade;

class Shop extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'Shop';
    }
}