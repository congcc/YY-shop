@extends('homes.layout.lr')

@section('title','用户注册')
<meta name="_token" content="{{ csrf_token() }}"/>

@section('content')

		<div class="login-boxtitle">
      <a href="home/demo.html"><img alt="" style="width: 150px;height: 60px;" src="/homes/images/logobig.png" /></a>
    </div>
<div class="res-banner" >
  <div class="res-main">
    <div class="login-banner-bg">
      <span></span>
      <img src="/homes/images/big.jpg" /></div>
    <div class="login-box">
      <div class="am-tabs" id="doc-my-tabs">
        <ul class="am-tabs-nav am-nav am-nav-tabs am-nav-justify" style="margin-left: 50px;">
          <li>
            <a href="">手机号注册</a></li>
        </ul>
        <div class="am-tab-panel">
          <form method="post" action="/home/register">
            <div class="user-phone">
              <label for="phone">
                <i class="am-icon-mobile-phone am-icon-md" style="margin-top: 5px;"></i>
              </label>
              <input type="tel" name="phone" id="phone" placeholder="请输入手机号"></div>
              <div id="e1" style="width: 200px;height: 20px;display: none;color: red;font-size: 13px;font-weight: bold"></div>
              <div id="ee" style="width: 200px;height: 20px;"></div>
            <div class="verification">
              <label for="code">
                <i class="am-icon-code-fork" style="margin-top: 12px;"></i>
              </label>
              <input type="tel" name="" id="code" placeholder="请输入验证码">
              
              <a class="btn" href="javascript:void(0);"  id="sendMobileCode">

                <span id="dyMobileButton">获取</span></a>

            </div>
            <div id="e4" style="width: 200px;height: 20px;color: red;font-size: 13px;font-weight: bold"></div>
            <div class="user-pass">
              <label for="password">
                <i class="am-icon-lock" style="margin-top: 12px;"></i>
              </label>
              <input type="password" name="password" id="password" placeholder="设置密码"></div>
              <div id="e2" style="width: 200px;height: 20px;color: red;font-size: 13px;font-weight: bold"></div>
            <div class="user-pass">
              <label for="passwordRepeat">
                <i class="am-icon-lock" style="margin-top: 12px;"></i>
              </label>
              <input type="password" name="passwordRepeat" id="passwordRepeat" placeholder="确认密码"></div>
              <div id="e3" style="width: 200px;height: 20px;display: none;color: red;font-size: 13px;font-weight: bold"></div>
              <div class="login-links" style="clear: both">
           

              {{ csrf_field()}}

              </div>
          <div class="am-cf">
            <input type="submit" name="" id="regi" value="注册" disabled="true" class="am-btn am-btn-primary am-btn-sm am-fl"></div>
          <hr></div>
          </form>
        <script>$(function() {
            $('#doc-my-tabs').tabs();
          })</script>
      </div>
    </div>
  </div>
</div>
<div class="footer ">
  <div class="footer-hd ">
    <p>
      <a href="# ">恒望科技</a>
      <b>|</b>
      <a href="# ">商城首页</a>
      <b>|</b>
      <a href="# ">支付宝</a>
      <b>|</b>
      <a href="# ">物流</a></p>
  </div>
  <div class="footer-bd ">
    <p>
      <a href="# ">关于恒望</a>
      <a href="# ">合作伙伴</a>
      <a href="# ">联系我们</a>
      <a href="# ">网站地图</a>
      <em>© 2015-2025 Hengwang.com 版权所有</em></p>
  </div>
</div>
<script type="text/javascript">
  var ch1;
  var ch2;
  var ch3;
  var ch4;
	$('#dyMobileButton').click(function(){
		var ph = $('#phone').val();
		$.post("/home/co",{'_token':'{{ csrf_token() }}',ph:ph},function(data){
			if(data==1){
        layer.msg('已发送验证码');
			}
		})
	})
	$('#code').blur(function(){
		var cos = $('#code').val();
    ch1 = checkVerifyCode($('#code'),$('#e4'),6);
    if(ch1!=100){
      $('#e4').css('display','block');
      $('#code').css('border','solid 2px red');
      return;
    }else{
      $('#e4').css('display','none');
      ch1 = 100;
    }
		$.post("cos",{'_token':'{{ csrf_token() }}',cos:cos},function(data){
			if(data==1){
				$('#code').css('border','solid 1px green');
        ch1 = 100;
			}else{
        $('#e4').css('display','block');
        $('#e4').html('您输入的验证码不正确呢');
				$('#code').css('border','solid 2px red');
        ch1 = 0;
        return;
			}
		})
  })

	$('#phone').blur(function(){
    var ph  = $(this).val();
    ch2 = checkTel($('#phone'),$('#e1'));
    if(ch2!=100){
      $('#phone').css('border','solid 2px red');
      $('#e1').css('display','block');
      return;
    }else{
      $('#e1').css('display','none');
      ch2 = 100;
    }
    $.post("ph",{'_token':'{{ csrf_token() }}',ph:ph},function(data){
      if(data.length>0){
        $('#phone').css('border','solid 2px red');
        $("#e1").html("该手机号已经被注册了呢");
        $('#e1').css('display','block');
        ch2 = 0;
        return;
      }else{
        $('#phone').css('border','solid 1px green');
        $('#e1').css('display','none');
        ch2 = 100;
      }
    },'json')
	})


	$('input[name="password"]').blur(function(){
    
    ch3 = checkPassword($('#password'),$('#e2'),6);
    if(ch3!=100){
      $('#password').css('border','solid 2px red');
      $('#e2').css('display','block');
    }else{
      $('#password').css('border','solid 1px green');
      $('#e2').css('display','none');
      ch3 = 100;
    }
	})

	$('input[name="passwordRepeat"]').keyup(function(){
    ch4 = checkRelPassword($('#password'),$('#passwordRepeat'),$('#e3'),6);
    if(ch4!=100){
      $('#passwordRepeat').css('border','solid 2px red');
      $('#e3').css('display','block');
    }else{
      $('#passwordRepeat').css('border','solid 1px green');
      $('#e3').css('display','none');
      ch4 = 100;
    }
	})

  $('input[name="password"]').change(function(){
    $(this).keyup(function(){
    ch4 = checkRelPassword($('#password'),$('#passwordRepeat'),$('#e3'),6);
      if(ch4!=100){
        $('#passwordRepeat').css('border','solid 2px red');
        $('#e3').css('display','block');
      }else{
        $('#passwordRepeat').css('border','solid 1px green');
        $('#e3').css('display','none');
        ch4 = 100;
      }
    })
  })
  $(".res-banner").keyup(function(){
    if(ch1!=100||ch2!=100||ch3!=100||ch4!=100){
      $('#regi').attr("disabled", true); 
    }else{
      $('#regi').attr("disabled", false); 
    }
  })
  
  $('#regi').click(function(){
    layer.msg('注册成功');
  })
  

</script>
@endsection