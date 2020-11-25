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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::resource('/', 'HomeController');
Route::resource('/Home', 'HomeController');
Route::resource('/About', 'AboutController');

Route::resource('/Product', 'ProductController');
Route::resource('/Product_show', 'ProductshowController');

Route::resource('/Promotion', 'PromotionController');
Route::resource('/Promotion_show', 'PromotionshowController');

Route::resource('/bike_for_sell', 'BickForSellController');
Route::resource('/bikeforsell_show', 'BickforsellshowController');

Route::resource('/category', 'CategoryController');

Route::resource('/select_your_bike', 'SelectYourBikeController');
Route::resource('/Select_show', 'SelectyoubikeshowController');


Route::resource('/Service', 'ServiceController');

Route::resource('/News', 'NewsController');
Route::resource('/News_show', 'NewsShowController');

Route::resource('/Gallery', 'GalleryController');
Route::resource('/Register', 'RegisterController');
Route::resource('/Contact', 'ContactController');