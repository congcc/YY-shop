@extends('homes.layout.homes')

@section('title','用户注册')

@section('content')

		<div class="login-boxtitle">
  <a href="home/demo.html">
    <img alt="" style="width: 130px;height: 60px;" src="/homes/images/logobig.png" /></a>
</div>
<div class="res-banner">
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
                <i class="am-icon-mobile-phone am-icon-md"></i>
              </label>
              <input type="tel" name="phone" id="phone" placeholder="请输入手机号"></div>
              <div id="e1" style="width: 200px;height: 20px;border: 1px black solid;color: red;font-size: 13px;font-weight: bold"></div>
            <div class="verification">
              <label for="code">
                <i class="am-icon-code-fork"></i>
              </label>
              <input type="tel" name="" id="code" placeholder="请输入验证码">
              <a class="btn" href="javascript:void(0);" onClick="sendMobileCode();" id="sendMobileCode">
                <span id="dyMobileButton">获取</span></a>
            </div>
            <div class="user-pass">
              <label for="password">
                <i class="am-icon-lock"></i>
              </label>
              <input type="password" name="password" id="password" placeholder="设置密码"></div>
              <div id="e2" style="width: 200px;height: 20px;border: 1px black solid;color: red;font-size: 13px;font-weight: bold"></div>
            <div class="user-pass">
              <label for="passwordRepeat">
                <i class="am-icon-lock"></i>
              </label>
              <input type="password" name="passwordRepeat" id="passwordRepeat" placeholder="确认密码"></div>
              <div id="e3" style="width: 200px;height: 20px;display: none;color: red;font-size: 13px;font-weight: bold"></div>

              <div class="login-links" style="clear: both">
           

              {{ csrf_field()}}

              </div>
          <div class="am-cf">
            <input type="submit" name="" id="regi" value="注册" class="am-btn am-btn-primary am-btn-sm am-fl"></div>
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
	$('#dyMobileButton').click(function(){
		var ph = $('#phone').val();
		$.get("co",{ph:ph},function(data){
			if(data=="0"){
			}
		})
	})
	$('#code').blur(function(){
		var cos = $('#code').val();
    if(cos==""){
      $('#code').css('border','solid 2px red');
      return;
    }
		$.get("cos",{cos:cos},function(data){
			if(data==1){
				$('#code').css('border','solid 2px green');
			}else{
				$('#code').css('border','solid 2px red');
			}
		})
	})
	$('#phone').blur(function(){
    /*var phs = document.getElementById('phone');
    var e = document.getElementById('e');
		
		var req = /^1[345678]\d{9}$/;
		var res = req.exec(ph);*/
    var ph  = $(this).val();
    
    checkTel($('#phone'),$('#e'));
    $.get("ph",{ph:ph},function(data){
      if(data==1){
        $('#phone').css('border','solid 2px red');
        return;
      }
    })
		/*if(res){
			$(this).css('border','solid 2px green');
		}else{
			$(this).css('border','solid 2px red');
		}*/
	})


	$('input[name="password"]').blur(function(){
		/*var pass  = $(this).val();
		var req = /^\S{6,16}$/;
		var res = req.exec(pass);
		if(res){
			$(this).css('border','solid 2px green');
		}else{
			$(this).css('border','solid 2px red');
		}*/
    checkPassword($('#password'),$('#e2'),6);
	})

	$('input[name="passwordRepeat"]').blur(function(){
		/*var Repeat  = $(this).val();
		var	pass = $('input[name="password"]').val();*/
		
		/*if(Repeat==pass){
			$(this).css('border','solid 2px green');
		}else{
			$(this).css('border','solid 2px red');
		}*/
    checkRelPassword($('#password'),$('#passwordRepeat'),$('#e3'),6);

	})
</script>
@endsection