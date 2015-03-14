<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/author', function()
{
//	return
});



//这里是直接设置控制器的方式
//控制器也能使用一些更加高级的框架特性例如自动依赖注入

//Route::get('customer/regist', array('as' => 'regist', 'uses' => 'App\Controllers\Customer\RegistController@getRegist'));


//Route::get('author/index', 'AuthorController@index');
//有点意思,配上这个就注册到controller了，就不用上面的写法了
Route::resource('author', 'AuthorController');