<?php

return [
    /**
     * ------------------------------------------------------------------------------
     * Routing
     * ------------------------------------------------------------------------------
     *
     * You can configure the routing for the shop here (or even turn it off
     * altogether)
     */
    'routing' => [
        // Load the routes specified by the package, if not, you have to create
        // the routes by yourself in you project's route file
        'load_default_front' => true,
        'load_default_back'  => true,

        // When using default routes, here are some ways to customize them
        'prefix_front' => 'shop',
        'prefix_back' => 'shop/back',
    ]
];