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


					<div class="user-order">


						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">退款售后</strong> / <small>Orderback</small></div>
						</div>
						<hr>

						<div class="am-tabs am-tabs-d2 am-margin" data-am-tabs="">

							<ul class="am-avg-sm-5 am-tabs-nav am-nav am-nav-tabs">
							<li><a href="">申请列表</a></li>
								<li><a href="">退款列表</a></li>
								<li><a href="">退款完成</a></li>
								
							</ul>

							<div class="am-tabs-bd" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
								
								
								<!-- 待审核订单 -->
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
											退款总金额
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
										@foreach($re6 as $k6=>$v6)
										
											<div class="order-status1">
												<div class="order-title">
													<div class="dd-num">订单编号：<a href="/homes/javascript:;">{{$k6}}</a></div>
													<span>订单时间：{{date("Y-m-d",$v6['0']->ord_time)}}</span>
													
												</div>
												<div class="order-content">
													<div class="order-left">
														@foreach($v6 as $ks6=>$vs6)
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="{{$vs6->orgoods['gimg']}}">
																	</a>
																</div>
																<div class="item-info" style="width: 220px;">
																	<div class="item-basic-info" style="margin-left: -60px;">
																		<a href="/homes/#">
																			<p>{{$vs6->orgoods['gname']}}</p>
																			<p class="info-little" style="margin-top:8px;">商品规格：{{$vs6->label}}</p>
																		</a>
																	</div>
																</div>
															</li>
															<li class="td td-price">
																<div class="item-price">
																	{{$vs6->orgoods['gprice']}}
																</div>
															</li>
															<li class="td td-number">
																<div class="item-number">
																	<span>×</span>{{$vs6['goods_num']}}
																	
																</div>
															</li>
															<li class="td td-operation">
																<div class="item-operation">
																	退款中
																</div>
															</li>
														</ul>
														@endforeach
													</div>
													<div class="order-right">
														<li class="td td-amount">
															<div class="item-amount">
																{{$vs6->order->total_price}}
																
															</div>
														</li>
														<div class="move-right">
															<li class="td td-status">
																<div class="item-status">
																	<p class="Mystatus">等待审核</p>
																		
																</div>
															</li>
															<li class="td td-change">
																<a href="/home/seller/orderback/{{$k6}}/edit">

																<div class="am-btn am-btn-danger anniu">
																	同意</div></a>
															</li>
														</div>
														
													</div>
												
												</div>

											</div>
											@endforeach
										</div>

									</div>
								</div>

						<!-- 退款列表 -->
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
											退款总金额
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
										@foreach($re7 as $k7=>$v7)
										
											<div class="order-status1">
												<div class="order-title">
													<div class="dd-num">订单编号：<a href="/homes/javascript:;">{{$k7}}</a></div>
													<span>订单时间：{{date("Y-m-d",$v7['0']->ord_time)}}</span>
													<!--    <em>店铺：小桔灯</em>-->
												</div>
												<div class="order-content">
													<div class="order-left">
														@foreach($v7 as $ks7=>$vs7)
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="{{$vs7->orgoods->gimg}}">
																	</a>
																</div>
																<div class="item-info" style="width: 220px;">
																	<div class="item-basic-info" style="margin-left: -70px;">
																		<a href="/homes/#">
																			<p>{{$vs7->orgoods->gname}}</p>
																			<p class="info-little" style="margin-top:8px;">商品规格：{{$vs7->label}}</p>
																		</a>
																	</div>
																</div>
															</li>
															<li class="td td-price">
																<div class="item-price">
																	{{$vs7->orgoods->gprice}}
																</div>
															</li>
															<li class="td td-number">
																<div class="item-number">
																	<span>×</span>{{$vs7->goods_num}}
																	
																</div>
															</li>
															<li class="td td-operation">
																<div class="item-operation">
																	退款中
																</div>
															</li>
														</ul>
														@endforeach
													</div>
													<div class="order-right">
														<li class="td td-amount">
															<div class="item-amount">
																{{$vs7->order->total_price}}
																
															</div>
														</li>
														<div class="move-right">
															<li class="td td-status">
																<div class="item-status">
																	<p class="Mystatus">等待审核</p>
																		
																</div>
															</li>
															<form action="/home/seller/orderback/{{$k7}}" method="post">
															<li class="td td-change">


															{{ csrf_field()}}

    														{{method_field('PUT')}}


																<a href="">
																<button class="am-btn am-btn-danger anniu">
																	退款</button></a>
															</li>

															</form>
														</div>
														
													</div>
												
												</div>

											</div>
											@endforeach
										</div>

									</div>
								</div>




                 <!-- 退款完成交易关闭 -->
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
											退款总金额
										</div>
										<div class="th th-status">
											交易状态
										</div>
										<div class="th th-change">
											
										</div>
									</div>

									<div class="order-main">
										<div class="order-list">
										@foreach($re8 as $k8=>$v8)
										
											<div class="order-status1">
												<div class="order-title">
													<div class="dd-num">订单编号：<a href="/homes/javascript:;">{{$k8}}</a></div>
													<span>订单时间：{{date("Y-m-d",$v8['0']->ord_time)}}</span>
													<!--    <em>店铺：小桔灯</em>-->
												</div>
												<div class="order-content">
													<div class="order-left">
													@foreach($v8 as $ks8=>$vs8)
														<ul class="item-list">
															<li class="td td-item">
																<div class="item-pic">
																	<a href="/homes/#" class="J_MakePoint">
																		<img src="{{$vs8->orgoods->gimg}}">
																	</a>
																</div>
																<div class="item-info" style="width: 220px;">
																	<div class="item-basic-info" style="margin-left: -80px;">
																		<a href="/homes/#">
																			<p>{{$vs8->orgoods->gname}}</p>
																			<p class="info-little" style="margin-top:8px;">商品规格：{{$vs8->label}}</p>
																		</a>
																	</div>
																</div>
															</li>
															<li class="td td-price">
																<div class="item-price">
																{{$vs8->orgoods->gprice}}
																	
																</div>
															</li>
															<li class="td td-number">
																<div class="item-number">
																	<span>×</span>{{$vs8->goods_num}}
																	
																</div>
															</li>
															<li class="td td-operation">
																<div class="item-operation">
																	退款完成
																</div>
															</li>
														</ul>
												@endforeach	
													</div>
													<div class="order-right">
														<li class="td td-amount">
															<div class="item-amount">
															{{$vs8->order->total_price}}
																
															</div>
														</li>
														<div class="move-right">
															<li class="td td-status">
																<div class="item-status">
																	<p class="Mystatus">退款完成交易关闭</p>
																		
																</div>
															</li>
															<li class="td td-change">
																
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

						</div>
					</div>


@endsection