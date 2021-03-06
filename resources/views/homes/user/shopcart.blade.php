@extends('homes.layout.head')


@section('head')
<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/homes/basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link href="/homes/css/cartstyle.css" rel="stylesheet" type="text/css" />
		<link href="/homes/css/optstyle.css" rel="stylesheet" type="text/css" />
		<script src="/homes/layer/layer.js"></script>
		
		<script type="text/javascript" src="/homes/js/jquery.js"></script>
		
@endsection

@section('title','个人中心')

@section('content')
	@if($res)
<div class="concent">
				<div id="cartTable">
					<div class="cart-table-th">
						<div class="wp">
							<div class="th th-chk">
								<div id="J_SelectAll1" class="select-all J_SelectAll">

								</div>
							</div>
							<div class="th th-item">
								<div class="td-inner">商品信息</div>
							</div>
							<div class="th th-price">
								<div class="td-inner">单价</div>
							</div>
							<div class="th th-amount">
								<div class="td-inner">数量</div>
							</div>
							<div class="th th-sum">
								<div class="td-inner">金额</div>
							</div>
							<div class="th th-op">
								<div class="td-inner">操作</div>
							</div>
						</div>
					</div>
					<?php
						$i = 0;
					?>
				@foreach($array as $k=>$v)
					
				   	<div class="bundle-hd">
								<div class="bd-promos">
									<div class="bd-has-promo">店铺名称: <span class="bd-has-promo-content">{{$v[0]->shop->sname}}</span>&nbsp;&nbsp;</div>
									<div class="bd-has-promo">已享优惠:<span class="bd-has-promo-content">省￥19.50</span>&nbsp;&nbsp;</div>
									<div class="act-promo">
										<a href="#" target="_blank">第二支半价，第三支<span class="gt">&gt;&gt;</span></a>
									</div>
									<span class="list-change theme-login">编辑</span>
								</div>
							</div>


				    @foreach($v as $o=>$p)

					<div class="clear"></div>
						<div class="bundle  bundle-last ">
							
							
							<div class="clear"></div>
							<div class="bundle-main">
								<ul class="item-content clearfix">
									<li class="td td-chk">
										<div class="cart-checkbox ">
											<input class="check" id="J_CheckBox_170037950254" name="items[]" value="170037950254" type="checkbox">
											<label for="J_CheckBox_170037950254"></label>
										</div>
									</li>
									<li class="td td-item">
										<div class="item-pic">
											<a href="#" target="_blank" data-title="美康粉黛醉美东方唇膏口红正品 持久保湿滋润防水不掉色护唇彩妆" class="J_MakePoint" data-point="tbcart.8.12">
												<img src="{{ $p->goods->gimg }}" class="itempic J_ItemImg"></a>
										</div>
										<div class="item-info">
											<div class="item-basic-info" style="margin-top: -82px;">
												<a href="#" target="_blank" title="美康粉黛醉美唇膏 持久保湿滋润防水不掉色"  class="item-title J_MakePoint" data-point="tbcart.8.11">{{ $p->goods->gname }}</a> 											</div>
										</div>
									</li>
									<li class="td td-info">
										<div class="item-props item-props-can">
											<span class="sku-line">规格：{{ $p->label  }}</span>
											<!-- <span class="sku-line">包装：裸装</span> -->
											<span tabindex="0" class="btn-edit-sku theme-login">修改</span>
											<i class="theme-login am-icon-sort-desc"></i>
										</div>
									</li>
									<li class="td td-price">
										<div class="item-price price-promo-promo">
											<div class="price-content">
												<div class="price-line">
													<em class="price-original">78.00</em>
												</div>
												<div class="price-line">
													<em class="J_Price price-now" tabindex="0">{{ $p->goods->gprice }}</em>
												</div>
											</div>
										</div>
									</li>
									<li class="td td-amount">
										<div class="amount-wrapper ">
											<div class="item-amount ">
												<div class="sl">
													<input class="min am-btn" name="goods_gum" type="button" value="-" onclick = "tnc({{$p->id}},{{$i}})">
													<input class="text_box" name="gums" type="text" value="{{ $p->gum }}" style="width:30px;" onblur="addgums({{$p->id}},{{$i}})" >
													<input class="add am-btn" name="goods_gum" type="button" value="+" 
													onclick = "onc({{$p->id}},{{$i}})">
												</div>
											</div>
										</div>
									</li>
									<li class="td td-sum">
										<div class="td-inner">
											<em tabindex="0" class="J_ItemSum number">{{ $p->goods->gprice * $p->gum}}</em>
										</div>
									</li>
									<li class="td td-op">
										<div class="td-inner">
											
											<a data-point-url="#" class="delete" 
											onclick = "deleteonc({{$p->id}},{{$i}})"> 删除</a>
										</div>
									</li>
								</ul>
								
					<?php
						$i++;
					?>
					@endforeach		
					
				@endforeach
				<div class="clear"></div>

				<div class="float-bar-wrapper">
					<div id="J_SelectAll2" class="select-all J_SelectAll">
						<div class="cart-checkbox">
							<input class="check-all check" id="J_SelectAllCbx2" name="select-all" value="true" type="checkbox">
							<label for="J_SelectAllCbx2"></label>
						</div>
						<span>全选</span>
					</div>
					<div class="operations">
						<a href="#" hidefocus="true" class="deleteAll">删除</a>
						<a href="#" hidefocus="true" class="J_BatchFav">移入收藏夹</a>
					</div>
					<div class="float-bar-right">
						<div class="amount-sum">
							<span class="txt">已选商品</span>
							<em id="J_SelectedItemsCount">0</em><span class="txt">件</span>
							<div class="arrow-box">
								<span class="selected-items-arrow"></span>
								<span class="arrow"></span>
							</div>
						</div>
						<div class="price-sum">
							<span class="txt">合计:</span>
							<strong class="price">¥<em id="J_Total">0.00</em></strong>
						</div>
						<div class="btn-area">
							<a href="pay.html" id="J_Go" class="submit-btn submit-btn-disabled" aria-label="请注意如果没有选择宝贝，将无法结算">
								<span>结&nbsp;算</span></a>
						</div>
					</div>

				</div>

			
