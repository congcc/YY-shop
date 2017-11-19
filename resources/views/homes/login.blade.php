@extends('homes.layout.homes')

@section('title','欢迎登陆月半零食铺')
@section('head')
	<meta name="_token" content="{{ csrf_token() }}"/>
	<script src="/homes/layer/layer.js"></script>

@endsection

@section('content')
	<div class="login-boxtitle">
		<a href="/homes/home.html"><img alt="logo" style="height: 60px;width: 140px;" src="/homes/images/logobig.png" /></a>
	</div>

	<div class="login-banner">
		<div class="login-main">
			<div class="login-banner-bg"><span></span><img src="/homes/images/big.jpg" /></div>
			<div class="login-box">

						<h3 class="title">登录商城</h3>

						<div class="clear"></div>
					
					<div class="login-form">
					  
			<form action='/home/login' method='post'>
						   <div class="user-name">
							    <label for="user"><i class="am-icon-user"></i></label>
							    <input type="text" name="uname" id="iuser" placeholder="邮箱/手机/用户名">
             </div>
             <div class="user-pass">
							    <label for="password"><i class="am-icon-lock"></i></label>
							    <input type="password" name="password" id="password" placeholder="请输入密码">
             </div>
             					
             {{ csrf_field()}}

          </form>
       </div>
        
        <div class="login-links">
            <label for="remember-me"><input id="remember-me" type="checkbox">记住密码</label>
							<a href="/homes/#" class="am-fr">忘记密码</a>
							<a href="/home/register" class="zcnext am-fr am-btn-default">注册</a>
							<div class="am-cf"><input type="submit" name="" id="ulog" value="登 录" class="am-btn am-btn-primary am-btn-sm">
							</div>
							<br />
        </div>
							
					<div class="partner">		
							<h3>合作账号</h3>
						<div class="am-btn-group">
							<li><a href="/homes/#"><i class="am-icon-qq am-icon-sm"></i><span>QQ登录</span></a></li>
							<li><a href="/homes/#"><i class="am-icon-weibo am-icon-sm"></i><span>微博登录</span> </a></li>
							<li><a href="/homes/#"><i class="am-icon-weixin am-icon-sm"></i><span>微信登录</span> </a></li>
						</div>
					</div>	

			</div>
		</div>
	</div>


				<div class="footer ">
					<div class="footer-hd ">
						<p>
							<a href="/homes/# ">恒望科技</a>
							<b>|</b>
							<a href="/homes/# ">商城首页</a>
							<b>|</b>
							<a href="/homes/# ">支付宝</a>
							<b>|</b>
							<a href="/homes/# ">物流</a>
						</p>
					</div>
					<div class="footer-bd ">
						<p>
							<a href="/homes/# ">关于恒望</a>
							<a href="/homes/# ">合作伙伴</a>
							<a href="/homes/# ">联系我们</a>
							<a href="/homes/# ">网站地图</a>
							<em>© 2015-2025 Hengwang.com 版权所有</em>
						</p>
					</div>
				</div>

	<script>
	$('#ulog').click(function(){
		var uname = $('#iuser').val();
	 	var password = $('#password').val();
	 	$.post('/home/slogin',{'_token':'{{ csrf_token() }}',uname:uname,password:password},function(data){
	 		// console.log(data);
			
			if (data) {
				alert('登录成功！');
				// layer.load();
				window.location.href = "/home/index";  

			}else {
				alert ('账户或密码错误');
			}
	 	});
	 	return false;
	 });
	</script>

@endsection