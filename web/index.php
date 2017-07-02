<?php

// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// ... definitions
$app->get('/api/second', function() {
    return new \Symfony\Component\HttpFoundation\JsonResponse(['Second api response!']);
});

$app->run();
