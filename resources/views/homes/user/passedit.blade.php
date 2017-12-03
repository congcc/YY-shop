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
						<div class="am-form-group">
							<label for="user-old-password" class="am-form-label">原密码</label>
							<div class="am-form-content">
								<input type="password" id="user-old-password" placeholder="请输入原登录密码">
							</div>
							<div id="e3" style="margin-left: 85px;width: 200px;height: 20px;display: none;color: red;font-size: 13px;font-weight: bold"></div>
						</div>
						<div class="am-form-group">
							<label for="user-new-password" class="am-form-label">新密码</label>
							<div class="am-form-content">
								<input type="password" id="password" name="password" placeholder="由数字、字母组合">
							</div>
							 <div id="e1" style="margin-left: 85px;width: 200px;height: 20px;display: none;color: red;font-size: 13px;font-weight: bold"></div>
						</div>
						<div class="am-form-group">
							<label for="user-confirm-password" class="am-form-label">确认密码</label>
							<div class="am-form-content">
								<input type="password" id="passwordRepeat"  name="passwordRepeat" placeholder="请再次输入上面的密码">
							</div>
							 <div id="e2" style="margin-left: 85px;width: 200px;height: 20px;display: none;color: red;font-size: 13px;font-weight: bold"></div>
						</div>
						<div class="info-btn">
							<div class="am-btn am-btn-danger" id="suremodifi">保存修改</div>
						</div>
						{{ csrf_field()}}
						{{ method_field('PUT')}}

					</form>

<script>
var ch1;
var ch2;
var ch3;
 //密码码变色
    $('#user-old-password').blur(function(){
        var password = $('#user-old-password').val();
        if(password==""){
          $('#user-old-password').css('border','solid 1px red');
          $('#e3').css('display','block');
          $('#e3').html('原密码不能为空');
        }else{
          $('input[name="password"]').css('border','solid 1px green');
          $('#e3').css('display','none');
        }

        //验证密码是否正确
    	$.post("/home/user/pass",{'_token':'{{ csrf_token() }}',password:password,id:{{$res->id}}},function(data){
	         if(data==1){
	             	$('#user-old-password').css('border','solid 1px green');
          			$('#e3').css('display','none');
	             	ch1 = 100;
	         }else{
		            $('#e3').css('display','block');
	        		$('#e3').html('您输入的密码不正确呢');
					$('#user-old-password').css('border','solid 1px red');
			        ch1 = 0;
			        return;
			      }
	    })
    })

//新密码
	$('input[name="password"]').blur(function(){
		
    ch3 = checkPassword($('#password'),$('#e1'),6);
    if(ch3!=100){
      $('#password').css('border','solid 2px red');
      $('#e1').css('display','block');
    }else{
      $('#password').css('border','solid 1px green');
      $('#e1').css('display','none');
      ch3 = 100;
    }
	})

	$('input[name="passwordRepeat"]').keyup(function(){
    ch2 = checkRelPassword($('#password'),$('#passwordRepeat'),$('#e2'),6);
    if(ch2!=100){
      $('#passwordRepeat').css('border','solid 2px red');
      $('#e2').css('display','block');
    }else{
      $('#passwordRepeat').css('border','solid 1px green');
      $('#e2').css('display','none');
      ch2 = 100;
    }
	})

	$('input[name="password"]').change(function(){
    $(this).keyup(function(){
    ch2 = checkRelPassword($('#password'),$('#passwordRepeat'),$('#e2'),6);
      if(ch2!=100){
        $('#passwordRepeat').css('border','solid 2px red');
        $('#e2').css('display','block');
      }else{
        $('#passwordRepeat').css('border','solid 1px green');
        $('#e2').css('display','none');
        ch2 = 100;
      }
    })
  })

//修改密码
	$('#suremodifi').click(function(){
    	//全部符合才可以发送ajax
        if(ch1==100&&ch2==100&&ch3==100){
            var password =  $('#password').val(); 
            console.log(password);
	        $.post('/home/user/passedit',{'_token':'{{ csrf_token() }}',password:password,id:{{$res->id}}},function(data){
	        	// console.log(data);
	            if (data) {
	                layer.open({
		          	   type: 1
			          ,offset: 't' //具体配置参考：offset参数项
			          ,content: '<div style="padding: 20px 80px;">密码修改成功,请重新登录</div>'
			          ,btn: '关闭'
			          ,btnAlign: 'c' //按钮居中
			          ,shade: 0 //不显示遮罩
			          ,yes: function(){
			            layer.closeAll();
			            location.href = ('/home/login');
			          }
			        });
	            }else {
	                layer.open({
		          	   type: 1
			          ,offset: 't' //具体配置参考：offset参数项
			          ,content: '<div style="padding: 20px 80px;">密码修改失败,请重试</div>'
			          ,btn: '关闭'
			          ,btnAlign: 'c' //按钮居中
			          ,shade: 0 //不显示遮罩
			          ,yes: function(){
			            layer.closeAll();
			          }
			        });
	            }
	        },);

            
        }

        
        
    })
</script>
@endsection

