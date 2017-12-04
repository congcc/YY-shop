@extends('homes.layout.userbuy')


@section('head')


		<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/cmstyle.css" rel="stylesheet" type="text/css">

		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
		<meta name="_token" content="{{ csrf_token() }}"/>

@endsection

@section('title','用户评价')

					

 
@section('content')

 


<div class="user-comment">
		<!--标题 -->
<div class="am-cf am-padding">
	<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">评价管理</strong> / <small>Manage&nbsp;Comment</small></div>
</div>
<hr>

<div class="am-tabs am-tabs-d2 am-margin" data-am-tabs="">

	<ul class="am-avg-sm-2 am-tabs-nav am-nav am-nav-tabs">
		<li class="am-active"><a href="/homes/#tab1">所有评价</a></li>
		

	</ul>

	<div class="am-tabs-bd" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
		<div class="am-tab-panel am-fade am-in am-active" id="tab1">
			@foreach($dd as $k=>$val)
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
						
						
						<li class="td td-item">
							<div class="item-pic">
								<a href="/homes/#" class="J_MakePoint">
									<img src="{{$val->orgoods->gimg}}" class="itempic">
								</a>
							</div>
						</li>

						<li class="td td-comment">
							<div class="item-title">
								<div class="item-opinion">好评</div>
								<div class="item-name">
									<a href="/homes/#">
										<p class="item-basic-info">{{$val->orgoods->gname}}</p>
									</a>
								</div>
							</div>
							
							<div class="item-comment" style="margin-left:100px;margin-top:-20px;">
							<form action="/home/user/ureview/{{$val->gid}}" method="post">
								<input type="hidden" name="code" value="{{$id}}">
								<input type="hidden" name="uid" value="{{$uid}}">
								<input type="hidden" name="oid" value="{{$oid}}">
								
								<button class="delorder am-btn am-btn-danger anniu">{{$val->ostate == 4 ? '已评价' : '评价'}}</button>
							{{csrf_field()}}
                			{{method_field('PUT')}}
							</form>
							</div>
							
							<div class="item-info">
								<div>
									<p class="info-little"><span>颜色：12#玛瑙</span> <span>包装：裸装</span> </p>
									<p class="info-time">{{time()}}</p>

								</div>
							</div>
						</li>
						</div>
					</ul>

				</div>
			</div>
			@endforeach
		</div>
		
	</div>
</div>

</div>

<script type="text/javascript">
	function cao(status){
		if(status == '1'){
			layer.alert('您已被禁言');
		} 
	}

</script>

@endsection

