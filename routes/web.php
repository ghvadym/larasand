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

Auth::routes([
    'reset' => false,
    'confirm' => false,
    'verify' => false,
]);


Route::namespace('App\Http\Controllers')->group(function() {

    Route::get('/', 'MainController@index')->name('home');
    Route::get('/shop', 'MainController@shop')->name('shop');

    //Admin Panel
    Route::group(['middleware' => 'auth'], function() {

        Route::group(['namespace' => 'User', 'prefix' => 'user'], function() {
            Route::get('/orders', 'OrderController@index')->name('orders.user.index');
            Route::get('/orders/{order}', 'OrderController@show')->name('orders.user.show');
        });

        Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function() {

            Route::group(['middleware' => 'is_admin'], function() {
                Route::resource('categories', 'CategoryController');
                Route::resource('products', 'ProductController');

                Route::get('/reset', 'ResetController@reset')->name('reset');

                Route::get('/orders', 'OrderController@index')->name('orders');
                Route::get('/orders/{order}', 'OrderController@show')->name('orders.show');
            });
        });
    });

    //Basket
    Route::group(['prefix' => 'basket'], function() {

        Route::post('/add/{id}', 'BasketController@basketAdd')->name('basket-add');
        Route::post('/remove/{id}', 'BasketController@basketRemove')->name('basket-remove');

        Route::group(['middleware' => 'basket_not_empty'], function() {

            Route::get('/', 'BasketController@basket')->name('basket');
            Route::get('/checkout', 'BasketController@basketCheckout')->name('basket-checkout');
            Route::post('/confirm', 'BasketController@basketConfirm')->name('basket-confirm');

        });

    });

    Route::get('/categories', 'MainController@categories')->name('categories');
    Route::get('/{category}', 'MainController@category')->name('category');
    Route::get('/{category}/{product}', 'MainController@product')->name('product');
});

