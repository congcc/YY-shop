@extends('homes.layout.seller')

@section('head')
<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/cmstyle.css" rel="stylesheet" type="text/css">

		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
@endsection

@section('title','评论中心')

@section('content')


					<div class="user-comment">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">评价管理</strong> / <small>Manage&nbsp;Comment</small></div>
						</div>
						<hr>

						<div data-am-tabs="" class="am-tabs am-tabs-d2 am-margin">

							<ul class="am-avg-sm-2 am-tabs-nav am-nav am-nav-tabs">
								<li class="am-active"><a href="#tab1">所有评价</a></li>
								<li><a href="#tab2">有图评价</a></li>

							</ul>
@foreach($arr as $k=>$v)
							<div class="am-tabs-bd">
							
								<div id="tab1" class="am-tab-panel am-fade am-in am-active">
							
									<div class="comment-main">
										<div class="comment-list">
											<ul class="item-list">

												
												<div class="comment-top">
													<div class="th th-price">
														评价
													</div>
													<div class="th th-item">
														商品
													</div>													
												</div>
												<li class="td td-item">
													<div class="item-pic">
														<a class="J_MakePoint" href="#">
															<img class="itempic" src="{{$v['picture']}}">
														</a>
													</div>
												</li>

												<li class="td td-comment">
													<div class="item-title">
														<div class="item-opinion">{{$v['g_grade']}}</div>
														
														<div class="item-name">
															<a href="#">
																<p class="item-basic-info"></p>
															</a>
														</div>
														
													</div>
													<div class="item-comment">
														{{$v['content']}}
													</div>
														
													<div class="item-info">
														<div>
															<p class="info-little"> </p>
															<p class="info-time">{{date('Y-m-d',$v['time'])}}</p>

														</div>
													</div>
												</li>

											</ul>

										</div>
									</div>

								</div>
						</div>
							@endforeach	
							
						</div>

					</div>

				
@endsection