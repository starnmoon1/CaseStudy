<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function (){
   return view('admin');
});

Route::post('/','UserController@store')->name('user.store');


Route::get('/login','LoginController@formLogin')->name('login');
Route::get('/register','LoginController@formRegister')->name('register');

//route cua hoan khong xoa
Route::get('/','HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('/', 'UserController@index')->name('user.index'); //done
        Route::get('/create', 'UserController@create')->name('user.create'); //done
        Route::post('/create', 'UserController@store')->name('user.store'); //done
        Route::get('/delete/{id}', 'UserController@delete')->name('user.delete'); //done
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

//nhanh dev

