@extends('homes.layout.visitor')


@section('head')
<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />

		<link href="/homes/basic/css/demo.css" rel="stylesheet" type="text/css" />

		<link href="/homes/css/seastyle.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="/homes/basic/js/jquery-1.7.min.js"></script>
		<script type="text/javascript" src="/homes/js/script.js"></script>
		<script src="/homes/layer/layer.js"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>

@endsection

@section('title','商品搜索页')

@section('content')
<div class="am-g am-g-fixed">
						<div class="am-u-sm-12 am-u-md-12">
	                  	<div class="theme-popover">														
							
							<ul class="select">
								<p class="title font-normal">
									<span class="fl">{{$search}}</span>
									<span class="total fl">搜索到<strong class="num">{{$count}}</strong>件相关商品</span>
								</p>
								<div class="clear"></div>
								<li class="select-result">
									<dl>
										<dt>已选</dt>
										<dd class="select-no"></dd>
										<p class="eliminateCriteria">清除</p>
									</dl>
								</li>
								<div class="clear"></div>
								<li class="select-list">
									<dl id="select1">
										<dt class="am-badge am-round">品牌</dt>	
									
										 <div class="dd-conent">										
											<dd class="select-all selected"><a >全部</a></dd>
											@foreach($tag_a as $k=>$v)
											<dd><a style="cursor: pointer;" onclick="titlea({{$v}})" >{{$v}}</a></dd>
											@endforeach
										 </div>
						
									</dl>
								</li>
								<li class="select-list">
									<dl id="select2">
										<dt class="am-badge am-round">种类</dt>
										<div class="dd-conent">
											<dd class="select-all selected"><a href="/homes/#">全部</a></dd>
											@foreach($tag_b as $o=>$p)
											<dd><a href="">{{$p}}</a></dd>
											@endforeach
										</div>
									</dl>
								</li>
								<li class="select-list">
									<dl id="select3">
										<dt class="am-badge am-round">选购热点</dt>
										<div class="dd-conent">
											<dd class="select-all selected"><a href="/homes/#">全部</a></dd>
											@foreach($tag_c as $q=>$w)
											<dd><a href="">{{$w}}</a></dd>
											@endforeach
											
										</div>
									</dl>
								</li>
					        
							</ul>
							<div class="clear"></div>
                        </div>
							<div class="search-content">
								<div class="sort">
									<li class="first"><a title="综合" href="/home/cyn/{{$search}}">综合排序</a></li>
									<li>
										<a title="价格" href="/home/sales/{{$search}}" >销量优先</a></li>
								
									</li>
									<li><a title="价格" href="/home/price/{{$search}}" >价格优先</a></li>
									
								</div>
								<div class="clear"></div>

								<ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-4 boxes">
									@foreach($res as $k=>$v)
									<li>
										<a href="/home/details/{{$v->id}}/edit" ><div class="i-pic limit">
											
											<img src="{{$v->gimg}}" style="width: 218px;height: 218px;">
											<p class="title fl">{{$v->gname}}</p>
											<p class="price fl">
												<b>¥</b>
												<strong>{{$v->gprice}}</strong>
											</p>
											<p class="number fl">
												销量<span>{{$v->xnumber}}</span>
											</p>
										</div></a>
									</li>
									@endforeach
								</ul>
							</div>
							<div class="search-side">

								<div class="side-title">
									经典搭配
								</div>
								@foreach($goo as $z=>$x)
								<li>
									<a href="/home/details/{{$x->id}}/edit" ><div class="i-pic check">
										<img src="{{$x->gimg}}">
										<p class="check-title">{{$x->gname}}</p>
										<p class="price fl">
											<b>¥</b>
											<strong>{{$x->gprice}}</strong>
										</p>
										<p class="number fl">
											销量<span>{{$x->xnumber}}</span>
										</p>
									</div></a>
								</li>
								@endforeach
								<!-- <li>
									<div class="i-pic check">
										<img src="/homes/images/cp2.jpg">
										<p class="check-title">ZEK 原味海苔</p>
										<p class="price fl">
											<b>¥</b>
											<strong>8.90</strong>
										</p>
										<p class="number fl">
											销量<span>1110</span>
										</p>
									</div>
								</li>
								<li>
									<div class="i-pic check">
										<img src="/homes/images/cp.jpg">
										<p class="check-title">萨拉米 1+1小鸡腿</p>
										<p class="price fl">
											<b>¥</b>
											<strong>29.90</strong>
										</p>
										<p class="number fl">
											销量<span>1110</span>
										</p>
									</div>
								</li> -->

							</div>
							<div class="clear"></div>
							<!--分页 -->
							<ul class="am-pagination am-pagination-right">
								<li class="am-disabled"><a href="/homes/#">«</a></li>
								<li class="am-active"><a href="/homes/#">1</a></li>
								<li><a href="/homes/#">2</a></li>
								<li><a href="/homes/#">3</a></li>
								<li><a href="/homes/#">4</a></li>
								<li><a href="/homes/#">5</a></li>
								<li><a href="/homes/#">»</a></li>
							</ul>

						</div>
					</div>
<script>
 
 

 function sales () {
 	var search = "{{$search}}";
 	$.post('/home/sales',{'_token':'{{ csrf_token() }}',search:search},function(data){
 		console.log(data);
 	},'json');
 }
</script>
@endsection

