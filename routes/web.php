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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello');
});
#localhost:8000/page1
Route::get('/page1', function () {
	$array = [
		"NAME" => "" ,
		"ID"   => "" ,
		"GEN"  => ""
	];
	return view('page.page1' , $array);
});
Route::get('/page2', function () {
	return view('page.page2');
});
Route::get('/page3', function () {
	return view('page.page3');
});
Route::get('/page10/{id}', function ($id) {
	$array = [
		"ID" => $id
	];
	return view('page.page10',$array);
});
Route::get('/form_register', function () {
	return view('page.form_register');
});

Route::get('/form_check_login', function () {
	$data =[
		'users'=>[]
	];
return view('page.form_check_login',$data);
});
Route::post('/form_check_login','PageController@form_check_login');


Route::get('/form_login', function () {
	$data =[
		'users'=>[]
	];
return view('page.form_login',$data);
});
Route::post('/form_login','PageController@form_login');


#localhost:8000/page1 TO localhost:8000/page
Route::post('/page','PageController@show');
Route::post('/page11','PageController@show_password');
# select post
Route::post('/page12','PageController@show_select');
# form_login
Route::post('/form_login','PageController@form_login');


Route::get('/form_login2', function () {
	$array= ['username'=>'',
	'name'=>''
];
	return view('page.form_login',$array);
});
Route::post('/form_login2','PageController@form_login2');

 
//Route::get('/list_user', function () {
//	return view('page.list_user');
//});
Route::get('/list_users','UsersController@list_users');


//Route::get('delete_user/{id}', function ($id) {
  //  return 'User ='.$id;
//});

Route::get('/delete_users/{id}','UsersController@delete_users');

Route::post('/form_register_save','UsersController@form_register_save');


Route::post('/list_users_find','UsersController@list_users_find');