</div>
	@elseif($res==0)
	<a href=""> 您的购物车还没有商品呢~~,去添加吧</a>
	@endif
<script>

// 增加数量
function onc (id,i) {
	var gu = $('input[name="gums"]').eq(i).val();
	var gum = parseInt(gu)+1;
	$.get("{{url('home/user/car')}}",{gum:gum,id,id},function(data){
		$('.J_ItemSum').eq(i).html(data);
	})
}
//减少数量
function tnc (id,i) {
	var gu = $('input[name="gums"]').eq(i).val();
	var gum = parseInt(gu)-1;
	$.get("{{url('home/user/car')}}",{gum:gum,id,id},function(data){
		$('.J_ItemSum').eq(i).html(data);
	})
	
}
//获取填写的数量
function addgums (id,i) {
	var gum = $('input[name="gums"]').eq(i).val();
	console.log(gum);
	$.get("{{url('home/user/car')}}",{gum:gum,id,id},function(data){
		$('.J_ItemSum').eq(i).html(data);
	})
	
}

//删除(确认框)
function deleteonc (id,i) {
	// 询问框
	layer.confirm('您确定要删除吗?', {
		  btn: ['确定','取消'] //按钮
		}, function(){
			//发送ajax进行删除
			$.get("{{url('home/user/cardelete')}}",{id,id},function(data){
				if(data){
					layer.msg('删除成功', {icon: 1});
					location.reload();
				}else{
					layer.msg('删除失败', {icon: 2});
				}
			},'json')
		}, function(){

		});
	
	
	
}
</script>					



@endsection

