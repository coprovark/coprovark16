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

Route::get('/hello', function () {
    return view('hello');
});

#localhost : 800/page1
Route::get('/page1', function () {
    return view('page.page1');
});

Route::get('/page2', function () {
    return view('page.page2');
});

Route::get('/page3', function () {
    return view('page.page3');
});



Route::get('/page10/{id}', function($id) {
    $array =["Id"=>$id]; 
    return view('page.page10',$array);
});

