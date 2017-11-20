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
	Route::get('index', function () {
		return view('homes.index');
	});
	Route::get('/', function () {
		return view('homes.index');
	});

	//前台登录

	Route::resource('login', 'LoginController');
	Route::post('slogin', 'LoginsController@store');

	//注册
	Route::resource('register', 'RegController');
	Route::post('co', 'VerificationController@co');//发送验证码
	Route::get('cos', 'VerificationController@cos');//验证验证码
	Route::get('ph','VerificationController@ph');//验证手机号


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
		Route::resource('pass', 'PassController');
		Route::resource('paypass', 'PaypassController');
		//用户地址
		Route::resource('useraddr', 'UseraddrController');
		//用户订单
		Route::resource('userorder', 'UserorderController');
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
		

	});



	//商家 笑
	Route::group(['prefix'=>'seller','namespace'=>'seller'],function(){
		
		//商家主页
		Route::resource('index','IndexController');
		
		//安全中心
		Route::resource('safety','SafetyController');
		
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

		//商铺信息
		Route::resource('shop','ShopController');

		//商品列表
		Route::resource('goodslist','GoodslistController');

		//商品上传
		Route::resource('goodsup','GoodsupController');


		
		
	});


});


//后台控制组
Route::group(['prefix'=>'admin','namespace'=>'Admins',], function () {
	
<<<<<<< HEAD
		//后台登录
	//	Route::resource('login','LoginController');
=======
	//后台登录
	Route::resource('login','LoginController');
>>>>>>> d4394ddfbf2f8974432480f6212e164129197d0e
			
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

		//商品二级子版块管理
		Route::resource('typeson','TypesonController');

		//三级子版块管理
		Route::resource('typethree','TypethreeController');

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