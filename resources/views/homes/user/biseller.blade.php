@extends('homes.layout.userbuy')


@section('head')

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/infstyle.css" rel="stylesheet" type="text/css">
		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js" type="text/javascript"></script>

@endsection

@section('title','申请商家')

@section('content')
<div class="user-info">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">商家注册</strong> / <small>Personal&nbsp;information</small></div>
						</div>
						<hr>
					
						<!--头像 -->
					

						<!--个人信息 -->
						<div class="info-main">
							<form class="am-form am-form-horizontal" action="" method="">


								<div class="am-form-group">
									<label class="am-form-label" for="user-name2">店铺名：</label>
									<div class="am-form-content">
										<input type="text" placeholder="店铺名" id="user-name2"name="sname" value="" >



									</div>

								</div>

							

								<div class="am-form-group">
									<label class="am-form-label">店铺状态：</label>
									<div class="am-form-content">
										<input type="text" placeholder="店铺状态" id="user-name2"name="sauth" value="" >


									</div>

								</div>
									

									<div class="am-form-group">
									<label class="am-form-label" for="user-birth">店铺类别</label>
									<div class="am-form-content birth">                                                                                                                                                                                                                                                                                                                                                                                                                    
										<div class="birth-select">
											<select data-am-selected="" style="display: none;">
												<option value="a">西瓜</option>
												<option value="b">苹果</option>
												<option value="b">橙子</option>
												<option value="b">红提</option>
											</select>
								
										</div>
									
									</div>
							
								</div>


									<div class="refund-tip">

									<label class="am-form-label" for="user-birth">店铺头像：</label>

										<div class="filePic">
											<input type="file" accept="image/*" allowexts="gif,jpeg,jpg,png,bmp" maxsize="5120" max="5" name="file" value="选择图片" class="inputPic">
											<img alt="" src="/homes/images/image.jpg" style="width:60px;height:60px">
										</div>
									</div>
							
								<div style="height:20px;clear:both"></div>
								<div class="am-form-group" style="clear:both;">
									<label class="am-form-label" for="user-email">住址：</label>
									<div class="am-form-content">

										<input type="text" placeholder="住址" id="user-name2"name="saddress" value="" >


									</div>			

								</div>
						


						</div>
							
								<div class="info-btn">

									{{ csrf_field()}}

    								{{method_field('PUT')}}

									<button class="am-btn am-btn-danger">注册</button>
								</div>
						</form>
									</div>




							
@endsection

