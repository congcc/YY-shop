<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>订单支付</title>
	<script type="text/javascript" src="/homes/js/jquery-1.7.2.min.js"></script>
	<script src="/homes/layer/layer.js"></script>
	<style>
		*{margin: 0;padding: 0;}
		body{background: #EFF0F1;}
		.top{height: 55px;width: 100%;background-color: #fff;border: 1px solid #ddd;}
		.Navigation{height: 55px;width: 960px;margin: 0 auto;}
		.Navigation img{margin: 12px 0 0 3px;width: 95px;height: 32px;float: left;}
		.Navigation .p_a{float: left;font-size: 19px;font-family: "微软雅黑";height: 30px;line-height: 30px;width: 120px;border-left: 1px solid #000;text-align: center;margin: 13px 0 0 13px;}
		.Navigation .p_b{float: left;font-size: 13px;font-family: "微软雅黑";height: 30px;line-height: 30px;width: 300px;text-align: center;margin: 13px 0 0 425px;}
		.center{height: 340px;width: 960px;margin: 0 auto;}
		.center_a{width: 960px;height: 135px;}
		.center_a img{margin: 17px 0 0 2px;float: left;}
		.center_a_one{float: left;width: 450px;height: 65px;margin: 35px 0 0 15px;}
		.center_a_one p{font-size: 14px;font-family: "微软雅黑";height: 30px;line-height: 30px;text-align: left;}
		.center_a_two{float: left;width: 100px;height: 65px;margin: 35px 0 0 270px;}
		.p_c{float: left;height: 65px;line-height: 65px;font-size: 23px;font-weight: bold;color: #FF8208;font-family: "微软雅黑";}
		.p_d{float: left;height: 65px;line-height: 65px;font-size: 14px;font-family: "微软雅黑";margin: 0 0 0 5px;}
		.center_b{width: 960px;padding-bottom: 80px;border-top: 3px solid #B3B3B3;border-bottom: 3px solid #B3B3B3;background: #fff;}
		.center_b_one{width: 910px;height: 55px;border: 4px solid #85A1D4;margin: 0 auto;margin-top: 20px;position: relative;}
		.cards{width: 265px;height: 30px;margin: 11px 0 0 10px;float: left;}
		.p_e{float: left;height: 55px;line-height: 55px;font-size: 17px;letter-spacing: 1px;font-family: "微软雅黑";margin: 0 0 0 20px;}
		.p_f{float: left;height: 55px;line-height: 55px;font-size: 14px;font-family: "微软雅黑";margin: 0 0 0 5px;}
		.p_g{float: left;height: 55px;line-height: 55px;font-size: 18px;font-weight: bold;color: #FF8208;font-family: "微软雅黑";margin: 0 0 0 5px;}
		.center_b_one_right{float: left;height: 55px;margin: 0 0 0 430px;}
		.center_b_two{width: 150px;border: 1px dashed #ddd;height: 35px;margin: 15px 0 0 20px;line-height: 35px;font-size: 14px;color: #00AAEE;font-family: "微软雅黑";text-align: center;cursor: pointer;}
		.center_b_two:hover{color: #fff;background: #0088CC;border: 1px solid #0088CC; }
		.btn{width: 80px;height: 30px;background: #00AAEE;height: 31px;line-height: 31px;font-size: 15px;color: #fff;font-family: "微软雅黑";text-align: center;cursor: pointer;border-radius: 3px;font-weight: bold;margin: 12px 0 0 20px;}
		.btn:hover{background: #00A3D2;}
		.footer{width: 960px;height: 160px;margin: 0 auto;margin-top: 80px;}
		.footer p{width: 960px;float: left;text-align: center;font-size: 13px;font-family: "微软雅黑";height: 20px;line-height: 20px;margin: 27px 0 0 0;}
		.footer img{margin: 16px 0 0 225px;}
		.pass{width: 350px;height: 50px;border: 1px solid black;margin: 10px 0 0 20px;}

		.alieditContainer{position:relative;}
		.alieditContainer .i-text{position: absolute;color: #fff;opacity:0.2; width:306px; height:48px; font-size:12px; left:0; -webkit-user-select:initial;  /*取消禁用选择页面元素*/z-index:9;	padding:0;	borde:0;}
		.alieditContainer .sixDigitPassword {width:306px; height:22px; cursor:text; background:#fff; outline:none; position:relative; padding:13px 0; border:1px solid #ddd; border-radius:5px;}
		.alieditContainer .sixDigitPassword i {width:50px; height:16px; float:left; display:block; padding:4px 0; border-left:1px solid #cccccc;}
		.alieditContainer .sixDigitPassword i:first-child{border-left:0;}
		.alieditContainer .sixDigitPassword i.active{background-image: url("https://t.alipayobjects.com/images/rmsweb/T1nYJhXalXXXXXXXXX.gif");background-repeat: no-repeat;background-position: center center; }
		.alieditContainer .sixDigitPassword b{display:block; margin:5px auto 4px auto; width:7px; height:7px; overflow:hidden; display:none;/*visibility:hidden;*/ background:#000; border-radius:100%;}
		.alieditContainer .sixDigitPassword .guangbiao{width:50px; height:48px; position:absolute; display:block; left:0px; top:-1px; border:1px solid rgba(82, 168, 236, .8); border:1px solid #00ffff\9; border-radius:5px; visibility:visible; -webkit-box-shadow: inset 0px 2px 2px rgba(0, 0, 0, 0.75), 0 0 8px rgba(82, 168, 236, 0.6); box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);}
	</style>
</head>
<body>
	<div class="total">
		<div class="top">
			<div class="Navigation">
				<img src="/homes/images/zhifu1.png" alt="" >
				<p class="p_a">我的收银台</p>
				<p class="p_b">支付宝账户：{{$phone}}&nbsp;&nbsp;&nbsp;唯一热线：95188</p>
			</div>
		</div>
		<div class="center">
			<div class="center_a">
				<img src="/homes/images/zhifu2.png" alt="">
				<div class="center_a_one">
					<p>{{$gname}}</p>
					<p>卖家昵称：{{$sname}}</p>
				</div>
				<div class="center_a_two">
					<p class="p_c">{{number_format($res->total_price,2)}}</p>
					<p class="p_d">元</p>
				</div>
			</div>
			<div class="center_b">
				<div class="center_b_one">
					<p class="p_e">卡号：</p>
					<input type="text" name="cardnum" value="" class="cards"  placeholder="输入银行卡号 快捷完成支付" onkeyup="this.value=this.value.replace(/\D/g,'').replace(/....(?!$)/g,'$& ')">
					<p class="e1" style="height: 65px;line-height: 65px;font-size: 13px;width: 130px;position: absolute;left: 360px;top: -3px;color: red;font-weight: bold;display: none;">银行卡号格式不正确</p>
					<div class="center_b_one_right">
						<p class="p_f">支付</p>
						<p class="p_g">{{number_format($res->total_price,2)}}</p>
						<p class="p_f">元</p>
					</div>
				</div>
				

				<div class="alieditContainer" id="payPassword_container" style="margin: 15px 0 0 20px;display: none;">
			    	<input minlength="6" maxlength="6" tabindex="1" id="payPassword_rsainput" name="payPassword_rsainput" class="ui-input i-text" oncontextmenu="return false" onpaste="return false" oncopy="return false" oncut="return false" autocomplete="off" value="" type="password">
				    <div class="sixDigitPassword" tabindex="0">
				        <i class="active"><b></b></i>
				        <i><b></b></i>
				        <i><b></b></i>
				        <i><b></b></i>
				        <i><b></b></i>
				        <i><b></b></i>
				        <span class="guangbiao" style="left:0px;"></span>
				    </div>
				</div>
				
				<div class="center_b_two">
					添加快捷/网银付款
				</div>
				<div class="btn" style="float: left;">下一步</div>
				<div class="btn sub" style="float: left;display: none;">确定</div>
			</div>
		</div>
		<div class="footer">
			<p>ICP证：沪B2-20150087</p>
			<img src="/homes/images/zhifu3.png" alt="">
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".i-text").keyup(function()
			{
				var inp_v = $(this).val();
				var inp_l = inp_v.length;
				//$("p").html( "input的值为：" + inp_v +"; " + "值的长度为:" + inp_l);//测试用
				
				for( var x = 0; x<=6; x++)
				{
					
					
					$(".sixDigitPassword").find("i").eq( inp_l ).addClass("active").siblings("i").removeClass("active");
					$(".sixDigitPassword").find("i").eq( inp_l ).prevAll("i").find("b").css({"display":"block"});
					$(".sixDigitPassword").find("i").eq( inp_l - 1 ).nextAll("i").find("b").css({"display":"none"});
					
					$(".guangbiao").css({"left":inp_l * 51});//光标位置
					
					if( inp_l == 0)
					{
						$(".sixDigitPassword").find("i").eq( 0 ).addClass("active").siblings("i").removeClass("active");
						$(".sixDigitPassword").find("b").css({"display":"none"});
						$(".guangbiao").css({"left":0});
					}
					else if( inp_l == 6)
					{
						$(".sixDigitPassword").find("b").css({"display":"block"});
						$(".sixDigitPassword").find("i").eq(5).addClass("active").siblings("i").removeClass("active");
						$(".guangbiao").css({"left":5 * 51});
					}
					
					
				}
			});
		})
		
		$('.btn').click(function(){
			var cardcode = $('.cards').val();
			var ma = /^([1-9]{1})(\d{3})(\s)(\d{4})(\s)(\d{4})(\s)(\d{3}|\d{4}\s{1}\d{3})$/;
			var re = ma.exec(cardcode);
			if(re){
				$('.e1').css("display","none");
				$('.cards').css("border","1px solid green");
				$('.alieditContainer').css('display','block');
				$('#payPassword_rsainput').focus();
				$('.sub').css('display','block');
			}else{
				$('.cards').css("border","2px solid red");
				$('.e1').css("display","block");
			}
		})
		$('.sub').click(function(){
			var code = {{$code}};
			$.get("/home/user/orderpays",{code:code},function(data){
				console.log(data);
			})
			layer.msg('付款成功');
			location.href = '/home/user/userorder';
		})
	</script>

</body>
</html>