@extends('homes.layout.seller')

@section('head')
		<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/orstyle.css" rel="stylesheet" type="text/css">

		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
@endsection

@section('title','退货管理')

@section('content')
	<div class="main-wrap">

					<div class="user-orderinfo">

						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">退款申请</strong> / <small>Order&nbsp;back</small></div>
						</div>
						<hr/>
						<!--进度条-->
						
						<div class="order-infoaside">
							
							
						</div>
						<div class="order-infomain">

							<div class="order-top">
								<div class="th th-item">
									<td class="td-inner">商品</td>
								</div>
								<div class="th th-price">
									<td class="td-inner">单价</td>
								</div>
								<div class="th th-number">
									<td class="td-inner">数量</td>
								</div>
								<div class="th th-operation">
									<td class="td-inner">商品操作</td>
								</div>
								<div class="th th-amount">
									<td class="td-inner">合计</td>
								</div>
								<div class="th th-status">
									<td class="td-inner">交易状态</td>
								</div>
								<div class="th th-change">
									<td class="td-inner">交易操作</td>
								</div>
							</div>

							<div class="order-main">
							
							@foreach($ree as $k=> $v)
								<div class="order-status3">
									<div class="order-title">

									
										<div class="dd-num">订单编号：<a href="javascript:;">{{$k}}</a></div>
										<span>成交时间：{{date("Y-m-d",$v['0']->ord_time)}}</span>
										<!--    <em>店铺：小桔灯</em>-->
									</div>
									<div class="order-content">
										<div class="order-left">
									@foreach($v as $ks => $vs)
											<ul class="item-list">
												<li class="td td-item">
													<div class="item-pic">
														<a href="#" class="J_MakePoint">
															<img src="/homes/images/kouhong.jpg_80x80.jpg" class="itempic J_ItemImg">
														</a>
													</div> 
													<div class="item-info">
														<div class="item-basic-info">
															<a href="#">
																<p>{{$vs->orgoods->gname}}</p>
																<p class="info-little">颜色：12#川南玛瑙
																	<br/>包装：裸装 </p>
															</a>
														</div>
													</div>
												</li>
												<li class="td td-price">
													<div class="item-price">
														333.00
													</div>
												</li>
												<li class="td td-number">
													<div class="item-number">
														<span>×</span>2
													</div>
												</li>
												<li class="td td-operation">
													<div class="item-operation">
														退款/退货
													</div>
												</li>
											</ul>
								@endforeach
											<ul class="item-list">
												<li class="td td-item">
													<div class="item-pic">
														<a href="#" class="J_MakePoint">
															<img src="/homes/images/62988.jpg_80x80.jpg" class="itempic J_ItemImg">
														</a>
													</div>
													<div class="item-info">
														<div class="item-basic-info">
															<a href="#">
																<p>礼盒袜子女秋冬 纯棉袜加厚 韩国可爱 </p>
																<p class="info-little">颜色分类：李清照
																	<br/>尺码：均码</p>
															</a>
														</div>
													</div>
												</li>
												<li class="td td-price">
													<div class="item-price">
														333.00
													</div>
												</li>
												<li class="td td-number">
													<div class="item-number">
														<span>×</span>2
													</div>
												</li>
												<li class="td td-operation">
													<div class="item-operation">
														退款/退货
													</div>
												</li>
											</ul>

										</div>
										<div class="order-right">
											<li class="td td-amount">
												<div class="item-amount">
													合计：676.00
													<p>含运费：<span>10.00</span></p>
												</div>
											</li>
											<div class="move-right">
												<li class="td td-status">
													<div class="item-status">
														<p class="Mystatus">卖家已发货</p>
														<p class="order-info"><a href="logistics.html">查看物流</a></p>
														<p class="order-info"><a href="#">延长收货</a></p>
													</div>
												</li>
												<li class="td td-change">
													<div class="am-btn am-btn-danger anniu">
														确认收货</div>
												</li>
											</div>
										</div>
									</div>

								</div>

					@endforeach
							</div>
						</div>
					</div>

				</div>

@endsection