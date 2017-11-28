<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>订单支付</title>
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
		.center_b{width: 960px;height: 196px;border-top: 3px solid #B3B3B3;border-bottom: 3px solid #B3B3B3;background: #fff;}
		.center_b_one{width: 910px;height: 55px;border: 4px solid #85A1D4;margin: 0 auto;margin-top: 20px;}
		.cards{width: 265px;height: 30px;margin: 11px 0 0 10px;float: left;}
		.p_e{float: left;height: 55px;line-height: 55px;font-size: 17px;letter-spacing: 1px;font-family: "微软雅黑";margin: 0 0 0 20px;}
		.p_f{float: left;height: 55px;line-height: 55px;font-size: 14px;font-family: "微软雅黑";margin: 0 0 0 5px;}
		.p_g{float: left;height: 55px;line-height: 55px;font-size: 18px;font-weight: bold;color: #FF8208;font-family: "微软雅黑";margin: 0 0 0 5px;}
		.center_b_one_right{float: left;height: 55px;margin: 0 0 0 430px;}
		.center_b_two{width: 150px;border: 1px dashed #ddd;height: 35px;margin: 15px 0 0 20px;line-height: 35px;font-size: 14px;color: #00AAEE;font-family: "微软雅黑";text-align: center;cursor: pointer;}
		.center_b_two:hover{color: #fff;background: #0088CC;border: 1px solid #0088CC; }
		.btn{width: 80px;height: 30px;background: #00AAEE;height: 31px;line-height: 31px;font-size: 15px;color: #fff;font-family: "微软雅黑";text-align: center;cursor: pointer;border-radius: 3px;font-weight: bold;margin: 12px 0 0 20px;}
		.btn:hover{background: #00A3D2;}
		.footer{width: 960px;height: 160px;margin: 0 auto;}
		.footer p{width: 960px;float: left;text-align: center;font-size: 13px;font-family: "微软雅黑";height: 20px;line-height: 20px;margin: 27px 0 0 0;}
		.footer img{margin: 16px 0 0 225px;}
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
					<input type="text" name="cardnum" value="" class="cards"  placeholder="输入银行卡号 快捷完成支付">
					<div class="center_b_one_right">
						<p class="p_f">支付</p>
						<p class="p_g">{{number_format($res->total_price,2)}}</p>
						<p class="p_f">元</p>
					</div>
				</div>
				<div class="center_b_two">
					添加快捷/网银付款
				</div>
				<div class="btn">下一步</div>
			</div>
		</div>
		<div class="footer">
			<p>ICP证：沪B2-20150087</p>
			<img src="/homes/images/zhifu3.png" alt="">
		</div>
	</div>
</body>
</html>