
@extends('homes.layout.seller')

@section('head')
		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/infstyle.css" rel="stylesheet" type="text/css">
		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js" type="text/javascript"></script>

@endsection

@section('title','个人中心')

@section('content')
<div class="user-info">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">个人资料</strong> / <small>Personal&nbsp;information</small></div>
						</div>
						<hr>

						<!--头像 -->
						<div class="user-infoPic">

							<div class="filePic">
								<input type="file" accept="image/*" allowexts="gif,jpeg,jpg,png,bmp" class="inputPic">
								<img alt="" src="{{$info->user_pic}}" class="am-circle am-img-thumbnail">
							</div>

							<p class="am-form-help">头像</p>

							<div class="info-m">
								<div><b>商户名：<i>小叮当</i></b></div>
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
<!-- dd({{$info}}); -->
						<!--个人信息 -->
						<div class="info-main">
							<form class="am-form am-form-horizontal" action="" method="">

								<div class="am-form-group">
									<label class="am-form-label" for="user-name2">昵称</label>
									<div class="am-form-content">
										<input type="text" placeholder="nickname" id="user-name2" name="nickname" value="{{$info['nickname']}}">

									</div>
								</div>

								<div class="am-form-group">
									<label class="am-form-label" for="user-name">姓名</label>
									<div class="am-form-content">
										<input type="text" placeholder="name" id="user-name2"name="username" value="{{$info['truename']}}">

									</div>
								</div>

								<div class="am-form-group">
									<label class="am-form-label">性别</label>
									<div class="am-form-content sex">
										<label class="am-radio-inline">
											<input type="radio" data-am-ucheck="" value="male" name="sex" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 男
										</label>
										<label class="am-radio-inline">
											<input type="radio" data-am-ucheck="" value="female" name="sex" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 女
										</label>
										<label class="am-radio-inline">
											<input type="radio" data-am-ucheck="" value="secret" name="sex" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 保密
										</label>
									</div>
								</div>

								<div class="am-form-group">
									<label class="am-form-label" for="user-birth">生日</label>
									<div class="am-form-content birth">
										<div class="birth-select">
											<select data-am-selected="" style="display: none;" name="birth_y">
												<option value="a">2015</option>
												<option value="b">1987</option>
											</select><div data-am-dropdown="" id="am-selected-21pbe" class="am-selected am-dropdown">  <button class="am-selected-btn am-btn am-dropdown-toggle am-btn-default" type="button">    <span class="am-selected-status am-fl">2015</span>    <i class="am-selected-icon am-icon-caret-down"></i>  </button>  <div class="am-selected-content am-dropdown-content" style="min-width: 212px;">    <h2 class="am-selected-header"><span class="am-icon-chevron-left">返回</span></h2>       <ul class="am-selected-list">                     <li data-value="a" data-group="0" data-index="0" class="am-checked">         <span class="am-selected-text">2015</span>         <i class="am-icon-check"></i></li>                                 <li data-value="b" data-group="0" data-index="1" class="">         <span class="am-selected-text">1987</span>         <i class="am-icon-check"></i></li>            </ul>    <div class="am-selected-hint"></div>  </div></div>
											<em>年</em>
										</div>
										<div class="birth-select2">
											<select data-am-selected="" style="display: none;"name="birth_m">
												<option value="a">12</option>
												<option value="b">8</option>
											</select><div data-am-dropdown="" id="am-selected-lwnw4" class="am-selected am-dropdown ">  <button class="am-selected-btn am-btn am-dropdown-toggle am-btn-default" type="button">    <span class="am-selected-status am-fl">12</span>    <i class="am-selected-icon am-icon-caret-down"></i>  </button>  <div class="am-selected-content am-dropdown-content">    <h2 class="am-selected-header"><span class="am-icon-chevron-left">返回</span></h2>       <ul class="am-selected-list">                     <li data-value="a" data-group="0" data-index="0" class="am-checked">         <span class="am-selected-text">12</span>         <i class="am-icon-check"></i></li>                                 <li data-value="b" data-group="0" data-index="1" class="">         <span class="am-selected-text">8</span>         <i class="am-icon-check"></i></li>            </ul>    <div class="am-selected-hint"></div>  </div></div>
											<em>月</em></div>
										<div class="birth-select2">
											<select data-am-selected="" style="display: none;"name="birth_d">
												<option value="a">21</option>
												<option value="b">23</option>
											</select><div data-am-dropdown="" id="am-selected-71kup" class="am-selected am-dropdown ">  <button class="am-selected-btn am-btn am-dropdown-toggle am-btn-default" type="button">    <span class="am-selected-status am-fl">21</span>    <i class="am-selected-icon am-icon-caret-down"></i>  </button>  <div class="am-selected-content am-dropdown-content">    <h2 class="am-selected-header"><span class="am-icon-chevron-left">返回</span></h2>       <ul class="am-selected-list">                     <li data-value="a" data-group="0" data-index="0" class="am-checked">         <span class="am-selected-text">21</span>         <i class="am-icon-check"></i></li>                                 <li data-value="b" data-group="0" data-index="1" class="">         <span class="am-selected-text">23</span>         <i class="am-icon-check"></i></li>            </ul>    <div class="am-selected-hint"></div>  </div></div>
											<em>日</em></div>
									</div>
							
								</div>
								
								<div class="am-form-group">
									<label class="am-form-label" for="user-email">电子邮件</label>
									<div class="am-form-content">
										<input type="email" placeholder="Email" id="user-email" name="email" value="{{$info['email']}}">

									</div>
								</div>
								
								
								<div class="info-btn">
									<div class="am-btn am-btn-danger">保存修改</div>
								</div>

							</form>
						</div>

					</div>

@endsection