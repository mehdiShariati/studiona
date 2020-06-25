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

Route::get('/', "HomeController@index");
Route::get('/about', "HomeController@about");
Route::get('/contact', "HomeController@contact");
Route::post('/contact', "CustomerController@store");
Route::get('/home', 'HomeController@index')->name('home');
Route::get("/portfolios","HomeController@portfolios");
Route::get("/portfolio/show/{}","HomeController@portfolios");
Auth::routes();



Route::prefix('admin')->group(function () {
    Route::get('/',"AdminController@dashboard");
    Route::prefix('portfolio')->group(function () {
    Route::get('/',"AdminController@portfolio");
    Route::get('/createCategoryPortfolio',"AdminController@createCategoryPortfolio");
    Route::post('/createCategoryPortfolio',"Category_portfoliosController@store");
    Route::get("/createPortfolio","PortfolioController@create");
    Route::post("/createPortfolio","PortfolioController@store");
    
});

});
