<?php

use Illuminate\Support\Facades\Validator;

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

//generic routes
Route::get('/', [
    'uses' => 'ItemController@getIndex',
    'as' => 'home'
]);

Route::get('/about', function () {
    return view('other.about');
})->name('about');

//item route
Route::get('/item/{id}', [
    'uses' => 'ItemController@getItem',
    'as' => 'item'
]);
//item route
Route::get('/item/{id}/like', [
    'uses' => 'ItemController@getLikeItem',
    'as' => 'itemlike'
]);
Route::post('/itemcreate', [
    'uses' => 'ItemController@postCreateItem',
    'as' => 'itemcreate'
]);

Route::post('/itemupdate', [
    'uses' => 'ItemController@postUpdateItem',
    'as' => 'itemupdate'
]);


//admin routes
Route::group(['prefix' => 'admin'], function () {
    //    url public/admin
    Route::get('', [
        'uses' => 'AdminController@getIndex',
        'as' => 'admin.index'
    ]);
    //    url public/admin/edit
    Route::get('edit/{id}', [
        'uses' => 'AdminController@getEdit',
        'as' => 'admin.edit'
    ]);
    //    url public/admin/create
    Route::get('create', [
        'uses' => 'AdminController@getCreate',
        'as' => 'admin.create'
    ]);
    //    url public/admin/delete
    Route::get('delete/{id}', [
        'uses' => 'AdminController@getDelete',
        'as' => 'admin.delete'
    ]);
});

