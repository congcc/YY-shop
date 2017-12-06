<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="_token" content="{{ csrf_token() }}"/>
		

		<title>@yield('title')</title>
		
		@section('head')

		@show
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<meta name="renderer" content="webkit">
		<meta http-equiv="Cache-Control" content="no-siteapp" />
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />
		<link href="/homes/basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link href="/homes/css/hmstyle.css" rel="stylesheet" type="text/css"/>
		<link href="/homes/css/skin.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" />
		<link href="/homes/css/dlstyle.css" rel="stylesheet" type="text/css">
		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/homes/js/validate.js"></script>
		<script src="/homes/layer/layer.js"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.min.js"></script>

	</head>

	<body>
		<header>
		<article>
				<div class="mt-logo">
					<!--顶部导航条 -->
					<div class="am-container header">
						<ul class="message-l">
							<div class="topMessage">
								<div class="menu-hd">
									@if($userid==0)<a href="{{url('home/login/')}}" target="_top" class="h">亲,登录</a>
									<a href="{{url('home/register')}}" target="_top">免费注册</a>
									@elseif($userid==1)<a href="{{url('home/user/')}}" target="_top" class="h">
										@if($user->userinfo->truename) 亲爱的{{$user->userinfo->truename}}
										@elseif(!$useruserinfo->truename) 亲爱的用户
										@endif
										</a>
									<a href="/home/index/{{$user->id}}/edit" target="_top">退出登录</a>
									@endif
								</div>
							</div>
						</ul>
						<ul class="message-r">
							<div class="topMessage home">
								<div class="menu-hd"><a href="{{url('home/index')}}" target="_top" class="h">商城首页</a></div>
							</div>
							<div class="topMessage my-shangcheng">
								<div class="menu-hd MyShangcheng"><a href="{{url('home/user/user')}}" target="_top"><i class="am-icon-user am-icon-fw"></i>个人中心</a></div>
							</div>

							<div class="topMessage mini-cart">
								<div class="menu-hd"><a id="mc-menu-hd" href="{{url('home/user/shopcart')}}" target="_top"><i class="am-icon-shopping-cart  am-icon-fw"></i><span>购物车</span><strong id="J_MiniCartNum" class="h">0</strong></a></div>
							</div>
							
							<div class="topMessage favorite">
								<div class="menu-hd"><a href="{{url('home/user/usercollect')}}" target="_top"><i class="am-icon-heart am-icon-fw"></i><span>收藏夹</span></a></div>
							</div>
							<div class="topMessage my-shangcheng">
								<div class="menu-hd MyShangcheng"><a href="{{url('home/seller/index')}}" target="_top"><i class="am-icon-user am-icon-fw"></i>商户中心</a></div>
							</div>
						</ul>
						</div>

						<!--悬浮搜索框-->

						<div class="nav white">
							<div class="logoBig">
								<li><img src="http://ozsps8743.bkt.clouddn.com/img/image_61531512438063png" /></li>
							</div>

							<div class="search-bar pr">
								<form  action="{{url('home/search')}}"  method="post">
									<input id="searchInput" name="index_none_header_sysc" type="text" placeholder="想吃点什么呢?" autocomplete="off" value="扇贝">
									
									<input id="ai-topsearch" class="submit am-btn" value="搜索" index="1" type="submit">
									{{ csrf_field()}}
								</form>
							</div>
						</div>

						<div class="clear"></div>
					</div>
				</div>
			</article>	
		</header>
           
		@section('content')

            
                

        @show

        @section('js')
		
		@show
		<script type="text/javascript " src="/homes/basic/js/quick_links.js "></script>
	</body>

</html>