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

Route::get('/customers/create', "CustomersController@create")->name('customers.create');

Route::get('/customers/{id}/edit', "CustomersController@edit")->name('customers.edit');

Route::get('/customers/index', "CustomersController@index")->name('customers.index');

Route::get('/customers/{id}/show', "CustomersController@show")->name('customers.show');
