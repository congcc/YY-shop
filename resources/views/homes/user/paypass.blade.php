@extends('homes.layout.userbuy')

@section('title','添加新闻页面')

@section('head')
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">

		<title>支付密码</title>

		<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/stepstyle.css" rel="stylesheet" type="text/css">

		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
@endsection

@section('content')

					<div class="am-cf am-padding">
						<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">支付密码</strong> / <small>Set&nbsp;Pay&nbsp;Password</small></div>
					</div>
					<hr>
					<!--进度条-->
					<div class="m-progress">
						<div class="m-progress-list">
							<span class="step-1 step">
                                <em class="u-progress-stage-bg"></em>
                                <i class="u-stage-icon-inner">1<em class="bg"></em></i>
                                <p class="stage-name">设置支付密码</p>
                            </span>
							<span class="step-2 step">
                                <em class="u-progress-stage-bg"></em>
                                <i class="u-stage-icon-inner">2<em class="bg"></em></i>
                                <p class="stage-name">完成</p>
                            </span>
							<span class="u-progress-placeholder"></span>
						</div>
						<div class="u-progress-bar total-steps-2">
							<div class="u-progress-bar-inner"></div>
						</div>
					</div>
					<form class="am-form am-form-horizontal">
						<div class="am-form-group bind">
							<label for="user-phone" class="am-form-label">验证手机</label>
							<div class="am-form-content">
								<span id="user-phone">{{$res->phone}}</span>
							</div>
						</div>
						<div class="am-form-group code">
							<label for="user-code" class="am-form-label">验证码</label>
							<div class="am-form-content" id="gaocong">
								<input type="tel" id="user-code" name="ph-code" placeholder="短信验证码">
							</div>
							<a class="btn"  id="sendMobileCode">
								<div class="am-btn am-btn-danger" >验证码</div>
							</a>
						</div>
						<div class="am-form-group">
							<label for="user-password" class="am-form-label">支付密码</label>
							<div class="am-form-content">
								<input type="password" id="user-password" name="password" placeholder="6位数字">
							</div>
							
						</div>
						<div class="am-form-group">
							<label for="user-confirm-password" class="am-form-label">确认密码</label>
							<div class="am-form-content">
								<input type="password" id="user-confirm-password"  name="passwordRepeat"  placeholder="请再次输入上面的密码">
							</div>
							
						</div>
						<div class="info-btn">
							<div class="am-btn am-btn-danger" id="suremodifi">保存修改</div>
						</div>

					</form>


@endsection


@section('js')
<script>
	$('#sendMobileCode').click(function(){
		var ph = $('#user-phone').html();
		console.log(ph);
		//发送验证码
		// $.post("co",{ph:ph},function(data){
		// 	if(data=="0"){
		// 	}
		// 	console.log(data);
		// })
	})
	//无验证码变色
	$('input[name="ph-code"]').blur(function(){
		var cos = $('#user-code').val();
	    if(cos==""){
	      $('#user-code').css('border','solid 2px red');
	      
		}
	})
	//验证验证码是否正确
	// $.get("cos",{cos:cos},function(data){
	// 		if(data==1){
	// 			$('#code').css('border','solid 2px green');
	// 		}else{
	// 			$('#code').css('border','solid 2px red');
	// 		}
	// 	})

	//验证密码格式
	$('input[name="password"]').blur(function(){

		checkPassword($('input[name="password"]'),$('#e2'),6);
	})

	//验证两次密码是否一致
	$('input[name="passwordRepeat"]').blur(function(){
		 checkRelPassword($('#input[name="password"]'),$('input[name="passwordRepeat"]'),$('#e3'),6);
	})

	$('#suremodifi').click(function(){
		
	})
	
</script>
@endsection
