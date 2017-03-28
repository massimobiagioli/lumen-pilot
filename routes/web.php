<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/cacheputtest', function () use ($app) {
    Cache::put("chiave1", "valore1", 1);
    $v = Cache::get("chiave1");
    if (!$v) {
        $v = "scaduta ...";
    }
    return $v;
});

$app->get('/cachegettest', function () use ($app) {
    $v = Cache::get("chiave1");
    if (!$v) {
        $v = "scaduta ...";
    }
    return $v;
});