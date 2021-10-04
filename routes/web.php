<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$appUrl = config('app.url');
$domain = parse_url($appUrl)['host'];
$tenantParam = config('tenant.route_param');

Route::domain("{{$tenantParam}}.$domain")
//    ->middleware('tenant')
    ->middleware('seturl')
    ->group(function () {


        Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);


    });
