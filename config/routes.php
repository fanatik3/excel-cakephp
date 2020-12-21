<?php

use Cake\Routing\Router;

Router::extensions(['xlsx']);


Router::plugin('Fanatik3/Excel', null, function($routes){
    $routes->connect('/:controller/:action');
});
