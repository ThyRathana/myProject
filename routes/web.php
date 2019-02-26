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
    return view('category.home');
});

Route::get('/cake/{session_name()e}/student/{age}',function($tname,$tage)
{
	return "Hello there: ".$tname.'-'.$tage;	
});
Route::resource('/product','ProductController');

Route::get('/test/{id}','Test\TestController@routetesting');

Route::get('/master',function(){
	return view('category.home');
});
Route::get('master/seller',function()
{
	return view('category.seller');
});
Route::get('master/register',function()
{
	return view('category.register');
});
Route::get('/log',function()
{
	return view('category.login');
});

Route::get('master/customize',function()
{
	return view('category.customize');
});
Route::get('master/home',function()
{
	return view('category.home');
});
Route::get('master/user',function()
{
	return view('category.user');
});

///////////register custom 
Route::get('master/userRegister', function()
{
	return view('category.userRegister');
});
// Route::get('/register', 'registerAuthController@create')->name('userregister')
// Route::post('register', 'registerAuthController@store');

///////////


Auth::routes();
Auth::user();



// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');