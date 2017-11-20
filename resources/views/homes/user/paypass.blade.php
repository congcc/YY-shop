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
                            <div id="e3" style="margin-left: 85px;width: 200px;height: 20px;display: none;color: red;font-size: 13px;font-weight: bold"></div>
                            <a class="btn"  id="sendMobileCode">
                                <div class="am-btn am-btn-danger" >验证码</div>
                            </a>
                        </div>
                        
                        <div class="am-form-group">
                            <label for="user-password" class="am-form-label">支付密码</label>
                            <div class="am-form-content">
                                <input type="password" id="user-password" name="password" placeholder="6位数字">
                            </div>
                            <div id="e1" style="margin-left: 85px;width: 200px;height: 20px;display: none;color: red;font-size: 13px;font-weight: bold"></div>
                            
                        </div>
                        <div class="am-form-group">
                            <label for="user-confirm-password" class="am-form-label">确认密码</label>
                            <div class="am-form-content">
                                <input type="password" id="user-confirm-password"  name="passwordRepeat"  placeholder="请再次输入上面的密码">
                            </div>
                            <div id="e2" style="margin-left: 85px;width: 200px;height: 20px;display: none;color: red;font-size: 13px;font-weight: bold"></div>
                            
                        </div>
                        <div class="info-btn">
                            <div class="am-btn am-btn-danger" id="suremodifi">保存修改</div>
                        </div>
                        {{ csrf_field()}}
						{{ method_field('PUT')}}
                    </form>


@endsection


@section('js')
<script>
    var ch1;
    var ch2;
    var ch3;
    $('#sendMobileCode').click(function(){
        var ph = $('#user-phone').html();
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
        if(cos==""){
          $('#user-code').css('border','solid 2px red');
          $('#e3').css('display','block');
          $('#e3').html('验证码不能为空');
        }else{
          $('input[name="password"]').css('border','solid 1px green');
          $('#e3').css('display','none');
          ch3 = 100;
        }

        //验证验证码是否正确
    	$.post("/home/cos",{'_token':'{{ csrf_token() }}',cos:cos},function(data){
	         if(data==1){
	             	$('#user-code').css('border','solid 2px green');
	         }else{
		            $('#e3').css('display','block');
	        		$('#e3').html('您输入的验证码不正确呢');
					$('#user-code').css('border','solid 2px red');
			        ch1 = 0;
			        return;
			      }
	    })
    })
    

    //验证密码格式
    $('input[name="password"]').blur(function(){

        ch1 = checkPassword($('input[name="password"]'),$('#e1'),6);
        if(ch1!=100){
          $('input[name="password"]').css('border','solid 2px red');
          $('#e1').css('display','block');
        }else{
          $('input[name="password"]').css('border','solid 1px green');
          $('#e1').css('display','none');
          ch1 = 100;
        }
    })

    //验证两次密码是否一致
    $('input[name="passwordRepeat"]').blur(function(){
         ch2 = checkRelPassword($('input[name="password"]'),$('input[name="passwordRepeat"]'),$('#e2'),6);
         if(ch2!=100){
          $('input[name="passwordRepeat"]').css('border','solid 2px red');
          $('#e2').css('display','block');
        }else{
          $('input[name="passwordRepeat"]').css('border','solid 1px green');
          $('#e2').css('display','none');
          ch2 = 100;
        }
    })

    $('#suremodifi').click(function(){
    	//全部符合才可以发送ajax
        if(ch1==100&&ch2==100&&ch3==100){
            var password =  $('input[name="password"]').val(); 
	        $.post('/home/user/ajaxpaypass',{'_token':'{{ csrf_token() }}',password:password,id:{{$res->id}}},function(data){
	            
	            
	            if (data) {
	                layer.open({
		          	   type: 1
			          ,offset: 't' //具体配置参考：offset参数项
			          ,content: '<div style="padding: 20px 80px;">密码修改成功</div>'
			          ,btn: '关闭'
			          ,btnAlign: 'c' //按钮居中
			          ,shade: 0 //不显示遮罩
			          ,yes: function(){
			            layer.closeAll();
			          }
			        });
	            }else {
	                layer.open({
		          	   type: 1
			          ,offset: 't' //具体配置参考：offset参数项
			          ,content: '<div style="padding: 20px 80px;">密码修改失败</div>'
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