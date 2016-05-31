<?php

use Laracasts\TestDummy\Factory;

class ShopsTest extends TestCase
{
    public function setUp()
    {

        // Path to Model Factories (within your package)
        $pathToFactories = realpath(dirname(__DIR__).'/database/factories');

        Factory::$factoriesPath = $pathToFactories;

        parent::setUp();

    }

    /** @test */
    function add_shop_to_all_shops_company_for_backend(){

        $shop = [
            'company_short' => 'Industry',
            'company' => 'Industry East Europe John Doe',
            'address' => 'Last street 8',
            'zip_code' => '00-800',
            'city' => 'Warsaw',
            'state' => 'Mazowieckie',
            'country' => 'Poland',
            'tax' => '864-180-81-42',
            'nb_registry_number' => '154124512', // national business registry number
            
        ];

        var_dump($shop);
        
        $this->assertTrue(Shop::add($shop));
    }
}