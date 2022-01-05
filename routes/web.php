<?php
use App\Http\Controllers\ElementController;
use App\Http\Controllers\ElementParameterController;
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

Route::get('/' ,[ElementController::class, 'index'])->name('neutronxcs.index');
Route::get('/fastneutron' ,[ElementController::class, 'fastneutron'])->name('neutronxcs.fast');
Route::any('/fastneutron/table' ,[ElementController::class, 'faststore'])->name('store');
Route::get('/fastneutron/table' ,[ElementController::class, 'calculation'])->name('neutronxcs.table');

});


//Route::get('/test' ,[ElementController::class, 'test'])->name('welcome');

// TEST CODES
// Route::get('/wel' ,[ElementController::class, 'form'])->name('welcome');
//  Route::post('/wel' ,[ElementController::class, 'form'])->name('welcome');

//Route::get('/home', [HomeController::class, 'index'])->name('home');