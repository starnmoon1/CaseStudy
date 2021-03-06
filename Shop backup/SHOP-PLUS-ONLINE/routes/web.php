<?php

use Illuminate\Support\Facades\Route;

//long

Route::get('cart','CartController@index');
Route::get('add-to-cart/{id}','CartController@addToCart')->name('addToCart');

Route::patch('update-cart', 'CartController@update');

Route::delete('remove-from-cart', 'CartController@remove');
Route::post('/checkout/{total}/{quantity}', 'CartController@postCheckOut')->name('postCheckout'); //done


//Route::post('/','UserController@store')->name('user.store');


Route::get('/login','LoginController@formLogin')->name('login');
Route::get('/register','LoginController@formRegister')->name('register');
//thang
Route::post('/login','LoginController@login')->name('postLogin');
Route::get('/logout','LoginController@logout')->name('logout');
Route::middleware('CheckLogin')->prefix('users')->group(function (){
    Route::get('home', 'UserController@index')->name('login.home');
});


Route::get('/','HomeController@index')->name('home');
Route::get('/search', 'HomeController@search')->name('product.search');

Route::prefix('admin')->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('/', 'UserController@index')->name('user.index'); //done
        Route::get('/create', 'UserController@create')->name('user.create'); //done
        Route::post('/create', 'UserController@store')->name('user.store'); //done
        Route::get('/delete/{id}', 'UserController@destroy')->name('user.destroy'); //done
        Route::get('{id}/show','UserController@show')->name('user.show');
        Route::get('/edit/{id}', 'UserController@edit')->name('user.edit'); //done
        Route::post('/edit/{id}', 'UserController@update')->name('user.update');//done
    });

    Route::prefix('category')->group(function () {
        Route::get('/', 'CategoryController@index')->name('category.list');
        Route::get('/create', 'CategoryController@create')->name('category.create'); //done
        Route::post('/create', 'CategoryController@store')->name('category.store'); //done
        Route::get('/delete/{id}', 'CategoryController@delete')->name('category.delete'); //done
        Route::get('/edit/{id}', 'CategoryController@edit')->name('category.edit'); //done
        Route::post('/edit/{id}', 'CategoryController@update')->name('category.update');//done
    });

    Route::prefix('product')->group(function () {
        Route::get('/', 'ProductController@index')->name('product.list'); //done
        Route::get('/create', 'ProductController@create')->name('product.create'); //done
        Route::post('/create', 'ProductController@store')->name('product.store'); //done
        Route::get('/delete/{id}', 'ProductController@delete')->name('product.delete'); //done
        Route::get('/edit/{id}', 'ProductController@edit')->name('product.edit'); //done
        Route::post('/edit/{id}', 'ProductController@update')->name('product.update');//done

        Route::get('/detail', 'ProductController@detail')->name('product.detail'); //done
        Route::get('/checkout', 'ProductController@checkout')->name('product.checkout'); //done
        Route::get('/cart', 'ProductController@formCart')->name('product.cart');
    });
});

//import and export nhom hoan
//->name('formImport'); check middleware
Route::get('export', 'ExportController@export')->name('export');
Route::get('importExportView', 'ExportController@importExportView');
Route::post('import', 'ExportController@import')->name('import');


//login google
Route::get('google', function () {
    return view('googleAuth');
});
Route::get('auth/google', 'SocialController@redirectToGoogle');
Route::get('auth/google/callback', 'SocialController@handleGoogleCallback');



//nhanh anh thang
Route::post('/comment', 'UserController@postComment')->name('comment');
