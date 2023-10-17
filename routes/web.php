<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;

use App\Http\Controllers\dashboardController;
use Faker\Guesser\Name;
use GuzzleHttp\Promise\Create;

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

Route::get('/', homeController::class);

route::get('forms', [dashboardController::class, 'index']);

route::get('forms/create', [dashboardController::class, 'create']);

route::get('forms/{form}', [dashboardController::class, 'show']);
