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
Route::get('/', function () {
    return view('content.index');
})->name('home');
Route::get('/about', function () {
    return view('other.about');
})->name('about');

//item route
Route::get('/item/{id}', function ($id) {

    if ($id == 1) {
        $data = [
            'titel' => 'Boardgames voor groot en klein',
            'staat' => 'Gebruikt'];
    } elseif ($id == 2) {
        $data = [
            'titel' => 'Les Paul Strat van 1965',
            'staat' => 'Zo goed al nieuw'];
    } elseif ($id == 3) {
        $data = [
            'titel' => 'Supertofkeifijn boek',
            'staat' => 'Gebruikt maar kaft ontbreekt'];
    }

    return view('content.item', ['nieuweVariabele' => $data]);
})->name('item');

//Create item route
Route::post('/itemcreate', function (\Illuminate\Http\Request $request,
                                     Illuminate\Validation\Factory $validator) {
    $validation = $validator->make($request->all(), [
        'title' => 'required|max:20',
        'content' => 'required|min:10'
    ]);

    if($validation->fails()){
        return redirect()->back()->withErrors($validation);
    }else{
        $title = $request->input('title');
        return redirect('admin')->with('forminput', $title);
    }

})->name('itemcreate');


//admin routes
Route::name('admin.')->group(function () {
    Route::get('/adminedit', function () {
        return view('admin.edit');
    })->name('edit');

    Route::get('/admincreate', function () {
        return view('admin.create');
    })->name('create');

    Route::get('/admin', function () {
        return view('admin.index');
    })->name('index');
});

