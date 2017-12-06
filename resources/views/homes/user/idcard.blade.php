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
							<span class= @if($result->apply==1) "step-1 step" @else  "step-1 step" @endif
										 @if($result->apply==3) "step-1 step" @else  "step-1 step" @endif>
                                <em class="u-progress-stage-bg"></em>
                                <i class="u-stage-icon-inner">1<em class="bg"></em></i>
                                <p class="stage-name">实名认证申请</p>
                            </span>
							<span class= @if($result->apply==2) "step-1 step" @else  "step-2 step" @endif>
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
								@if($result->apply==3)  <span id="user-info">您正在申请中,请耐心等待………………</span>  @endif
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

		$.post("/home/user/card",{'_token':'{{ csrf_token() }}',id:id,name:name,idcard:idcard},function(data){
         	
         	
         	if(data==1){

				layer.open({
		          	   type: 1
		          	  ,icon:2
			          ,offset: 't' //具体配置参考：offset参数项
			          ,content: '<div style="padding: 20px 80px;">申请成功,请耐心等待后台人员审核</div>'
			          ,btn: '关闭'
			          ,btnAlign: 'c' //按钮居中
			          ,shade: 0 //不显示遮罩
			          ,yes: function(){
			            layer.closeAll();
			            location.reload();
			          }
			        });
         	}else{
         		layer.open({
		          	   type: 1
		          	  ,icon:2
			          ,offset: 't' //具体配置参考：offset参数项
			          ,content: '<div style="padding: 20px 80px;">失败,请重试</div>'
			          ,btn: '关闭'
			          ,btnAlign: 'c' //按钮居中
			          ,shade: 0 //不显示遮罩
			          ,yes: function(){
			            layer.closeAll();
			            location.reload();
			          }
			        });
         	}
        },'json');
	}	


	</script>

				
@endsection

