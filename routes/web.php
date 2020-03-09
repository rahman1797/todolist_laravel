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

Route::get('/','Todolist_C@main');


Route::post('/list/add','Todolist_C@add');

Route::get('/list/edit/{id}', 'Todolist_C@edit');

Route::post('change', 'Todolist_C@change');

