<?php

require_once __DIR__ . '/../vendor/autoload.php';

use MVC\App;

$app1 = App::getInstance();

$app1->boot();

$app2 = App::getInstance();


if ($app2 === $app1) {
    var_dump($app1);
} else {
    echo ("t'es nul bouhhh");
}

$app1->singleton(fn(App $app1) => new MVC\OhPopiette(), 'barbecue');
$app1->singleton(fn(App $app1) => new MVC\OhMerguez(), 'grillade');
try {
    $app1->make('patate');
} catch (Exception $e) {
    echo ($e);
}
try {
    $app1->make('grillade');
} catch (Exception $e) {
    echo($e);
};
try {
    $app1->make('barbecue');
} catch (Exception $e) {
    echo ($e);
};

