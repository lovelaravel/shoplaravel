<?php

namespace Lovelaravel\ShopLaravel;

use Illuminate\Contracts\Foundation\Application;
use Lovelaravel\Shoplaravel\Shops\Classes\Shop;

class ShopLaravelServiceProvider extends \Illuminate\Support\ServiceProvider
{

    public static $RES_NAMESPACE = 'shoplaravel';
    public static $CONFIG_FILE = 'shoplaravel.php';

    /** @var  string Base directory for the package */
    private $packageDir;

    /**
     * Create a new service provider instance
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     */
    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->packageDir = dirname(__DIR__);
    }

    /**
     * Register the service provider
     */
    public function register()
    {
        // Merge configuration
        $this->mergeConfigFrom(
            $this->packageDir . '/config/' . self::$CONFIG_FILE,
            self::$RES_NAMESPACE
        );
    }

    public function boot()
    {
        parent::boot();

        // Add the install wizard routes front if asked to
        if ( ! $this->app->routesAreCached()) {
            require($this->packageDir . '/src/Routes/front_api.php');
        }

        // Add the install wizard routes back if asked to
        if ( ! $this->app->routesAreCached()) {
            require($this->packageDir . '/src/Routes/back.php');
        }
        
        // Facades
        $this->app->singleton('Shop', function ($app){
            return new Shop($app); 
        });
        
        $this->app->alias('Shop', Shop::class);

        // We have some views and translations for the wizard
        $this->loadViewsFrom(
            $this->packageDir . '/resources/views',
            self::$RES_NAMESPACE
        );
        $this->loadTranslationsFrom(
            $this->packageDir . '/resources/lang',
            self::$RES_NAMESPACE
        );
    }
}