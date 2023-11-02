<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;

use App\Http\Controllers\dashboardController;
use Faker\Guesser\Name;
use GuzzleHttp\Promise\Create;

use App\Http\Controllers\reportController;
use App\Http\Controllers\eventController;


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

Route::get('/', homeController::class)->name('home');



Route::controller(eventController::class)->group(function () {

    route::get('events/create', 'create')->name('events.create');

    route::post('events', 'store')->name('events.store');

    route::get('events/{event}', 'show')->name('events.show');

    route::get('events/{event}/edit', 'edit')->name('events.edit');

    route::put('events/{event}', 'update')->name('events.update');
});




Route::controller(reportController::class)->group(function () {

    route::get('reports/create', 'create')->name('reports.create');

    route::post('reports', 'store')->name('reports.store');

    route::get('reports/{report}', 'show')->name('reports.show');

    route::get('reports/{report}/edit', 'edit')->name('reports.edit');

    route::put('reports/{report}',  'update')->name('reports.update');
});
