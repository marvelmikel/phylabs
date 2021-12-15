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

if (App::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/', function () {
    return view('index');
})->name('pages.index');

Route::get('/about', function () {
    return view('about');
})->name('pages.about');


Route::group(['prefix' => 'neutronxcs'], function(){
	Route::get('/', function(){
		return view('modules.neutrons.index');
	})->name('neutronxcs.index');

	Route::get('/fastneutron', function(){
		return view('modules.neutrons.fast');
	})->name('neutronxcs.fast');
});
