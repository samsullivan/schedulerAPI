<?php

require __DIR__ . '/../vendor/autoload.php';

$app = Spark\Application::boot();

$app->addRoutes(function(Spark\Router $r) {

});

$app->run();
