

@extends('homes.layout.seller')

@section('head')

<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/colstyle.css" rel="stylesheet" type="text/css">
@endsection

@section('title','商户主页')

@section('content')

<!--收藏夹 -->
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
											<a href="/home/seller/news"><i class="am-icon-bell-o"></i>消息{{$o}}</a>
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
										<a href="">
											<i><img src="/homes/images/bonus.png"></i>
											<span class="m-title">精彩活动</span>
											<em class="m-num">2</em>
										</a>
									</p>
									<p class="m-coupon">
										<a href="">
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
									<a href="/home/seller/orderedit" class="i-load-more-item-shadow">全部订单</a>
								</div>
								<ul>
									
									<li><a href="/home/seller/orderedit"><i><img src="/homes/images/send.png"></i><span>待发货<em class="m-num">1</em></span></a></li>
									<li><a href="/home/seller/orderedit"><i><img src="/homes/images/receive.png"></i><span>待收货</span></a></li>
									<li><a href="/home/seller/comments"><i><img src="/homes/images/comment.png"></i><span>评价<em class="m-num">3</em></span></a></li>
									<li><a href="/home/seller/orderback"><i><img src="/homes/images/refund.png"></i><span>退换售后</span></a></li>
								</ul>
							</div>
							

							<!--物流 -->
							<div class="m-logistics">

								<div class="s-bar">
									<i class="s-icon"></i>物流跟踪
								</div>
								<div class="s-content">
									<ul class="lg-list">

										<li class="lg-item">
											<div class="item-info">
												<a href="#">
													<img alt="抗严寒冬天保暖隔凉羊毛毡底鞋垫超薄0.35厘米厚吸汗排湿气舒适" src="/homes/images/65.jpg_120x120xz.jpg">
												</a>

											</div>
											<div class="lg-info">

												<p>卖家已发货</p>
												<time>2015-12-20 17:58:05</time>

												<div class="lg-detail-wrap">
													<a href="logistics.html" class="lg-detail i-tip-trigger">查看物流明细</a>
													<div class="J_TipsCon hide">
														<div class="s-tip-bar">中通快递&nbsp;&nbsp;&nbsp;&nbsp;运单号：373269427686</div>
														<div class="s-tip-content">
															<ul>
																<li>卖家已发货2015-12-20 17:58:05</li>
																<li>义乌 的 义乌总部直发车 已揽件2015-12-20 17:54:49</li>
																<li class="s-omit"><a href="#" target="_blank" data-spm-anchor-id="a1z02.1.1998049142.3">··· 查看全部</a></li>
																<li>您的订单开始处理2015-12-20 08:13:48</li>

															</ul>
														</div>
													</div>
												</div>

											</div>
											
										</li>
										<div class="clear"></div>

										<li class="lg-item">
											<div class="item-info">
												<a href="#">
													<img alt="礼盒袜子女秋冬 纯棉袜加厚 女式中筒袜子 韩国可爱 女袜 女棉袜" src="/homes/images/88.jpg_120x120xz.jpg">
												</a>

											</div>
											<div class="lg-info">

												<p>已签收,签收人是青年城签收</p>
												<time>2015-12-19 15:35:42</time>

												<div class="lg-detail-wrap">
													<a href="logistics.html" class="lg-detail i-tip-trigger">查看物流明细</a>
													<div class="J_TipsCon hide">
														<div class="s-tip-bar">天天快递&nbsp;&nbsp;&nbsp;&nbsp;运单号：666287461069</div>
														<div class="s-tip-content">
															<ul>

																<li>已签收,签收人是青年城签收2015-12-19 15:35:42</li>
																<li>【光谷关山分部】的派件员【关山代派】正在派件 电话:*2015-12-19 14:27:28</li>
																<li class="s-omit"><a href="//wuliu.taobao.com/user/order_detail_new.htm?spm=a1z02.1.1998049142.7.8BJBiJ&amp;trade_id=1479374251166800&amp;seller_id=1651462988&amp;tracelog=yimaidaologistics" target="_blank" data-spm-anchor-id="a1z02.1.1998049142.7">··· 查看全部</a></li>
																<li>您的订单开始处理2015-12-17 14:27:50</li>

															</ul>
														</div>
													</div>
												</div>

											</div>
											
										</li>

									</ul>

								</div>

							</div>


							<!--收藏夹 -->
							

						</div>
					</div>

@endsection