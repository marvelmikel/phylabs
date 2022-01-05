<?php
use App\Http\Controllers\ElementController;
use App\Http\Controllers\NeutronXCSController;

use App\Http\Controllers\ElementParameterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;



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

Route::get('/' ,[NeutronXCSController::class, 'index'])->name('neutronxcs.index');

Route::get('/fastneutron', [NeutronXCSController::class, 'fastNeutonPage'])->name('neutronxcs.fast');
Route::post('/fastneutron', [NeutronXCSController::class, 'calcFastNeutronxcs'])->name('neutronxcs.fast.calc');


Route::any('/fastneutron/table' ,[ElementController::class, 'faststore'])->name('store');
Route::get('/fastneutron/table' ,[ElementController::class, 'calculation'])->name('neutronxcs.table');

});


// Route::get('/test' , function(){
	
//         $elements = Http::get('https://neelpatel05.pythonanywhere.com/')->json();
//         $array = [];

//       	foreach ($elements as $key => $element) {
//       		 array_push(  $array, json_decode(json_encode($element), true) );
//       	}

        
//         return ($array);
// })->name('welcome');

// TEST CODES
// Route::get('/wel' ,[ElementController::class, 'form'])->name('welcome');
//  Route::post('/wel' ,[ElementController::class, 'form'])->name('welcome');

//Route::get('/home', [HomeController::class, 'index'])->name('home');


