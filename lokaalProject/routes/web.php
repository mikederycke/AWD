<?php

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

Route::get('/', [
    'uses' => 'ItemController@getItems']);




Route::get('/about', function () {
    return view('other.about');
})->name('about');

Route::get('/item/{id}',function($id){
    return view('content.item', ["nieuweVariabele" => $id]);
})->name('item');

Route::get('/home', function () {
    return view('content.index');
})->name('home');

//grouping
Route::name('admin.')->group(function () {

    Route::get('index', function () {
        return view('admin.index');
    })->name('index');

    Route::get('create', function () {
        return view('admin.create');
    })->name('create');

    Route::get('edit', function () {
        return view('admin.edit');
    })->name('edit');

});
