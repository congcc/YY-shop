@extends('homes.layout.visitor')


@section('head')
<meta name="_token" content="{{ csrf_token() }}"/>
<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/homes/basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link type="text/css" href="/homes/css/optstyle.css" rel="stylesheet" />
		<link type="text/css" href="/homes/css/style.css" rel="stylesheet" />

		<script type="text/javascript" src="/homes/basic/js/jquery-1.7.min.js"></script>
		<script type="text/javascript" src="/homes/basic/js/quick_links.js"></script>

		<script type="text/javascript" src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
		<script type="text/javascript" src="/homes/js/jquery.imagezoom.min.js"></script>
		<script type="text/javascript" src="/homes/js/jquery.flexslider.js"></script>
		<script type="text/javascript" src="/homes/js/list.js"></script>

@endsection

@section('title','个人中心')

@section('content')
<div class="listMain">

				<!--分类-->
			
				<ol class="am-breadcrumb am-breadcrumb-slash">
					<li><a href="/homes/">首页</a></li>
					<li><a href="/homes/">分类</a></li>
					<li class="am-active">内容</li>
				</ol>
				<script type="text/javascript">
					$(function() {});
					$(window).load(function() {
						$('.flexslider').flexslider({
							animation: "slide",
							start: function(slider) {
								$('body').removeClass('loading');
							}
						});
					});
				</script>
				<div class="scoll">
					<section class="slider">
						<div class="flexslider" style="">
							
						<div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1000%; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);"><li class="clone" aria-hidden="true" style="width: 0px; float: left; display: block;">
									<img src="/homes/images/03.jpg" draggable="false">
								</li>
								<li style="width: 0px; float: left; display: block;" class="flex-active-slide">
									<img src="/homes/images/01.jpg" title="pic" draggable="false">
								</li>
								<li style="width: 0px; float: left; display: block;">
									<img src="/homes/images/02.jpg" draggable="false">
								</li>
								<li style="width: 0px; float: left; display: block;">
									<img src="/homes/images/03.jpg" draggable="false">
								</li>
							<li style="width: 0px; float: left; display: block;" class="clone" aria-hidden="true">
									<img src="/homes/images/01.jpg" title="pic" draggable="false">
								</li></ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a>2</a></li><li><a>3</a></li></ol><ul class="flex-direction-nav"><li class="flex-nav-prev"><a class="flex-prev" href="/homes/#">Previous</a></li><li class="flex-nav-next"><a class="flex-next" href="/homes/#">Next</a></li></ul></div>
					</section>
				</div>

				<!--放大镜-->

				<div class="item-inform">
					<div class="clearfixLeft" id="clearcontent">

						<div class="box">
							<script type="text/javascript">
								$(document).ready(function() {
									$('#thumblist li').eq(0).addClass("tb-selected");
									$(".jqzoom").imagezoom();
									$("#thumblist li a").click(function() {
										$(this).parents("li").addClass("tb-selected").siblings().removeClass("tb-selected");
										$(".jqzoom").attr('src', $(this).find("img").attr("mid"));
										$(".jqzoom").attr('rel', $(this).find("img").attr("big"));
									});
								});
							</script>

							<div class="tb-booth tb-pic tb-s310">
								<a href="/homes/images/01.jpg"><img src="{{$res[0]->gimg}}" alt="" rel="{{$res[0]->gimg}}" class="jqzoom" style="cursor: crosshair;"></a>
							</div>
							<ul class="tb-thumb" id="thumblist">
								@foreach($gdpic as $k=>$v)
								<li>
									<div class="tb-pic tb-s40">
										<a href="#"><img src="{{$v}}" mid="{{$v}}" big="{{$v}}"></a>
									</div>
								</li>
								@endforeach
							</ul>
						</div>

						<div class="clear"></div>
					</div>

					<div class="clearfixRight">

						<!--规格属性-->
						<!--名称-->
						<div class="tb-detail-hd">
							<h1>	
				 {{$res[0]->gname}}
	          </h1>
						</div>
						<div class="tb-detail-list">
							<!--价格-->
							<div class="tb-detail-price">
								<li class="price iteminfo_price">
									<dt>促销价</dt>
									<dd><em>¥</em><b id="gprices" class="sys_item_price">{{number_format(json_decode($res[0]->gprices,true)['0,0'],2)}}</b>  </dd>                                 
								</li>
								<li class="price iteminfo_mktprice">
									<dt>原价</dt>
									<dd><em>¥</em><b class="sys_item_mktprice">98.00</b></dd>									
								</li>
								<div class="clear"></div>
							</div>

							<!--地址-->
							<dl class="iteminfo_parameter freight">
								<dt>配送至</dt>
								<div class="iteminfo_freprice">
									<div class="am-form-content address">
										<select data-am-selected="" style="display: none;">
											<option value="a">浙江省</option>
											<option value="b">湖北省</option>
										</select><div class="am-selected am-dropdown " id="am-selected-1lgpa" data-am-dropdown="">  <button type="button" class="am-selected-btn am-btn am-dropdown-toggle am-btn-default">    <span class="am-selected-status am-fl">浙江省</span>    <i class="am-selected-icon am-icon-caret-down"></i>  </button>  <div class="am-selected-content am-dropdown-content">    <h2 class="am-selected-header"><span class="am-icon-chevron-left">返回</span></h2>       <ul class="am-selected-list">                     <li class="am-checked" data-index="0" data-group="0" data-value="a">         <span class="am-selected-text">浙江省</span>         <i class="am-icon-check"></i></li>                                 <li class="" data-index="1" data-group="0" data-value="b">         <span class="am-selected-text">湖北省</span>         <i class="am-icon-check"></i></li>            </ul>    <div class="am-selected-hint"></div>  </div></div>
										<select data-am-selected="" style="display: none;">
											<option value="a">温州市</option>
											<option value="b">武汉市</option>
										</select><div class="am-selected am-dropdown " id="am-selected-ga789" data-am-dropdown="">  <button type="button" class="am-selected-btn am-btn am-dropdown-toggle am-btn-default">    <span class="am-selected-status am-fl">温州市</span>    <i class="am-selected-icon am-icon-caret-down"></i>  </button>  <div class="am-selected-content am-dropdown-content">    <h2 class="am-selected-header"><span class="am-icon-chevron-left">返回</span></h2>       <ul class="am-selected-list">                     <li class="am-checked" data-index="0" data-group="0" data-value="a">         <span class="am-selected-text">温州市</span>         <i class="am-icon-check"></i></li>                                 <li class="" data-index="1" data-group="0" data-value="b">         <span class="am-selected-text">武汉市</span>         <i class="am-icon-check"></i></li>            </ul>    <div class="am-selected-hint"></div>  </div></div>
										<select data-am-selected="" style="display: none;">
											<option value="a">瑞安区</option>
											<option value="b">洪山区</option>
										</select><div class="am-selected am-dropdown " id="am-selected-msi2i" data-am-dropdown="">  <button type="button" class="am-selected-btn am-btn am-dropdown-toggle am-btn-default">    <span class="am-selected-status am-fl">瑞安区</span>    <i class="am-selected-icon am-icon-caret-down"></i>  </button>  <div class="am-selected-content am-dropdown-content">    <h2 class="am-selected-header"><span class="am-icon-chevron-left">返回</span></h2>       <ul class="am-selected-list">                     <li class="am-checked" data-index="0" data-group="0" data-value="a">         <span class="am-selected-text">瑞安区</span>         <i class="am-icon-check"></i></li>                                 <li class="" data-index="1" data-group="0" data-value="b">         <span class="am-selected-text">洪山区</span>         <i class="am-icon-check"></i></li>            </ul>    <div class="am-selected-hint"></div>  </div></div>
									</div>
									<div class="pay-logis">
										快递<b class="sys_item_freprice">10</b>元
									</div>
								</div>
							</dl>
							<div class="clear"></div>

							<!--销量-->
							<ul class="tm-ind-panel">
								
								<li class="tm-ind-item tm-ind-sumCount canClick">
									<div class="tm-indcon"><span class="tm-label">累计销量</span><span class="tm-count">6015</span></div>
								</li>
								<li class="tm-ind-item tm-ind-reviewCount canClick tm-line3">
									<div class="tm-indcon"><span class="tm-label">累计评价</span><span class="tm-count">640</span></div>
								</li>
							</ul>
							<div class="clear"></div>

							<!--各种规格-->
							<dl class="iteminfo_parameter sys_item_specpara">
								<dt class="theme-login"><div class="cart-title">可选规格<span class="am-icon-angle-right"></span></div></dt>
								<dd>
									<!--操作页面-->

									<div class="theme-popover-mask"></div>

									<div class="theme-popover">
										<div class="theme-span"></div>
										<div class="theme-poptit">
											<a href="/homes/javascript:;" title="关闭" class="close">×</a>
										</div>
										<div class="theme-popbod dform">
											<form class="theme-signin" name="loginform" action="" method="post">

												<div class="theme-signin-left">

													<div class="theme-options">
														<div class="cart-title">口味</div>
														<ul>
														@foreach(json_decode($res[0]->label)[0] as $k=>$v)
															<li class="sku-line lis1">{{$v}}</li>
														@endforeach
														</ul>
													</div>
													<div class="theme-options">
														<div class="cart-title">包装</div>
														<ul>
														@foreach(json_decode($res[0]->label)[1] as $k=>$v)
															<li class="sku-line lis2">{{$v}}</li>
														@endforeach
														</ul>
													</div>
													<!-- <div style="width: 50px;height: 50px;background: red;" id="di"></div> -->
													

													<script type="text/javascript">
														$(document).ready(function(){
															$('.lis1').eq(0).attr('class','sku-line lis1 selected');
															$('.lis2').eq(0).attr('class','sku-line lis2 selected');
															var ind1 = 0;
															var ind2 = 0;
															var lis1 = document.getElementsByClassName('lis1');
															var lis2 = document.getElementsByClassName('lis2');

															$('.lis1,.lis2').click(function(){
																for(var i=0; i<lis1.length; i++){
																if(lis1[i].getAttribute('class')=="sku-line lis1 selected"){
																	ind1 = i;
																	}
																}
																for(var j=0; j<lis2.length; j++){
																	if(lis2[j].getAttribute('class')=="sku-line lis2 selected"){
																		ind2 = j;
																		}
																	}
																var inds = ind1+','+ind2;
																$.get('/home/detailss',{inds:inds},function(data){
																	$('#gprices').html(data);
																})
															})
															
														})
													</script>


													<div class="theme-options">
														<div class="cart-title number">数量</div>
														<dd>
															<input id="min" class="am-btn am-btn-default" name="" type="button" value="-" disabled="disabled">
															<input id="text_box" name="" type="text" value="1" style="width:30px;">
															<input id="add" class="am-btn am-btn-default" name="" type="button" value="+">
															<span id="Stock" class="tb-hidden">库存<span class="stock">1000</span>件</span>
														</dd>

													</div>
													<div class="clear"></div>

													<div class="btn-op">
														<div class="btn am-btn am-btn-warning">确认</div>
														<div class="btn close am-btn am-btn-warning">取消</div>
													</div>
												</div>
												<div class="theme-signin-right">
													<div class="img-info">
														<img src="/homes/images/songzi.jpg">
													</div>
													<div class="text-info">
														<span class="J_Price price-now">¥39.00</span>
														<span id="Stock" class="tb-hidden">库存<span class="stock">1000</span>件</span>
													</div>
												</div>

											</form>
										</div>
									</div>

								</dd>
							</dl>
							<div class="clear"></div>
							<!--活动	-->
							<div class="shopPromotion gold">
								<div class="hot">
									<dt class="tb-metatit">店铺优惠</dt>
									<div class="gold-list">
										<p>购物满2件打8折，满3件7折<span>点击领券<i class="am-icon-sort-down"></i></span></p>
									</div>
								</div>
								<div class="clear"></div>
								<div class="coupon">
									<dt class="tb-metatit">优惠券</dt>
									<div class="gold-list">
										<ul>
											<li>125减5</li>
											<li>198减10</li>
											<li>298减20</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						{{ csrf_field()}}
						<div class="pay">
							<div class="pay-opt">
							<a href="/homes/home.html"><span class="am-icon-home am-icon-fw">首页</span></a>
							<a><span class="am-icon-heart am-icon-fw">收藏</span></a>
							
							</div>
							
							
							
							<li>
								<div class="clearfix tb-btn tb-btn-buy theme-login">
									<a id="LikBuy" title="点此按钮到下一步确认购买信息" href="javascript:void(0)">立即购买</a>
								</div>
							</li>
							<li>
								<div class="clearfix tb-btn tb-btn-basket theme-login">
									<a id="LikBasket" title="加入购物车" ><i></i>加入购物车</a>
								</div>
							</li>
						</div>
						
						<script type="text/javascript">
							var gid = {{$gid}};
							var sid = {{$sid}};
							var lis1 = document.getElementsByClassName('lis1');
							var lis2 = document.getElementsByClassName('lis2');
							$('#LikBasket').click(function(){
								for(var i = 0;i<lis1.length;i++){
									if(lis1[i].getAttribute('class')=="sku-line lis1 selected"){
										var label1 = $('.lis1').eq(i).html();
									}
								}
								for(var j = 0;j<lis2.length;j++){
									if(lis2[j].getAttribute('class')=="sku-line lis2 selected"){
										var label2 = $('.lis2').eq(j).html();
									}
								}
								var label = label1+','+label2;
								var gum = $('#text_box').val();
								$.post("/home/user/addcar",{'_token':'{{ csrf_token() }}',label:label,gum:gum,gid:gid},function(data){
							      console.log(data);
							    },'json')
							})
							$('#LikBuy').click(function(){
								for(var i = 0;i<lis1.length;i++){
									if(lis1[i].getAttribute('class')=="sku-line lis1 selected"){
										var label1 = $('.lis1').eq(i).html();
									}
								}
								for(var j = 0;j<lis2.length;j++){
									if(lis2[j].getAttribute('class')=="sku-line lis2 selected"){
										var label2 = $('.lis2').eq(j).html();
									}
								}
								var label = label1+','+label2;
								var gum = $('#text_box').val();
								var gprices = $('#gprices').html();
								var toprice = parseFloat(gprices)*parseInt(gum);
								location.href = "/home/user/ordersub/"+gid+"/"+sid+"/"+toprice+"/"+gum+"/"+label+"/"+gprices;
							})
						</script>

					</div>

					<div class="clear"></div>

				</div>

				<!--优惠套装-->
				
				
							
				<!-- introduce-->

				<div class="introduce">
					<div class="browse">
					    <div class="mc"> 
						     <ul>					    
						     	<div class="mt">            
						            <h2>看了又看</h2>        
					            </div>
						     	
							      <li class="first">
							      	<div class="p-img">                    
							      		<a href="/homes/#"> <img class="" src="/homes/images/browse1.jpg"> </a>               
							      	</div>
							      	<div class="p-name"><a href="/homes/#">
							      		【三只松鼠_开口松子】零食坚果特产炒货东北红松子原味
							      	</a>
							      	</div>
							      	<div class="p-price"><strong>￥35.90</strong></div>
							      </li>
							      <li>
							      	<div class="p-img">                    
							      		<a href="/homes/#"> <img class="" src="/homes/images/browse1.jpg"> </a>               
							      	</div>
							      	<div class="p-name"><a href="/homes/#">
							      		【三只松鼠_开口松子】零食坚果特产炒货东北红松子原味
							      	</a>
							      	</div>
							      	<div class="p-price"><strong>￥35.90</strong></div>
							      </li>
							      <li>
							      	<div class="p-img">                    
							      		<a href="/homes/#"> <img class="" src="/homes/images/browse1.jpg"> </a>               
							      	</div>
							      	<div class="p-name"><a href="/homes/#">
							      		【三只松鼠_开口松子】零食坚果特产炒货东北红松子原味
							      	</a>
							      	</div>
							      	<div class="p-price"><strong>￥35.90</strong></div>
							      </li>							      
							      <li>
							      	<div class="p-img">                    
							      		<a href="/homes/#"> <img class="" src="/homes/images/browse1.jpg"> </a>               
							      	</div>
							      	<div class="p-name"><a href="/homes/#">
							      		【三只松鼠_开口松子】零食坚果特产炒货东北红松子原味
							      	</a>
							      	</div>
							      	<div class="p-price"><strong>￥35.90</strong></div>
							      </li>							      
							      <li>
							      	<div class="p-img">                    
							      		<a href="/homes/#"> <img class="" src="/homes/images/browse1.jpg"> </a>               
							      	</div>
							      	<div class="p-name"><a href="/homes/#">
							      		【三只松鼠_开口松子218g】零食坚果特产炒货东北红松子原味
							      	</a>
							      	</div>
							      	<div class="p-price"><strong>￥35.90</strong></div>
							      </li>							      
					      
						     </ul>					
					    </div>
					</div>
					<div class="introduceMain">
						<div class="am-tabs" data-am-tabs="">
							<ul class="am-avg-sm-3 am-tabs-nav am-nav am-nav-tabs" otop="996.78125" style="position: static; top: 0px; z-index: 998;">
								<li class="am-active">
									<a href="/homes/#">

										<span class="index-needs-dt-txt">宝贝详情</span></a>

								</li>

								<li>
									<a href="/homes/#">

										<span class="index-needs-dt-txt">全部评价</span></a>

								</li>

								<li>
									<a href="/homes/#">

										<span class="index-needs-dt-txt">猜你喜欢</span></a>
								</li>
							</ul>

							<div class="am-tabs-bd" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">

								<div class="am-tab-panel am-fade am-in am-active">
									{!! $res[0]->gcontent !!}

								</div>

								<div class="am-tab-panel am-fade">
									
                                    


									<ul class="am-comments-list am-comments-list-flip">
									@foreach($re as $kr=>$vr)
										<li class="am-comment">
											<!-- 评论容器 -->
											<a href="/homes/">
												<img class="am-comment-avatar" src="/homes/images/hwbn40x40.jpg">
												<!-- 评论者头像 -->
											</a>

											<div class="am-comment-main">
												<!-- 评论内容容器 -->
												<header class="am-comment-hd">
													<!--<h3 class="am-comment-title">评论标题</h3>-->
													<div class="am-comment-meta">
														<!-- 评论元数据 -->
														<a href="/homes/#link-to-user" class="am-comment-author">{{$vr->reuserinfo->nickname}}</a>&nbsp;&nbsp;&nbsp;&nbsp;
														<!-- 评论者 -->
														评论于
														<time datetime="">{{date('Y-m-d H:i:s',$vr->time)}}</time>
													</div>
												</header>

												<div class="am-comment-bd">
													<div class="tb-rev-item " data-id="255776406962">
														<div class="J_TbcRate_ReviewContent tb-tbcr-content ">
															{{$vr->content}}
														</div>
														<div class="tb-r-act-bar">
															颜色分类：柠檬黄&nbsp;&nbsp;尺码：S
														</div>
													</div>

												</div>
												<!-- 评论内容 -->
											</div>
										</li>
									@endforeach

									</ul>

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
									<div class="clear"></div>

									<div class="tb-reviewsft">
										<div class="tb-rate-alert type-attention">购买前请查看该商品的 <a href="/homes/#" target="_blank">购物保障</a>，明确您的售后保障权益。</div>
									</div>

								</div>

								<div class="am-tab-panel am-fade">
									<div class="like">
										<ul class="am-avg-sm-2 am-avg-md-3 am-avg-lg-4 boxes">
											<li>
												<div class="i-pic limit">
													<img src="/homes/images/imgsearch1.jpg">
													<p>【良品铺子_开口松子】零食坚果特产炒货
														<span>东北红松子奶油味</span></p>
													<p class="price fl">
														<b>¥</b>
														<strong>298.00</strong>
													</p>
												</div>
											</li>
											<li>
												<div class="i-pic limit">
													<img src="/homes/images/imgsearch1.jpg">
													<p>【良品铺子_开口松子】零食坚果特产炒货
														<span>东北红松子奶油味</span></p>
													<p class="price fl">
														<b>¥</b>
														<strong>298.00</strong>
													</p>
												</div>
											</li>
											<li>
												<div class="i-pic limit">
													<img src="/homes/images/imgsearch1.jpg">
													<p>【良品铺子_开口松子】零食坚果特产炒货
														<span>东北红松子奶油味</span></p>
													<p class="price fl">
														<b>¥</b>
														<strong>298.00</strong>
													</p>
												</div>
											</li>
											<li>
												<div class="i-pic limit">
													<img src="/homes/images/imgsearch1.jpg">
													<p>【良品铺子_开口松子】零食坚果特产炒货
														<span>东北红松子奶油味</span></p>
													<p class="price fl">
														<b>¥</b>
														<strong>298.00</strong>
													</p>
												</div>
											</li>
											<li>
												<div class="i-pic limit">
													<img src="/homes/images/imgsearch1.jpg">
													<p>【良品铺子_开口松子】零食坚果特产炒货
														<span>东北红松子奶油味</span></p>
													<p class="price fl">
														<b>¥</b>
														<strong>298.00</strong>
													</p>
												</div>
											</li>
											<li>
												<div class="i-pic limit">
													<img src="/homes/images/imgsearch1.jpg">
													<p>【良品铺子_开口松子】零食坚果特产炒货
														<span>东北红松子奶油味</span></p>
													<p class="price fl">
														<b>¥</b>
														<strong>298.00</strong>
													</p>
												</div>
											</li>
											<li>
												<div class="i-pic limit">
													<img src="/homes/images/imgsearch1.jpg">
													<p>【良品铺子_开口松子】零食坚果特产炒货
														<span>东北红松子奶油味</span></p>
													<p class="price fl">
														<b>¥</b>
														<strong>298.00</strong>
													</p>
												</div>
											</li>
											<li>
												<div class="i-pic limit">
													<img src="/homes/images/imgsearch1.jpg">
													<p>【良品铺子_开口松子】零食坚果特产炒货
														<span>东北红松子奶油味</span></p>
													<p class="price fl">
														<b>¥</b>
														<strong>298.00</strong>
													</p>
												</div>
											</li>
											<li>
												<div class="i-pic limit">
													<img src="/homes/images/imgsearch1.jpg">
													<p>【良品铺子_开口松子】零食坚果特产炒货
														<span>东北红松子奶油味</span></p>
													<p class="price fl">
														<b>¥</b>
														<strong>298.00</strong>
													</p>
												</div>
											</li>
											<li>
												<div class="i-pic limit">
													<img src="/homes/images/imgsearch1.jpg">
													<p>【良品铺子_开口松子】零食坚果特产炒货
														<span>东北红松子奶油味</span></p>
													<p class="price fl">
														<b>¥</b>
														<strong>298.00</strong>
													</p>
												</div>
											</li>
											<li>
												<div class="i-pic limit">
													<img src="/homes/images/imgsearch1.jpg">
													<p>【良品铺子_开口松子】零食坚果特产炒货
														<span>东北红松子奶油味</span></p>
													<p class="price fl">
														<b>¥</b>
														<strong>298.00</strong>
													</p>
												</div>
											</li>
											<li>
												<div class="i-pic limit">
													<img src="/homes/images/imgsearch1.jpg">
													<p>【良品铺子_开口松子】零食坚果特产炒货
														<span>东北红松子奶油味</span></p>
													<p class="price fl">
														<b>¥</b>
														<strong>298.00</strong>
													</p>
												</div>
											</li>
										</ul>
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
									<div class="clear"></div>

								</div>

							</div>

						</div>

						<div class="clear"></div>

						
						</div>
					</div>

				</div>
			</div>




@endsection

