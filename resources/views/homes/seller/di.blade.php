
@extends('homes.layout.seller')

@section('head')

        <link href="homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">
		<link href="homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="homes/css/systyle.css" rel="stylesheet" type="text/css">

		@endsection

@section('title','店铺信息')

@section('content')

<div class="wrap-left">
						<div class="wrap-list">
							<div class="m-user">
								<!--店铺信息 -->
								<div class="m-bg"></div>
								<div class="m-userinfo">
									<div class="m-baseinfo">
										<a href="">
											<img src="{{$shop['simg']}}">
										</a>
										<em class="s-name">{{$shop['sname']}}<span class="vip1"></span></em>
										<div class="s-prestige am-btn am-round">
											会员福利</div>
										<div class="s-prestige am-btn am-round"><a href="/home/seller/di/{{$shop['id']}}/edit">修改</a></div>

									</div>
									<div class="m-right">
										<div class="m-new">
											<a href="news.html"><i class="am-icon-bell-o"></i>消息</a>
										</div>
										<div class="m-address">
											<a class="i-trigger" href="address.html">店铺类别:{{$shop['stype']}}</a>
										</div>
									</div>
								</div>

								<!--个人资产-->
								<div class="m-userproperty">
									<div class="s-bar">
										<i class="s-icon"></i>个人资产
									</div>
									<p class="m-bonus">
										<a href="bonus.html">
											<i><img src="/homes/images/bonus.png"></i>
											<span class="m-title">精彩活动</span>
											<em class="m-num">2</em>
										</a>
									</p>
									<p class="m-coupon">
										<a href="coupon.html">
											<i><img src="/homes/images/coupon.png"></i>
											<span class="m-title">优惠券</span>
											<em class="m-num">2</em>
										</a>
									</p>
									<p class="m-bill">
										<a href="bill.html">
											<i><img src="/homes/images/wallet.png"></i>
											<span class="m-title">钱包</span>
											<em class="m-num">2</em>
										</a>
									</p>
									<p class="m-big">
										<a href="#">
											<i><img src="/homes/images/day-to.png"></i>
											<span class="m-title">积分</span>
										</a>
									</p>
									<p class="m-big">
										<a href="#">
											<i><img src="/homes/images/72h.png"></i>
											<span class="m-title">商户地址</span>
										</a>
									</p>
								</div>
							</div>
							<div class="box-container-bottom"></div>

							<!--订单 -->
							<div class="m-order">
								<div class="s-bar">
									<i class="s-icon"></i>我的订单
									<a href="order.html" class="i-load-more-item-shadow">全部订单</a>
								</div>
								<ul>
									
									<li><a href="order.html"><i><img src="/homes/images/send.png"></i><span>待发货<em class="m-num">1</em></span></a></li>
									<li><a href="order.html"><i><img src="/homes/images/receive.png"></i><span>待收货</span></a></li>
									<li><a href="order.html"><i><img src="/homes/images/comment.png"></i><span>评价<em class="m-num">3</em></span></a></li>
									<li><a href="change.html"><i><img src="/homes/images/refund.png"></i><span>退换货</span></a></li>
								</ul>
							</div>
							<!--九宫格-->
							<div class="user-patternIcon">
								<div class="s-bar">
									<i class="s-icon"></i>我的常用
								</div>
								<ul>

									<a href="home/shopcart.html"><li class="am-u-sm-4"><i class="am-icon-shopping-basket am-icon-md"></i><img src="/homes/images/iconbig.png"><p>购物车</p></li></a>
									<a href="collection.html"><li class="am-u-sm-4"><i class="am-icon-heart am-icon-md"></i><img src="/homes/images/iconsmall1.png"><p>我的收藏</p></li></a>
									<a href="home/home.html"><li class="am-u-sm-4"><i class="am-icon-gift am-icon-md"></i><img src="/homes/images/iconsmall0.png"><p>为你推荐</p></li></a>
									<a href="comment.html"><li class="am-u-sm-4"><i class="am-icon-pencil am-icon-md"></i><img src="/homes/images/iconsmall3.png"><p>好评宝贝</p></li></a>
									<a href="foot.html"><li class="am-u-sm-4"><i class="am-icon-clock-o am-icon-md"></i><img src="/homes/images/iconsmall2.png"><p>我的足迹</p></li></a>                                                                        
								</ul>
							</div>
							
							<!--收藏夹 -->
							

						</div>
					</div>


@endsection