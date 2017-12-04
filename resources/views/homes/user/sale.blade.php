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

					<div class="user-order">

						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">退换货管理</strong> / <small>Change</small></div>
						</div>
						<hr>

						<div class="am-tabs am-tabs-d2 am-margin" data-am-tabs="">

							<ul class="am-avg-sm-2 am-tabs-nav am-nav am-nav-tabs">
								<li class="am-active"><a href="#tab1">退款管理</a></li>
								
							</ul>

							<div class="am-tabs-bd" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
								<div class="am-tab-panel am-fade am-active am-in" id="tab1">
									<div class="order-top">
										<div class="th th-item">
											商品
										</div>
										<div class="th th-orderprice th-price">
											数量
										</div>
										<div class="th th-changeprice th-price">
											单价
										</div>
										<div class="th th-status th-moneystatus">
											退款总额
										</div>
										<div class="th th-change th-changebuttom">
											退款进度
										</div>
									</div>
							@foreach($res as $k => $v)
									<div class="order-main">
										<div class="order-list">
											<div class="order-title">
												<div class="dd-num">退款编号：<a href="javascript:;">{{$k}}</a></div>
												<span>申请时间：
												{{date("Y-m-d", $v['0']->ord_time)}}</span>
												<!--    <em>店铺：小桔灯</em>-->
											</div>
											<div class="order-content">
												<div class="order-left">
											@foreach($v as $k1=>$v1)	
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
																		<p>{{$v1->orgoods->gname}}</p>
																		
																	</a>
																</div>
															</div>
														</li>

														<ul class="td-changeorder">
															<li class="td td-orderprice">
																<div class="item-orderprice">
																	<span></span>{{$v1->goods_num}}
																</div>
															</li>
															<li class="td td-changeprice">
																<div class="item-changeprice">
																	<span>退款金额：</span>{{$v1->orgoods->gprice}}
																</div>
															</li>
														</ul>
														<div class="clear"></div>
													</ul>
												
								     @endforeach
													<div class="change move-right">
														<li class="td td-moneystatus td-status">
															<div class="item-status">
																<p class="Mystatus">{{$v1->order->total_price}}</p>

															</div>
														</li>
													</div>
													<li class="td td-change td-changebutton">
														
														<div class="am-btn am-btn-danger anniu">
														@if($v1->order->ostate==6)
															<p class="Mystatus">等待卖家审核</p>
														@elseif($v1->order->ostate==7)
															<p class="Mystatus">等待卖家退款</p>
														@elseif($v1->order->ostate==8)
															<p class="Mystatus">退款完成交易关闭</p>
														@endif


															</div>
														
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

