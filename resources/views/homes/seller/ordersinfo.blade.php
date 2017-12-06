@extends('homes.layout.seller')

@section('head')

<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/orstyle.css" rel="stylesheet" type="text/css">

		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
@endsection

@section('title','商品列表')

@section('content')
<div class="user-orderinfo">

						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">订单详情</strong> / <small>Order&nbsp;details</small></div>
						</div>
						<hr/>
						<!--进度条-->
						<div class="m-progress">
							<div class="m-progress-list">
								<span class="step-1 step">
                                   <em class="u-progress-stage-bg"></em>
                                   <i class="u-stage-icon-inner">1<em class="bg" @if($res->ostate==1 || $res->ostate==2 || $res->ostate==3 || $res->ostate==4) style="background-image: url(/homes/images/sprite.png);background-position: -103px -135px;" @endif></em></i>
                                   <p class="stage-name">拍下商品</p>
                                </span>
								<span class="step-2 step">
                                   <em class="u-progress-stage-bg"></em>
                                   <i class="u-stage-icon-inner">2<em class="bg" @if($res->ostate==2 || $res->ostate==3 || $res->ostate==4) style="background-image: url(/homes/images/sprite.png);background-position: -103px -135px;" @endif></em></i>
                                   <p class="stage-name">卖家发货</p>
                                </span>
								<span class="step-3 step">
                                   <em class="u-progress-stage-bg"></em>
                                   <i class="u-stage-icon-inner">3<em class="bg" @if($res->ostate==3 || $res->ostate==4) style="background-image: url(/homes/images/sprite.png);background-position: -103px -135px;" @endif></em></i>
                                   <p class="stage-name">确认收货</p>
                                </span>
								<span class="step-4 step">
                                   <em class="u-progress-stage-bg"></em>
                                   <i class="u-stage-icon-inner">4<em class="bg" @if($res->ostate==4) style="background-image: url(/homes/images/sprite.png);background-position: -103px -135px;" @endif></em></i>
                                   <p class="stage-name">交易完成</p>
                                </span>
								<span class="u-progress-placeholder"></span>
							</div>
							<div class="u-progress-bar total-steps-2">
								<div class="u-progress-bar-inner"></div>
							</div>
						</div>
						<div class="order-infoaside">
							<div class="order-logistics">
								<a href="logistics.html">
									<div class="icon-log">
										<i><img src="/homes/images/receive.png"></i>
									</div>
									<div class="latest-logistics">
										<p class="text">已签收,签收人是青年城签收，感谢使用天天快递，期待再次为您服务</p>
										<div class="time-list">
											<span class="date">2015-12-19</span><span class="week">周六</span><span class="time">15:35:42</span>
										</div>
										<div class="inquire">
											<span class="package-detail">物流：天天快递</span>
											<span class="package-detail">快递单号: </span>
											<span class="package-number">373269427868</span>
											<a href="logistics.html">查看</a>
										</div>
									</div>
									<span class="am-icon-angle-right icon"></span>
								</a>
								<div class="clear"></div>
							</div>
							<div class="order-addresslist">
								<div class="order-address">
									<div class="icon-add">
									</div>
									<p class="new-tit new-p-re">
										<span class="new-txt">{{$nickname}}</span>
										<span class="new-txt-rd2">{{$phone}}</span>
									</p>
									<div class="new-mu_l2a new-p-re">
										<p class="new-mu_l2cw">
											<span class="title">收货地址：</span>	
											<span class="province">{{$address[0]}}</span>
											<span class="city">{{$address[1]}}</span>
											<span class="dist">{{$address[2]}}</span>
											<span class="street">{{$address[3]}}</span>
											</p>
									</div>
								</div>
							</div>
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
								<div class="order-status3">
									<div class="order-title">
										<div class="dd-num" style="margin-left: 40px;">订单编号：<a href="javascript:;">{{$res->o_code}}</a></div>
										<span>成交时间：{{date('Y-m-d',$res->ordersinfo->ord_time)}}</span>
										<!--    <em>店铺：小桔灯</em>-->
									</div>
									<div class="order-content">
										<div class="order-left">
									<?php $to = 0; ?>
										@foreach($resinfo as $k=>$v)
											<ul class="item-list">
												<li class="td td-item">
													<div class="item-pic" style="margin-left: 15px;">
														<a href="#" class="J_MakePoint">
															<img src="{{$v->orgoods->gimg}}" class="itempic J_ItemImg">
														</a>
													</div>
													<div class="item-info" style="width: 210px;">
														<div class="item-basic-info"  style="margin-left: -70px;">
															<a href="#">
																<p>{{$v->orgoods->gname}}</p>
																<p class="info-little" style="margin-top: 7px;">商品规格：{{$v->label}}</p>
															</a>
														</div>
													</div>
												</li>

												<li class="td td-price">
													<div class="item-price">
														{{$v->orgoods->gprice}}
													</div>
												</li>
												<li class="td td-number">
													<div class="item-number">
														<span>×</span>{{$v->goods_num}}
													</div>
												</li>
												<?php $to += $v->orgoods->gprice * $v->goods_num ?>
												<li class="td td-operation">
													<div class="item-operation">
														@if($v->ostate==1)
															<a href="/homes/refund.html" style="margin-top: 15px;display: block">退款</a>
														@elseif($v->ostate==2)
															
														
														<a href="">确认收货</a>
														@elseif($v->ostate==3)
															<a href="/homes/refund.html">退款/退货</a>
														<br/>
														<a href="">评价</a>
														@endif
													</div>
												</li>
											</ul>
									@endforeach
											

										</div>
										<div class="order-right">
											<li class="td td-amount">
												<div class="item-amount">
												
													合计：{{ $to }}
													<p>含运费：<span>10.00</span></p>
												</div>
											</li>
											<div class="move-right">
												<li class="td td-status">
													<div class="item-status">
														@if($res->ostate==0)
															<p class="Mystatus">等待买家付款</p>
															<p class="order-info"><a href="/homes/#">取消订单</a></p>
														@elseif($res->ostate==1)
															<p class="Mystatus" style="margin-top: 10px;">买家已付款</p>
															
														@elseif($res->ostate==2)
															<p class="Mystatus">卖家已发货</p>

															
															
														@elseif($res->ostate==4)
															<p class="Mystatus">交易成功</p>
															<p class="order-info"><a href="/homes/logistics.html">查看评价</a></p>
															
														
															
														@else($res->ostate==3)
															<p class="Mystatus">交易成功</p>
															
															
														@endif
													</div>
												</li>
												<li class="td td-change">
													
													@if($res->ostate==1)
													<div class="am-btn am-btn-danger anniu">
														发货
														</div>
													@elseif($res->ostate==2)
													<div class="am-btn am-btn-danger anniu">
														确认收货
														</div>
													@elseif($res->ostate==3)
													<div class="am-btn am-btn-danger anniu">
														评价商品
														</div>
													@else($res->ostate==4)
													<div>				
														<a class="delorder am-btn am-btn-danger anniu" href="/home/user/userorders/{{$res->o_code}}" style="color: #fff;">删除订单</a>
													</div>
													@endif
													
												</li>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
@endsection
