<?php
// web/index.php

require_once __DIR__.'/../vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;

$app = new Silex\Application();
$app->register(new DerAlex\Silex\YamlConfigServiceProvider(__DIR__ . '/settings.yml'));

// definitions
$app['debug'] = true;

$app->post('/validate/', function(Request $request) use ($app) {
    $receipt = $request->get('receipt');

    $password = $app['config']['itunes-password'];

    $validator = new iTunes\ReceiptValidator('https://buy.itunes.apple.com/verifyReceipt', $password);

    $rcpt = $validator->validateReceipt($receipt);

    return $app->json($rcpt);
});

$app->run();
