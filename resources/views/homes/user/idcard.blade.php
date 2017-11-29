@extends('homes.layout.userbuy')

@section('title','添加新闻页面')

@section('head')

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">

		<title>修改密码</title>

		<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/stepstyle.css" rel="stylesheet" type="text/css">

		<script type="text/javascript" src="/homes/js/jquery-1.7.2.min.js"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js"></script>

@endsection

@section('content')

					<div class="am-cf am-padding">
						<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">实名认证</strong> / <small>Real&nbsp;authentication</small></div>
					</div>
					<hr>
					<!--进度条-->
					<div class="m-progress">
						<div class="m-progress-list">
							<span class= @if($result->apply==1) "step-1 step" @else  "step-2 step" @endif>
                                <em class="u-progress-stage-bg"></em>
                                <i class="u-stage-icon-inner">1<em class="bg"></em></i>
                                <p class="stage-name">实名认证申请</p>
                            </span>
							<span class= @if($result->apply==1) "step-2 step" @else  "step-1 step" @endif>
                                <em class="u-progress-stage-bg"></em>
                                <i class="u-stage-icon-inner">2<em class="bg"></em></i>
                                <p class="stage-name">您已通过</p>
                            </span>
							<span class="u-progress-placeholder"></span>
						</div>
						<div class="u-progress-bar total-steps-2">
							<div class="u-progress-bar-inner"></div>
						</div>
					</div>
					<form class="am-form am-form-horizontal">
						<div class="am-form-group bind">
							<label for="user-info" class="am-form-label">账户名</label>
							<div class="am-form-content">
								<span id="user-info">{{$res->phone}}</span>
							</div>
						</div>
						<div class="am-form-group">
							<label for="user-name" class="am-form-label">真实姓名</label>
							<div class="am-form-content">
								<input type="text" id="user-name" placeholder="请输入您的真实姓名" 
								@if($result->apply==2)   value= "{{$result->truename}}"  readonly 
								@elseif($result->apply==3)   value= "{{$result->truename}}"  readonly
								@endif >
							</div>
						</div>
						<div class="am-form-group">
							<label for="user-IDcard" class="am-form-label">身份证号</label>
							<div class="am-form-content">
								<input type="tel" id="user-IDcard" placeholder="请输入您的身份证信息"
								@if($result->apply==2)   value= "{{$result->idcard}}"  readonly  
								@elseif($result->apply==3)   value= "{{$result->idcard}}"  readonly  
								@endif >
							</div>
						</div>
						@if($result->apply==1)       				
						<div class="info-btn">
							<div class="am-btn am-btn-danger" onclick="idcard({{$res->id}})">提交申请</div>
						</div>
						@endif
					</form>
	<script>
	function  idcard (id){
		var name = $('#user-name').val();
         var idcard = $('#user-IDcard').val();
		$.get("/home/user/card",{id:id,name:name,idcard:idcard},function(data){
         	
         	console.log(id);
         	console.log(name);
         	console.log(idcard);
         	if(data==1){
         		layer.alert('申请成功,工作人员会在2小时内审核完毕', {
				  icon: 1,
				  skin: 'layer-ext-moon' 
				})
				
         	}else{
         		layer.alert('失败,请重试', {
				  icon: 2,
				  skin: 'layer-ext-moon' 
         		})
         	}
        },'json');
	}	


	</script>

				
@endsection

