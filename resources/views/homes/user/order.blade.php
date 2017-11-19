@extends('homes.layout.userbuy')


@section('head')
		<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/orstyle.css" rel="stylesheet" type="text/css">

		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
@endsection

@section('title','个人中心')

@section('content')
<?php
//use App\Http\model\orders;
	//var_dump($res->orgoods->gname);
?>
					<div class="user-order">

						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">订单管理</strong> / <small>Order</small></div>
						</div>
						<hr>

						<div class="am-tabs am-tabs-d2 am-margin" data-am-tabs="">

							<ul class="am-avg-sm-5 am-tabs-nav am-nav am-nav-tabs">
								<li class="am-active"><a href="">所有订单</a></li>
								<li><a href="">待付款</a></li>
								<li><a href="">待发货</a></li>
								<li><a href="">待收货</a></li>
								<li><a href="">待评价</a></li>
							</ul>

							<div class="am-tabs-bd" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
								
								<!-- 所有订单 -->
								<div class="am-tab-panel am-fade am-in am-active" id="tab1">
									<div class="order-top">
										<div class="th th-item">
											商品
										</div>
										<div class="th th-price">
											单价
										</div>
										<div class="th th-number">
											数量
										</div>
										<div class="th th-operation">
											商品操作
										</div>
										<div class="th th-amount">
											合计
										</div>
										<div class="th th-status">
											交易状态
										</div>
										<div class="th th-change">
											交易操作
										</div>
									</div>

									<div class="order-main">
										<div class="order-list">
											
											<!--交易成功-->
											@foreach($codearr as $k => $v)
											<div class="order-status5">
												<div class="order-title">
													<div class="dd-num">订单编号：<a href="/homes/javascript:;">{{$k}}</a></div>
													<span>订单时间：{{date("Y-m-d",$v[0]->ord_time)}}</span>
													<!--    <em>店铺：小桔灯</em>-->
												</div>
												<div class="order-content">
													<div class="order-left">
													@foreach($v as $ks => $vs)
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="{{$vs->orgoods->gimg}}">
																	</a>
																</div>
																<div class="item-info" style="width: 220px;">
																	<div class="item-basic-info" style="margin-left: -70px;"> 
																		<a href="/homes/#">
																			<p>{{$vs->orgoods->gname}}</p>
																			<p class="info-little">颜色：12#川南玛瑙
																				<br>包装：裸装 </p>
																		</a>
																	</div>
																</div>
															</li>
															<li class="td td-price">
																<div class="item-price">
																	{{$vs->orgoods->gprice}}
																	
																</div>
															</li>
															<li class="td td-number">
																<div class="item-number">
																	<span>×</span>{{$vs->goods_num}}

																	{{ $res +=  $vs->orgoods->gprice * $vs->goods_num }}
																</div>
															</li>
															<li class="td td-operation">
																<div class="item-operation">
																	
																</div>
															</li>
														</ul>
													@endforeach
														
													</div>
													<div class="order-right">
														<li class="td td-amount">
															<div class="item-amount">
																合计 {{ $res }} 
																<p>含运费：<span>10.00</span></p>
															</div>
														</li>
														<div class="move-right">
															<li class="td td-status">
																<div class="item-status">
																	<p class="Mystatus">交易成功</p>
																	<p class="order-info"><a href="/homes/orderinfo.html">订单详情</a></p>
																	<p class="order-info"><a href="/homes/logistics.html">查看物流</a></p>
																</div>
															</li>
															<li class="td td-change">
																<div class="am-btn am-btn-danger anniu">
																	删除订单</div>
															</li>
														</div>
													</div>
												</div>
											</div>
											@endforeach
											
											
											<!--交易失败-->
											<!-- <div class="order-status0">
																							<div class="order-title">
																								<div class="dd-num">订单编号：<a href="/homes/javascript:;">1601430</a></div>
																								<span>成交时间：2015-12-20</span>
																								<em>店铺：小桔灯</em>
																							</div>
																							<div class="order-content">
																								<div class="order-left">
																									<ul class="item-list">
																										<li class="td td-item">
																											<div class="item-pic">
																												<a href="/homes/#" class="J_MakePoint">
																													<img src="/homes/images/kouhong.jpg_80x80.jpg" class="itempic J_ItemImg">
																												</a>
																											</div>
																											<div class="item-info" style="width: 220px;">
																												<div class="item-basic-info" style="margin-left: -70px;">
																													<a href="/homes/#">
																														<p>美康粉黛醉美唇膏 持久保湿滋润防水不掉色</p>
																														<p class="info-little">颜色：12#川南玛瑙
																															<br>包装：裸装 </p>
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
																												
																											</div>
																										</li>
																									</ul>
																						
																									<ul class="item-list">
																										<li class="td td-item">
																											<div class="item-pic">
																												<a href="/homes/#" class="J_MakePoint">
																													<img src="/homes/images/62988.jpg_80x80.jpg" class="itempic J_ItemImg">
																												</a>
																											</div>
																											<div class="item-info" style="width: 220px;">
																												<div class="item-basic-info" style="margin-left: -70px;">
																													<a href="/homes/#">
																														<p>礼盒袜子女秋冬 纯棉袜加厚 韩国可爱 </p>
																														<p class="info-little">颜色分类：李清照
																															<br>尺码：均码</p>
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
																												
																											</div>
																										</li>
																									</ul>
																						
																									<ul class="item-list">
																										<li class="td td-item">
																											<div class="item-pic">
																												<a href="/homes/#" class="J_MakePoint">
																													<img src="/homes/images/kouhong.jpg_80x80.jpg" class="itempic J_ItemImg">
																												</a>
																											</div>
																											<div class="item-info" style="width: 220px;">
																												<div class="item-basic-info" style="margin-left: -70px;">
																													<a href="/homes/#">
																														<p>美康粉黛醉美唇膏 持久保湿滋润防水不掉色</p>
																														<p class="info-little">颜色：12#川南玛瑙
																															<br>包装：裸装 </p>
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
																												<p class="Mystatus">交易关闭</p>
																											</div>
																										</li>
																										<li class="td td-change">
																											<div class="am-btn am-btn-danger anniu">
																												删除订单</div>
																										</li>
																									</div>
																								</div>
																							</div>
											</div> -->											
											
											<!--待发货-->
											<!-- <div class="order-status2">
												<div class="order-title">
													<div class="dd-num">订单编号：<a href="/homes/javascript:;">1601430</a></div>
													<span>成交时间：2015-12-20</span>
													<em>店铺：小桔灯</em>
												</div>
												<div class="order-content">
													<div class="order-left">
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="/homes/images/kouhong.jpg_80x80.jpg" class="itempic J_ItemImg">
																	</a>
																</div>
																<div class="item-info" style="width: 220px;">
																	<div class="item-basic-info" style="margin-left: -70px;">
																		<a href="/homes/#">
																			<p>美康粉黛醉美唇膏 持久保湿滋润防水不掉色</p>
																			<p class="info-little">颜色：12#川南玛瑙
																				<br>包装：裸装 </p>
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
																	<a href="/homes/refund.html">退款</a>
																</div>
															</li>
														</ul>
											
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="/homes/images/62988.jpg_80x80.jpg" class="itempic J_ItemImg">
																	</a>
																</div>
																<div class="item-info" style="width: 220px;">
																	<div class="item-basic-info" style="margin-left: -70px;">
																		<a href="/homes/#">
																			<p>礼盒袜子女秋冬 纯棉袜加厚 韩国可爱 </p>
																			<p class="info-little">颜色分类：李清照
																				<br>尺码：均码</p>
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
																	<a href="/homes/refund.html">退款</a>
																</div>
															</li>
														</ul>
											
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="/homes/images/kouhong.jpg_80x80.jpg" class="itempic J_ItemImg">
																	</a>
																</div>
																<div class="item-info" style="width: 220px;">
																	<div class="item-basic-info" style="margin-left: -70px;">
																		<a href="/homes/#">
																			<p>美康粉黛醉美唇膏 持久保湿滋润防水不掉色</p>
																			<p class="info-little">颜色：12#川南玛瑙
																				<br>包装：裸装 </p>
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
																	<a href="/homes/refund.html">退款</a>
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
																	<p class="Mystatus">买家已付款</p>
																	<p class="order-info"><a href="/homes/orderinfo.html">订单详情</a></p>
																</div>
															</li>
															<li class="td td-change">
																<div class="am-btn am-btn-danger anniu">
																	提醒发货</div>
															</li>
														</div>
													</div>
												</div>
											</div> -->

											<!--不同状态订单-->
											<!-- <div class="order-status3">
												<div class="order-title">
													<div class="dd-num">订单编号：<a href="/homes/javascript:;">1601430</a></div>
													<span>成交时间：2015-12-20</span>
													<em>店铺：小桔灯</em>
												</div>
												<div class="order-content">
													<div class="order-left">
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="/homes/images/kouhong.jpg_80x80.jpg" class="itempic J_ItemImg">
																	</a>
																</div>
																<div class="item-info" style="width: 220px;">
																	<div class="item-basic-info" style="margin-left: -70px;">
																		<a href="/homes/#">
																			<p>美康粉黛醉美唇膏 持久保湿滋润防水不掉色</p>
																			<p class="info-little">颜色：12#川南玛瑙
																				<br>包装：裸装 </p>
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
																	<a href="/homes/refund.html">退款/退货</a>
																</div>
															</li>
														</ul>
											
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="/homes/images/62988.jpg_80x80.jpg" class="itempic J_ItemImg">
																	</a>
																</div>
																<div class="item-info" style="width: 220px;">
																	<div class="item-basic-info" style="margin-left: -70px;">
																		<a href="/homes/#">
																			<p>礼盒袜子女秋冬 纯棉袜加厚 韩国可爱 </p>
																			<p class="info-little">颜色分类：李清照
																				<br>尺码：均码</p>
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
																	<a href="/homes/refund.html">退款/退货</a>
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
																	<p class="order-info"><a href="/homes/orderinfo.html">订单详情</a></p>
																	<p class="order-info"><a href="/homes/logistics.html">查看物流</a></p>
																	<p class="order-info"><a href="/homes/#">延长收货</a></p>
																</div>
															</li>
															<li class="td td-change">
																<div class="am-btn am-btn-danger anniu">
																	确认收货</div>
															</li>
														</div>
													</div>
												</div>
											
											</div> -->

										</div>

									</div>

								</div>

								<!-- 待付款订单 -->
								<div class="am-tab-panel am-fade" id="tab2">

									<div class="order-top">
										<div class="th th-item">
											商品
										</div>
										<div class="th th-price">
											单价
										</div>
										<div class="th th-number">
											数量
										</div>
										<div class="th th-operation">
											商品操作
										</div>
										<div class="th th-amount">
											合计
										</div>
										<div class="th th-status">
											交易状态
										</div>
										<div class="th th-change">
											交易操作
										</div>
									</div>

									<div class="order-main">
										<div class="order-list">
										@foreach($codearr1 as $k1=>$v1)
											<div class="order-status1">
												<div class="order-title">
													<div class="dd-num">订单编号：<a href="/homes/javascript:;">{{$k1}}</a></div>
													<span>订单时间：{{date("Y-m-d",$v1[0]->ord_time)}}</span>
													<!--    <em>店铺：小桔灯</em>-->
												</div>
												<div class="order-content">
													<div class="order-left">
														@foreach($v1 as $ks1=>$vs1)
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="{{$vs1->orgoods->gimg}}">
																	</a>
																</div>
																<div class="item-info" style="width: 220px;">
																	<div class="item-basic-info" style="margin-left: -70px;">
																		<a href="/homes/#">
																			<p>{{$vs1->orgoods->gname}}</p>
																			<p class="info-little">颜色：12#川南玛瑙
																				<br>包装：裸装 </p>
																		</a>
																	</div>
																</div>
															</li>
															<li class="td td-price">
																<div class="item-price">
																	{{$vs1->orgoods->gprice}}
																</div>
															</li>
															<li class="td td-number">
																<div class="item-number">
																	<span>×</span>{{$vs1->goods_num}}
																</div>
															</li>
															<li class="td td-operation">
																<div class="item-operation">

																</div>
															</li>
														</ul>
														@endforeach
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
																	<p class="Mystatus">等待买家付款</p>
																	<p class="order-info"><a href="/homes/#">取消订单</a></p>

																</div>
															</li>
															<li class="td td-change">
																<a href="/homes/pay.html">
																<div class="am-btn am-btn-danger anniu">
																	一键支付</div></a>
															</li>
														</div>
														@endforeach
													</div>
												
												</div>
											</div>
										</div>

									</div>
								</div>

								<!-- 待发货订单 -->
								<div class="am-tab-panel am-fade" id="tab3">
									<div class="order-top">
										<div class="th th-item">
											商品
										</div>
										<div class="th th-price">
											单价
										</div>
										<div class="th th-number">
											数量
										</div>
										<div class="th th-operation">
											商品操作
										</div>
										<div class="th th-amount">
											合计
										</div>
										<div class="th th-status">
											交易状态
										</div>
										<div class="th th-change">
											交易操作
										</div>
									</div>

									<div class="order-main">
										<div class="order-list">
											<div class="order-status2">
												<div class="order-title">
													<div class="dd-num">订单编号：<a href="/homes/javascript:;">1601430</a></div>
													<span>成交时间：2015-12-20</span>
													<!--    <em>店铺：小桔灯</em>-->
												</div>
												<div class="order-content">
													<div class="order-left">
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="/homes/images/kouhong.jpg_80x80.jpg" class="itempic J_ItemImg">
																	</a>
																</div>
																<div class="item-info">
																	<div class="item-basic-info">
																		<a href="/homes/#">
																			<p>美康粉黛醉美唇膏 持久保湿滋润防水不掉色</p>
																			<p class="info-little">颜色：12#川南玛瑙
																				<br>包装：裸装 </p>
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
																	<a href="/homes/refund.html">退款</a>
																</div>
															</li>
														</ul>

														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="/homes/images/62988.jpg_80x80.jpg" class="itempic J_ItemImg">
																	</a>
																</div>
																<div class="item-info">
																	<div class="item-basic-info">
																		<a href="/homes/#">
																			<p>礼盒袜子女秋冬 纯棉袜加厚 韩国可爱 </p>
																			<p class="info-little">颜色分类：李清照
																				<br>尺码：均码</p>
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
																	<a href="/homes/refund.html">退款</a>
																</div>
															</li>
														</ul>

														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="/homes/images/kouhong.jpg_80x80.jpg" class="itempic J_ItemImg">
																	</a>
																</div>
																<div class="item-info">
																	<div class="item-basic-info">
																		<a href="/homes/#">
																			<p>美康粉黛醉美唇膏 持久保湿滋润防水不掉色</p>
																			<p class="info-little">颜色：12#川南玛瑙
																				<br>包装：裸装 </p>
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
																	<a href="/homes/refund.html">退款</a>
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
																	<p class="Mystatus">买家已付款</p>
																	<p class="order-info"><a href="/homes/orderinfo.html">订单详情</a></p>
																</div>
															</li>
															<li class="td td-change">
																<div class="am-btn am-btn-danger anniu">
																	提醒发货</div>
															</li>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>


								<!-- 待收货订单 -->
								<div class="am-tab-panel am-fade" id="tab4">
									<div class="order-top">
										<div class="th th-item">
											商品
										</div>
										<div class="th th-price">
											单价
										</div>
										<div class="th th-number">
											数量
										</div>
										<div class="th th-operation">
											商品操作
										</div>
										<div class="th th-amount">
											合计
										</div>
										<div class="th th-status">
											交易状态
										</div>
										<div class="th th-change">
											交易操作
										</div>
									</div>

									<div class="order-main">
										<div class="order-list">
											<div class="order-status3">
												<div class="order-title">
													<div class="dd-num">订单编号：<a href="/homes/javascript:;">1601430</a></div>
													<span>成交时间：2015-12-20</span>
													<!--    <em>店铺：小桔灯</em>-->
												</div>
												<div class="order-content">
													<div class="order-left">
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="/homes/images/kouhong.jpg_80x80.jpg" class="itempic J_ItemImg">
																	</a>
																</div>
																<div class="item-info">
																	<div class="item-basic-info">
																		<a href="/homes/#">
																			<p>美康粉黛醉美唇膏 持久保湿滋润防水不掉色</p>
																			<p class="info-little">颜色：12#川南玛瑙
																				<br>包装：裸装 </p>
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
																	<a href="/homes/refund.html">退款/退货</a>
																</div>
															</li>
														</ul>

														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="/homes/images/62988.jpg_80x80.jpg" class="itempic J_ItemImg">
																	</a>
																</div>
																<div class="item-info">
																	<div class="item-basic-info">
																		<a href="/homes/#">
																			<p>礼盒袜子女秋冬 纯棉袜加厚 韩国可爱 </p>
																			<p class="info-little">颜色分类：李清照
																				<br>尺码：均码</p>
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
																	<a href="/homes/refund.html">退款/退货</a>
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
																	<p class="order-info"><a href="/homes/orderinfo.html">订单详情</a></p>
																	<p class="order-info"><a href="/homes/logistics.html">查看物流</a></p>
																	<p class="order-info"><a href="/homes/#">延长收货</a></p>
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
										</div>
									</div>
								</div>


								<!-- 带评价订单 -->
								<div class="am-tab-panel am-fade" id="tab5">
									<div class="order-top">
										<div class="th th-item">
											商品
										</div>
										<div class="th th-price">
											单价
										</div>
										<div class="th th-number">
											数量
										</div>
										<div class="th th-operation">
											商品操作
										</div>
										<div class="th th-amount">
											合计
										</div>
										<div class="th th-status">
											交易状态
										</div>
										<div class="th th-change">
											交易操作
										</div>
									</div>

									<div class="order-main">
										<div class="order-list">
											<!--不同状态的订单	-->
										<div class="order-status4">
												<div class="order-title">
													<div class="dd-num">订单编号：<a href="/homes/javascript:;">1601430</a></div>
													<span>成交时间：2015-12-20</span>

												</div>
												<div class="order-content">
													<div class="order-left">
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="/homes/images/kouhong.jpg_80x80.jpg" class="itempic J_ItemImg">
																	</a>
																</div>
																<div class="item-info">
																	<div class="item-basic-info">
																		<a href="/homes/#">
																			<p>美康粉黛醉美唇膏 持久保湿滋润防水不掉色</p>
																			<p class="info-little">颜色：12#川南玛瑙
																				<br>包装：裸装 </p>
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
																	<a href="/homes/refund.html">退款/退货</a>
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
																	<p class="Mystatus">交易成功</p>
																	<p class="order-info"><a href="/homes/orderinfo.html">订单详情</a></p>
																	<p class="order-info"><a href="/homes/logistics.html">查看物流</a></p>
																</div>
															</li>
															<li class="td td-change">
																<a href="/homes/commentlist.html">
																	<div class="am-btn am-btn-danger anniu">
																		评价商品</div>
																</a>
															</li>
														</div>
													</div>
												</div>
											</div>
											
											
											<div class="order-status4">
												<div class="order-title">
													<div class="dd-num">订单编号：<a href="/homes/javascript:;">1601430</a></div>
													<span>成交时间：2015-12-20</span>
													<!--    <em>店铺：小桔灯</em>-->
												</div>
												<div class="order-content">
													<div class="order-left">
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="/homes/images/kouhong.jpg_80x80.jpg" class="itempic J_ItemImg">
																	</a>
																</div>
																<div class="item-info">
																	<div class="item-basic-info">
																		<a href="/homes/#">
																			<p>美康粉黛醉美唇膏 持久保湿滋润防水不掉色</p>
																			<p class="info-little">颜色：12#川南玛瑙
																				<br>包装：裸装 </p>
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
																	<a href="/homes/refund.html">退款/退货</a>
																</div>
															</li>
														</ul>

														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="/homes/images/62988.jpg_80x80.jpg" class="itempic J_ItemImg">
																	</a>
																</div>
																<div class="item-info">
																	<div class="item-basic-info">
																		<a href="/homes/#">
																			<p>礼盒袜子女秋冬 纯棉袜加厚 韩国可爱 </p>
																			<p class="info-little">颜色分类：李清照
																				<br>尺码：均码</p>
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
																	<a href="/homes/refund.html">退款/退货</a>
																</div>
															</li>
														</ul>
														
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="/homes/images/kouhong.jpg_80x80.jpg" class="itempic J_ItemImg">
																	</a>
																</div>
																<div class="item-info">
																	<div class="item-basic-info">
																		<a href="/homes/#">
																			<p>美康粉黛醉美唇膏 持久保湿滋润防水不掉色</p>
																			<p class="info-little">颜色：12#川南玛瑙
																				<br>包装：裸装 </p>
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
																	<a href="/homes/refund.html">退款/退货</a>
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
																	<p class="Mystatus">交易成功</p>
																	<p class="order-info"><a href="/homes/orderinfo.html">订单详情</a></p>
																	<p class="order-info"><a href="/homes/logistics.html">查看物流</a></p>
																</div>
															</li>
															<li class="td td-change">
																<a href="/homes/commentlist.html">
																	<div class="am-btn am-btn-danger anniu">
																		评价商品</div>
																</a>
															</li>
														</div>
													</div>
												</div>
											</div>


										</div>

									</div>
								</div>
							</div>

						</div>
					</div>

@endsection

