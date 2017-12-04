
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
					
								<img alt="" src="http://ozsps8743.bkt.clouddn.com/img/image_{{$user['user_pic']}}" class="am-circle am-img-thumbnail">

							</div>

							<p class="am-form-help">头像</p>

							<div class="info-m">
								<div><b>商户名：<i>{{$user['nickname']}}</i></b></div>
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
							<form class="am-form am-form-horizontal" action="" method="">

								<div class="am-form-group">
									<label class="am-form-label" for="user-name2">昵称：</label>
									<div class="am-form-content">
										<input type="text" placeholder="name" id="user-name2"name="nickname" value="{{$user['nickname']}}" readonly>



									</div>

								</div>

								<div class="am-form-group">
									<label class="am-form-label" for="user-name">姓名：</label>
									<div class="am-form-content">

										<input type="text" placeholder="name" id="user-name2"name="truename" value="{{$user['truename']}}" readonly>


									</div>


								</div>

								<div class="am-form-group">
									<label class="am-form-label">性别：</label>
									<div class="am-form-content">
										<input type="text" placeholder="name" id="user-name2"name="sex" value="{{$user['sex']?'男':'女'}}" readonly>


									</div>

								</div>
									

									<div class="am-form-group">
									<label class="am-form-label" for="user-birth">身份证：</label>
									<div class="am-form-content">
										<input type="text" placeholder="name" id="user-name2"name="idcard" value="{{$user['idcard']}}" readonly>

									</div>
									</div>

							
								


								<div class="am-form-group">
									<label class="am-form-label" for="user-birth">生日：</label>
									<div class="am-form-content">
										<input type="text" placeholder="name" id="user-name2"name="birth" value="{{$user['birth']}}" readonly>

									</div>

								</div>
								
								<div class="am-form-group">
									<label class="am-form-label" for="user-email">住址：</label>
									<div class="am-form-content">

										<input type="text" placeholder="name" id="user-name2"name="area" value="{{$user['area']}}" readonly>


									</div>			

								</div>
							
								<div class="am-form-group">
									<label class="am-form-label" for="user-email">电子邮件：</label>
									<div class="am-form-content">
										<input type="text" placeholder="name" id="user-name2"name="email" value="{{$user['email']}}" readonly>

									</div>					


								</div>


								<div class="am-form-group">
									<label class="am-form-label" for="user-email">QQ：</label>
									<div class="am-form-content">
										<input type="text" placeholder="name" id="user-name2"name="qq" value="{{$user['qq']}}" readonly>

									</div>					


								</div>


						</div>
							
								<div class="info-btn">
									<div class="am-btn am-btn-danger"><a href="/home/seller/info/{{$user['id']}}/edit">修改</a></div>
								</div>



								</div>

						

@endsection