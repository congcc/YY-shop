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

	//首页
	
	Route::resource('index', 'IndexController');
	Route::resource('/', 'IndexController');

	//前台登录

	Route::resource('login', 'LoginController');
	Route::post('slogin', 'LoginsController@store');

	//注册
	Route::resource('register', 'RegController');
	Route::post('co', 'VerificationController@co');//发送验证码
	Route::post('cos', 'VerificationController@cos');//验证验证码
	Route::post('ph','VerificationController@ph');//验证手机号


	//商家注册页面(用户注册成商家)
	Route::resource('sregister','SregController');



	//商品搜索页
	Route::resource('search', 'SearchController');

	//商品详情页
	Route::resource('details', 'DetailsController');


	// 用户是否登录
	Route::group(['prefix'=>'user','namespace'=>'User','middleware'=>'hlogin'], function () {

		//用户个人中心首页
		Route::resource('user', 'UserController');
		Route::resource('/', 'UserController');
		//用户个人信息
		Route::resource('userinfo', 'UserinfoController');
		//用户账户安全
		Route::resource('usersafe', 'UsersafeController');
		Route::resource('pass', 'PassController');//修改密码
		Route::resource('paypass', 'PaypassController');//支付密码
		Route::post('ajaxpaypass', 'AjaxpaypassController@store')->where('id', '[0-9]+');
		Route::resource('bindph', 'BindphController');//换手机号
		Route::resource('email', 'EmailController');//邮箱认证
		Route::resource('idcard', 'IdcardController');//身份认证
		Route::get('card', 'IdcardController@store');//身份认证
		//用户地址
		Route::resource('useraddr', 'UseraddrController');
		Route::post('addr', 'AddrController@store');
		Route::post('editaddr', 'AddrController@update');
		Route::get('addr/{id}', 'AddrController@edit');
		Route::get('deladdr', 'AddrController@delete');

		//用户订单
		Route::get('userorders/{o_code}', 'UserorderController@destroy');
		Route::resource('userorder', 'UserorderController');

		Route::get('ordersinfo/{code}', 'OrdersinfoController@index');			//订单详情

		//用户退款售后
		Route::resource('usersale', 'UsersaleController');
		//用户优惠券
		Route::resource('userfav', 'UserfavController');
		//用户红包
		Route::resource('uwallet', 'UserwalletController');
		//用户账单明细
		Route::resource('userbill', 'UserbillController');
		//用户收藏
		Route::resource('usercollect', 'UsercollectController');
		//用户足迹
		Route::resource('userfoot', 'UserfootController');
		//用户评价
		Route::resource('ureview', 'UserreviewController');
		//用户消息
		Route::resource('usernews', 'UsernewsController');
		//用户购物车
		Route::resource('shopcart', 'shopcartController');
		Route::resource('car', 'CarController@store');
		Route::get('cardelete','CarController@delete');
		Route::get('addcar','CarController@addcar');
		

		//申请成为商家
		Route::resource('shopapply', 'ShopapplyController');
		

	});



	//商家 笑
	Route::group(['prefix'=>'seller','namespace'=>'seller','middleware'=>'slogin'],function(){
		
		//商家主页
		Route::resource('index','IndexController');
		
		//商家个人中心
		Route::resource('info','InfoController');
		
		//订单管理
		Route::resource('orderedit','OrdereditController');
		
		//退货管理
		Route::resource('orderback','OrderbackController');
		
		//我的钱包
		Route::resource('wallet','WalletController');
		
		//评论中心
		Route::resource('comments','CommentsController');

		
		//商品列表
		Route::resource('goodslist','GoodslistController');

		//商品上传
		Route::resource('goodsup','GoodsupController');

		//店铺

		Route::resource('di','DiController');




		
		
	});


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