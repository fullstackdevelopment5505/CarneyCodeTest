<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/members', function () use ($router) {
    $members = App\Models\Member::all();
    return response()->json(['members' => $members]);
});

$router->get('/subscribed-members', function () use ($router) {
    $members = App\Models\Member::with('subscription')->get();
    return response()->json(['members' => $members]);
});

$router->get('/sorted-subscribed-members', function () use ($router) {
    $members = App\Models\Member::with('subscription')
        ->get()
        ->sortByDesc(function ($member) {
            return $member->subscription->price;
        });
    return response()->json(['members' => $members]);
});

$router->get('/avg-subscription', function () use ($router) {
    $sub_avg = App\Models\Member::with('subscription')
        ->get()
        ->avg(function ($member) {
            return $member->subscription->price;
        });
    return response()->json(['avg' => $sub_avg]);
});

// modified by me
$router->get('/', 'MemberController@index');
