<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
		<meta name="_token" content="{{ csrf_token() }}"/>

		<title>@yield('title')</title>
	
		<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/systyle.css" rel="stylesheet" type="text/css">
		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		
		<script src="/homes/js/validate.js"></script>
		<script src="/homes/layer/layer.js"></script>

		@section('head')

		@show
	</head>

	<body>
		<!--头 -->
			<article>
				<div class="mt-logo">
					<!--顶部导航条 -->
					<div class="am-container header">
						<ul class="message-l">
							<div class="topMessage">
								<div class="menu-hd">
									
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
							<div class="topMessage my-shangcheng">
								<div class="menu-hd MyShangcheng"><a href="{{url('home/index/5/edit')}}" target="_top"><i class="am-icon-user am-icon-fw"></i>退出登录</a></div>
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
            <div class="nav-table">
					   <div class="long-title"><span class="all-goods">全部分类</span></div>
					   <div class="nav-cont">
							<ul>
								<li class="index"><a href="#">首页</a></li>
                                <li class="qc"><a href="#">闪购</a></li>
                                <li class="qc"><a href="#">限时抢</a></li>
                                <li class="qc"><a href="#">团购</a></li>
                                <li class="qc last"><a href="#">大包装</a></li>
							</ul>
						    <div class="nav-extra">
						    	<i class="am-icon-user-secret am-icon-md nav-user"></i><b></b>我的福利
						    	<i class="am-icon-angle-right" style="padding-left: 10px;"></i>
						    </div>
						</div>
			</div>
			<b class="line"></b>
		<div class="center">
			<div class="col-main">
				<div class="main-wrap">
					
				@section('content')

            
                

        		@show
        		</div>
				<!--底部-->
				<div class="footer">
					<div class="footer-hd">
						<p>
							<a href="#">恒望科技</a>
							<b>|</b>
							<a href="#">商城首页</a>
							<b>|</b>
							<a href="#">支付宝</a>
							<b>|</b>
							<a href="#">物流</a>
						</p>
					</div>
					<div class="footer-bd">
						<p>
							<a href="#">关于恒望</a>
							<a href="#">合作伙伴</a>
							<a href="#">联系我们</a>
							<a href="#">网站地图</a>
							<em>© 2015-2025 Hengwang.com 版权所有</em>
						</p>
					</div>
				</div>

			</div>

			<aside class="menu">
				<ul>
					<li class="person active">
						<a href="/homes/index.html">个人中心</a>
					</li>
					<li class="person">
						<a href="#">个人资料</a>
						<ul>
							<li> <a href="{{url('home/user/userinfo')}}">个人信息</a></li>
							<li> <a href="{{url('home/user/usersafe')}}">安全设置</a></li>
							<li> <a href="{{url('home/user/useraddr')}}">收货地址</a></li>
						</ul>
					</li>
					<li class="person">
						<a href="#">我的交易</a>
						<ul>
							<li><a href="{{url('home/user/userorder')}}">订单管理</a></li>
							<li> <a href="{{url('home/user/usersale')}}">退款售后</a></li>
						</ul>
					</li>
					<li class="person">
						<a href="#">我的资产</a>
						<ul>
							<li> <a href="{{url('home/user/userfav')}}">优惠券 </a></li>
							<li> <a href="{{url('home/user/uwallet')}}">红包</a></li>
							<li> <a href="{{url('home/user/userbill')}}">账单明细</a></li>
						</ul>
					</li>

					<li class="person">
						<a href="#">我的小窝</a>
						<ul>
							<li> <a href="{{url('home/user/usercollect')}}">收藏</a></li>
							<li> <a href="{{url('home/user/userfoot')}}">足迹</a></li>
							<li> <a href="{{url('home/user/mycom')}}">评价</a></li>
							<li> <a href="{{url('home/user/usernews')}}">消息</a></li>
						</ul>
					</li>

				</ul>

			</aside>
		</div>
		<!--引导 -->
		<div class="navCir">
			<li><a href="/homes/home/home.html"><i class="am-icon-home "></i>首页</a></li>
			<li><a href="/homes/home/sort.html"><i class="am-icon-list"></i>分类</a></li>
			<li><a href="/homes/home/shopcart.html"><i class="am-icon-shopping-basket"></i>购物车</a></li>	
			<li class="active"><a href="/homes/index.html"><i class="am-icon-user"></i>我的</a></li>					
		</div>
		@section('js')
		
		@show
	</body>

</html>