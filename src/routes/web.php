<?php

use Illuminate\Support\Facades\Route;
use Magdasaif\Products\app\http\controllers\ProductController;

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

Route::get('product', function(){
    return 'hello from product package';
});
// Route::get('test-view', [ProductController::class,'test']);
Route::get('test-view', function(){
    return view('products::test-view');
});
