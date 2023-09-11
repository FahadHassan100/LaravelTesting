<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class, 'index']);

Route::get('/log', function(){

    $Abc = "";

    \Log::info($Abc);
    dd("done");

});


// Route::get('/products', [ProductsController::class, 'index']);

// // Pattern is integer
// //Route::get('products/{id}', [ProductsController::class, 'show'])->where('id', '[0-9]+');


// // Pattern is string
// Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])->where([
//     'name' => '[a-z]+',
//     'id' => '[0-9]+'
// ]);
