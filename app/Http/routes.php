<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

//前台
Route::group(['prefix'=>'home','namespace'=>'Homes'], function () {

	//前台登录
	Route::get('login', function () {
		return view('homes.login');
	});

	//用户注册
	Route::resource('register', 'RegController');

	//前台首页
	Route::get('index', function () {
		return view('homes.index');
	});

	//发送验证码
	Route::get('co', 'VerificationController@co');

	//验证验证码
	Route::get('cos', 'VerificationController@cos');

	//验证手机号
	Route::get('ph','VerificationController@ph');
});


//后台控制组
Route::group(['prefix'=>'admin','namespace'=>'Admins',], function () {
	
		//后台登录
		Route::resource('login','LoginController');
			
		// 'meddleware'=>'login'
	Route::group([], function () {
		
		//后台首页
		Route::resource('admin','AdminController');

		//后台人员管理
		Route::resource('user','UserController');
		Route::get('/userauth','UsersController@index');


		//买家buyer管理
		Route::resource('buys','BuysController');

		//卖家seller管理
		Route::resource('seller','SellerController');

		//商家申请check
		Route::resource('check','CheckController');

		//商品上传申请 
		Route::resource('goods','GoodsController');


		//商品分类管理
		Route::resource('type','TypeController');

		//订单状态管理
		Route::resource('orders','OrdersController');

		//投诉管理
		Route::resource('complaint','ComplaintController');

		//广告管理
		Route::resource('adver','AdverController');

		//友情链接
		Route::resource('flink','FlinkController');

		//网站管理
		Route::resource('web','WebController');
	
	});

});