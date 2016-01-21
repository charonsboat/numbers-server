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

// - /api - All Endpoints for the API
$app->group([ 'prefix' => '/api' ], function () use ($app)
{
    // - /api/v1 - Version One Endpoints for the API
    $app->group([ 'prefix' => '/v1' ], function () use ($app)
    {
        // - /api/v1/number - Number Endpoints for the API
        $app->group([ 'prefix' => '/number' ], function () use ($app)
        {
            // - /api/v1/number/{number} - GET Endpoint for the Numbers API
            $app->get('/{number:[0-9]+}', 'NumberController@index');
        });
    });
});
