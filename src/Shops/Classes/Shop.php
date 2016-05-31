<?php


namespace Lovelaravel\Shoplaravel\Shops\Classes;

use Illuminate\Contracts\Foundation\Application;
use Lovelaravel\Shoplaravel\Shops\Contracts\Shop as ShopInterface;

class Shop implements ShopInterface
{

    /** @var  Application the Laravel application instance. */
    protected $app;

    /**
     * Shop constructor.
     *
     * @param Application $app
     */
    public function __construct($app = null)
    {
        if (!$app){
            $app = app();
        }
        $this->app = $app;
    }

    /**
     * Add shop
     *
     * @param array $shop with data of shop
     *
     * @return boolean true if shop added, else false if shop not added
     */
    public function add($shop)
    {
        // TODO: Implement add() method.
    }
}