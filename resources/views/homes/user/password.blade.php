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
						<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">修改密码</strong> / <small>Password</small></div>
					</div>
					<hr>
					<!--进度条-->
					<div class="m-progress">
						<div class="m-progress-list">
							<span class="step-1 step">
                                <em class="u-progress-stage-bg"></em>
                                <i class="u-stage-icon-inner">1<em class="bg"></em></i>
                                <p class="stage-name">重置密码</p>
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
                            <div id="e3" style="margin-left: 85px;width: 200px;height: 20px;display: none;color: red;font-size: 13px;font-weight: bold"></div>
                            <a class="btn"  id="sendMobileCode">
                                <div class="am-btn am-btn-danger" >验证码</div>
                            </a>
                        </div>
                        
                      
                        <div class="info-btn">
                            <div class="am-btn am-btn-danger" id="suremodifi">前去修改</div>
                        </div>
                        {{ csrf_field()}}
                    </form>

<script>
	var ch1=100;
    
    var ch3=100;
	$('#sendMobileCode').click(function(){
	        var ph = $('#user-phone').html();
	        // console.log(ph);
	        //发送验证码
	        $.post("/home/co",{'_token':'{{ csrf_token() }}',ph:ph},function(data){
	         if(data=="0"){
	         
	         }
	         console.log(data);
	        })
	    })

    //无验证码变色
    $('input[name="ph-code"]').blur(function(){
        var cos = $('#user-code').val();
        //console.log(cos);
        if(cos==""){
          $('#user-code').css('border','solid 2px red');
          $('#e3').css('display','block');
          $('#e3').html('验证码不能为空');
        }else{
          $('input[name="password"]').css('border','solid 1px green');
          $('#e3').css('display','none');
          ch1 = 100;
        }

        //验证验证码是否正确
    	$.post("/home/cos",{'_token':'{{ csrf_token() }}',cos:cos},function(data){
	         if(data==1){
	             	$('#user-code').css('border','solid 2px green');
	             	ch3 = 100;
	         }else{
		            $('#e3').css('display','block');
	        		$('#e3').html('您输入的验证码不正确呢');
					$('#user-code').css('border','solid 2px red');
			        ch1 = 0;
			        return;
			      }
			  
	    })
    })

    $('#suremodifi').click(function(){
    	//全部符合才可以发送ajax
        if(ch1==100&&ch3==100){
           location.href = ('/home/user/pass/{{$res->id}}/edit');
	    }       
    })
</script>
@endsection

