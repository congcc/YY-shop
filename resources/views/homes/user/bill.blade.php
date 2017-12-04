@extends('homes.layout.userbuy')


@section('head')
		<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/blstyle.css" rel="stylesheet" type="text/css">
		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/homes/css/orstyle.css" rel="stylesheet" type="text/css">
	
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
@endsection

@section('title','账单明细')

@section('content')


	<div class="user-bill">
		<!--标题 -->

		<div class="am-cf am-padding"><?php $to=0; ?>
			<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">账单</strong> / <small>Electronic&nbsp;bill</small></div>
			<!-- <div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">{{$to}}</strong> / <small>Electronic&nbsp;bill</small></div> -->

		</div>
		<hr>
		@foreach($array as $k=>$v)
		<div class="ebill-section">
			<div class="ebill-title-section">
				<h2 class="trade-title section-title">
                                                                                                                     订单号 :
            <span class="desc">{{$k}}</span>
        </h2>
		@foreach($v as $k1=>$v1)
				<div class=" ng-scope">
					<div class="trade-circle-select  slidedown-">
						<a class="current-circle ng-binding" href="javascript:void(0);">时间起止 : {{date('Y-m-d',$v1->ord_time)}}-{{date('Y-m-d',$v1->complete)}}</a>

					</div>
				
				</div>
		@endforeach
			</div>	
			<div class="module-income ng-scope">
				<div class="income-slider ">
				
					<div class="block-income block  fn-left">
						
						
						<div class="catatory-details  fn-hide shopping" ng-class="shoppingChart">
							<div class="catatory-chart fn-left fn-hide">
								<div class="title" style="margin-left:30px">图片</div>
								<div class="item-pic">
									<a href="/homes/#" class="J_MakePoint">
										<img src="{{$v['0']->orgoods->gimg}}">
									</a>
								</div>
							</div>
							<div class="catatory-detail fn-left">
								<div class="title ng-binding" style="color:#4ABAE1">
									购买的商品
								</div>
								<ul>
								
							<?php $to0=0;?>
							@foreach($v as $k1=>$v1)
									<li class="ng-scope  delete-false">

										<div class="  ng-scope">
											<a title="呢子大衣" class="text fn-left " href="#">
												<span class="emoji-span ng-binding">{{$v1->orgoods->gname}}</span>
												<span class="amount fn-right ng-binding">{{$v1->goods_num}} x {{$v1->orgoods->gprice}}</span>
											</a>
										</div>
									</li>
							<?php $to0+=$v1->orgoods->gprice*$v1->goods_num ?>
							@endforeach
								</ul>
							</div>
						</div>
					</div>
					
					<div class="block-expense block  fn-left">
						<div class="slide-button right"></div>
					</div>
					<div class="clear"></div>
					<!--收入-->
					<h3 class="expense income-title block-title">
                                                                                                       支出      
                                                                                                                                                        
                      <span class="num ng-binding">
					
						{{$to0}}

                       </span>
                
                </h3>
               
				</div>
				

				
				<!--消费走势-->
				
				<!--银行卡使用情况-->

				
			</div>
			<?php $to+=$to0 ?>
				
		</div>
@endforeach
	<div style="position: absolute;top:25px; right:30px; color:red;">{{$to}} 元</div>
	</div>

<script>
	$(document).ready(function (ev) {

	    $('.cards-carousel .details').on('click', function (ev) {
             $('.cards-details').css("display","block");
             $('.cards-carousel').css("display","none");								 
	    });									   									    

	    $('.cards-details .close').on('click', function (ev) {
             $('.cards-details').css("display","none");
             $('.cards-carousel').css("display","block");								 
	    });									    
	    									   								    
	});
</script>
@endsection

