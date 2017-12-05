
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
	Route::get('detailss', 'DetailsController@show');			//价格ajax
	Route::resource('sregister','SregController');



	//商品搜索页
	Route::resource('search', 'SearchController');
	Route::get('sales/{id}', 'SearController@create');
	Route::get('price/{ad}', 'SearController@car');
	Route::get('cyn/{cd}', 'SearController@bar');

	//商品详情页
	
	Route::resource('details', 'DetailsController');


	// 用户是否登录
	Route::group(['prefix'=>'user','namespace'=>'User','middleware'=>'hlogin'], function () {

		//用户个人中心首页
		Route::resource('user', 'UserController');
		Route::resource('/', 'UserController');
		//用户个人信息
		Route::resource('userinfo', 'UserinfoController');
		Route::resource('userpic', 'UserpicController');
		//用户账户安全
		Route::resource('usersafe', 'UsersafeController');
		Route::resource('pass', 'PassController');//修改密码
		Route::resource('passedit', 'PasseditController');//修改密码
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
		Route::get('orderpay/{code}', 'OrderpayController@index');			//支付
		Route::get('orderpays', 'OrderpayController@create');			//支付完成
		Route::get('oraddr', 'OraddrController@index');					//改变地址
		Route::get('ordersub/{gid}/{sid}/{toprice}/{num}/{label}/{gprices}', 'OrdersubController@index');			//下订单
		Route::post('ordersubs', 'OrdersubController@create');			//生成订单
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
		Route::get('usercollect/{id}', 'UsercollectController@del');

		Route::resource('usercollect', 'UsercollectController');
		//用户足迹
		Route::resource('userfoot', 'UserfootController');
		//用户评价
		Route::resource('ureview', 'UserreviewController');
		Route::resource('ucomments', 'UsercommentsController');
		Route::resource('mycom', 'MycomController');

		//用户消息
		Route::resource('usernews', 'UsernewsController');
		//用户购物车
		Route::resource('shopcart', 'shopcartController');
		Route::resource('car', 'CarController@store');
		Route::get('cardelete','CarController@delete');
		Route::post('addcar','CarController@addcar');
		

		//申请成为商家
		Route::resource('shopapply', 'ShopapplyController');
		Route::resource('uploads','UploadsController');
		//被封禁商家 
		Route::get('auth','ShopapplyController@auth');


	});



	//商家 笑
	Route::group(['prefix'=>'seller','namespace'=>'seller','middleware'=>'slogin'],function(){
		
		//商家主页
		Route::resource('index','IndexController');
		
		//商家个人中心
		Route::resource('info','InfoController');
		
		//订单管理
		Route::resource('orderedit','OrdereditController');

		//订单详情
		Route::resource('ordersinfo','OrderinfoController');
		
		//退货管理
		Route::resource('orderback','OrderbackController');
		
		//我的钱包
		Route::resource('wallet','WalletController');
		
		//评论中心
		Route::resource('comments','CommentsController');

		//定时器
		Route::resource('interval','IntervalController');
		
		//商户消息
		Route::resource('news','NewsController');


		
		//商品列表
		Route::resource('goodslist','GoodslistController');

		//商品上传
		
		Route::resource('goodsup','GoodsupController');
		Route::get('select','GoodsupController@select');
		Route::post('upload','GoodsupController@upload');//post方式发送ajax上传图片							
		Route::get('pic', function () {
		return view('homes.seller.uploadpic');
		});//商品上传图片页面


		//店铺

		Route::resource('di','DiController');

		//权限不够跳注册页

	
	});


});


//后台控制组
Route::group(['prefix'=>'admin','namespace'=>'Admins',], function () {
	

	//后台登录
	Route::resource('login','LoginController');

	Route::post('dlogin', 'LoginsController@store');

	
	// 'meddleware'=>'login'
	Route::group([], function () {

		//后台首页
		Route::resource('admin','AdminController');

		//后台人员管理
		Route::resource('user','UserController');
		Route::get('/userauth','UsersController@index');

		//管理员状态
		Route::resource('adminsauth','AdminauthController');


		//买家buyer管理
		Route::resource('buys','BuysController');
		Route::resource('buyss','BuyssController');

		//买家禁用
		Route::resource('buyedis','BuyedisController');


		//卖家seller管理
		Route::resource('seller','SellerController');
		//卖家禁用
		Route::resource('sellerdis','SellerdisController');


		//商家申请check
		Route::resource('check','CheckController');
		// 1 通过
		Route::resource('csucc','ChecksucceedController');
		// 2 未通过
		Route::resource('cfail','CheckfailController');


		//商品上传申请 
		//  审核中
		Route::resource('goods','GoodsController');
		// 通过申请
		Route::resource('gsucc','GoodssuccedController');
		// 未通过
		Route::resource('gfail','GoodsfailController');


		//商品分类管理
		Route::resource('type','TypeController');

		//商品二级子版块管理
		Route::resource('typeson','TypesonController');

		//三级子版块管理
		Route::resource('typethree','TypethreeController');
		Route::post('/typethree/aa','TypethreeController@aaaa');

		//订单状态管理
		// 0代付款
		Route::resource('orders','OrdersController');
		// 1 代发货
		Route::resource('shipping','ShippingController');
		// 2 待收货
		Route::resource('dinggoods','DingoodsController');
		//3 待评价
		Route::resource('plorder','PlorderController');
		//4 已完成
		Route::resource('coorder','CoorderController');
		// 5 已取消
		Route::resource('cancelled','CancelledController');


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
