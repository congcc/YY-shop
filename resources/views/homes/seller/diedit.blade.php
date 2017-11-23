
@extends('homes.layout.seller')

@section('head')
		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/infstyle.css" rel="stylesheet" type="text/css">
		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js" type="text/javascript"></script>

@endsection

@section('title','店铺信息')

@section('content')

<div class="user-info">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">店铺信息</strong> / <small>Personal&nbsp;information</small></div>
						</div>
						<hr>
					
						<!--头像 -->
						<div class="user-infoPic">

							<div class="filePic">
					
								<img alt="" src="{{$di->simg}}" class="am-circle am-img-thumbnail">

							</div>

							<p class="am-form-help">头像</p>

							<div class="info-m">
								<div><b>店铺名：<i>{{$di->sname}}</i></b></div>
								<div class="u-level">
									<span class="rank r2">
							             <s class="vip1"></s><a href="#" class="classes">铜牌会员</a>
						            </span>
								</div>
								<div class="u-safety">
									<a href="safety.html">
									 账户安全
									<span class="u-profile"><i width="0" style="width: 60px;" class="bc_ee0000">60分</i></span>
									</a>
								</div>
							</div>
						</div>

						<!--个人信息 -->
						<div class="info-main">
							<form class="am-form am-form-horizontal" action="/home/seller/di/{{$di['id']}}" method="post">


								<div class="am-form-group">
									<label class="am-form-label" for="user-name2">店铺名：</label>
									<div class="am-form-content">
										<input type="text" placeholder="name" id="user-name2"name="sname" value="{{$di->sname}}" >



									</div>

								</div>

							

								<div class="am-form-group">
									<label class="am-form-label">店铺状态：</label>
									<div class="am-form-content">
										<input type="text" placeholder="name" id="user-name2"name="sauth" value="{{$di->sauth}}" >


									</div>

								</div>
									

									<div class="am-form-group">
									<label class="am-form-label" for="user-birth">店铺类别：</label>
									<div class="am-form-content">
										<input type="text" placeholder="name" id="user-name2"name="stype" value="{{$di->stype}}" >

									</div>
									</div>

							
								


								<div class="am-form-group">
									<label class="am-form-label" for="user-birth">积分：</label>
									<div class="am-form-content">
										<input type="text" placeholder="name" id="user-name2"name="sclass" value="{{$di->sclass}}" >

									</div>

								</div>
								
								<div class="am-form-group">
									<label class="am-form-label" for="user-email">住址：</label>
									<div class="am-form-content">

										<input type="text" placeholder="name" id="user-name2"name="saddress" value="{{$di->saddress}}" >


									</div>			

								</div>
							
								<div class="am-form-group">
									<label class="am-form-label" for="user-email">资金：</label>
									<div class="am-form-content">
										<input type="text" placeholder="name" id="user-name2"name="swallet" value="{{$di->swallet}}" >

									</div>					


								</div>


						</div>
							
								<div class="info-btn">

									{{ csrf_field()}}

    								{{method_field('PUT')}}

									<button class="am-btn am-btn-danger">保存修改</button>
								</div>

</form>

								</div>

						

@endsection