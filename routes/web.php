<?php

use App\Http\Controllers\SiteController;
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

Route::resource('/', SiteController::class);

Route::get('/blog/', 'App\Http\Controllers\SiteController@blog');


Route::get('/post/{slug}', 'App\Http\Controllers\SiteController@shows');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
