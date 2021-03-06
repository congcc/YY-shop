@extends('homes.layout.userbuy')

@section('title','添加新闻页面')

@section('head')

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/infstyle.css" rel="stylesheet" type="text/css">
		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js" type="text/javascript"></script>

@endsection

@section('content')

@if($result->nickname)
<div class="user-info">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">个人资料</strong> / <small>Personal&nbsp;information</small></div>
						</div>
						<hr>

						<!--头像 -->
						<div class="user-infoPic">

							<div class="filePic">
								<input type="file" class="inputPic" allowexts="gif,jpeg,jpg,png,bmp" accept="image/*">
								<img class="am-circle am-img-thumbnail"  src="{{$result->user_pic}}" alt="">
							</div>

							<p class="am-form-help">头像</p>

							<div class="info-m">
								<div><b>用户名：<i>@if($result->nickname)  {{$result->nickname}}  @else  {{$res->phone}}  @endif</i></b></div>
								<div class="u-level">
									<span class="rank r2">
							             <s class="vip1"></s><a class="classes" href="#">铜牌会员</a>
						            </span>
								</div>
								<div class="u-safety">
									<a href="{{url('home/user/usersafe')}}">
									 账户安全
									<span class="u-profile"><i class="bc_ee0000" style="width: 60px;" width="0">60分</i></span>
									</a>
								</div>
							</div>
						</div>

						<!--个人信息 -->
						<div class="info-main">
							<form class="am-form am-form-horizontal">
							
								<div class="am-form-group">
									<label for="user-name2" class="am-form-label">用户名</label>
									<div class="am-form-content">
										<input type="text" id="user-name2" placeholder="添加用户名" value="{{ $result->nickname }}"	readonly name="">

									</div>
								</div>

								
								<div class="am-form-group">
									<label class="am-form-label">性别</label>
									<div class="am-form-content sex">
										<label class="am-radio-inline">
											<input type="radio" name="radioo" value="2" data-am-ucheck="" class="am-ucheck-radio" 
											@if($result->sex==2)  checked  @else  @endif >
											<span class="am-ucheck-icons">
											<i class="am-icon-unchecked"></i>
											<i class="am-icon-checked"></i></span> 男
										</label>
										<label class="am-radio-inline">
											<input type="radio" name="radioo" value="1" data-am-ucheck="" class="am-ucheck-radio" 
											 @if($result->sex==1) checked @else  @endif >
											<span class="am-ucheck-icons">
											<i class="am-icon-unchecked"></i>
											<i class="am-icon-checked"></i></span> 女
										</label>
										
									</div>
								</div>

								<div class="am-form-group">
									<label for="user-birth" class="am-form-label">生日</label>
									<div class="am-form-content birth">
										<div class="birth-select">
											<select data-am-selected="" style="display: none;">

												@for($i=1980;$i<=2020;$i++)
												<option value="a">{{ $i }}</option>
												@endfor
											</select>
											<em>年</em>
										</div>
										<div class="birth-select2">
											<select data-am-selected="" style="display: none;">
												@for($j=1;$j<=12;$j++)
												<option value="a">{{$j}}</option>
												@endfor
											</select>
											<em>月</em></div>
										<div class="birth-select2">
											<select data-am-selected="" style="display: none;">
												@for($z=1;$z<=31;$z++)
												<option value="a">{{$z}}</option>
												@endfor
											</select>
											<em>日</em></div>
									</div>
							
								</div>
								
								<div class="am-form-group">
									<label for="user-email" class="am-form-label">电子邮件</label>
									<div class="am-form-content">
										<input id="user-email" placeholder="Email" type="email" value="{{ $result->email }}" >

									</div>
								</div>
								<div class="am-form-group address">
									<label for="user-address" class="am-form-label">收货地址</label>
									<div class="am-form-content address">
										<a href="address.html">
											<p class="new-mu_l2cw">
												<span class="province">湖北</span>省
												<span class="city">武汉</span>市
												<span class="dist">洪山</span>区
												<span class="street">雄楚大道666号(中南财经政法大学)</span>
												<span class="am-icon-angle-right"></span>
											</p>
										</a>

									</div>
								</div>
								<div class="am-form-group safety">
									<label for="user-safety" class="am-form-label">账号安全</label>
									<div class="am-form-content safety">
										<a href="safety.html">

											<span class="am-icon-angle-right"></span>

										</a>

									</div>
								</div>
								

							</form>
						</div>

					</div>
@elseif(!$result->nickname)
<div class="user-info">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">个人资料</strong> / <small>Personal&nbsp;information</small></div>
						</div>
						<hr>

						<!--头像 -->
						<div class="user-infoPic">

							<div class="filePic">
								<input type="file" class="inputPic" allowexts="gif,jpeg,jpg,png,bmp" accept="image/*">
								<img class="am-circle am-img-thumbnail"  src="{{$result->user_pic}}" alt="">
							</div>

							<p class="am-form-help">头像</p>

							<div class="info-m">
								<div><b>用户名：<i>@if($result->nickname)  {{$result->nickname}}  @else  {{$res->phone}}  @endif</i></b></div>
								<div class="u-level">
									<span class="rank r2">
							             <s class="vip1"></s><a class="classes" href="#">铜牌会员</a>
						            </span>
								</div>
								<div class="u-safety">
									<a href="{{url('home/user/usersafe')}}">
									 账户安全
									<span class="u-profile"><i class="bc_ee0000" style="width: 60px;" width="0">60分</i></span>
									</a>
								</div>
							</div>
						</div>

						<!--个人信息 -->
						<div class="info-main">
							<form class="am-form am-form-horizontal">
							
								<div class="am-form-group">
									<label for="user-name2" class="am-form-label">用户名</label>
									<div class="am-form-content">
										<input type="text" id="user-name2" placeholder="用户名一经设置不得修改" value=""	 name="">

									</div>
								</div>

								
								<div class="am-form-group">
									<label class="am-form-label">性别</label>
									<div class="am-form-content sex">
										<label class="am-radio-inline">
											<input type="radio" name="radioo" value="2" data-am-ucheck="" class="am-ucheck-radio" >
											
											<span class="am-ucheck-icons">
											<i class="am-icon-unchecked"></i>
											<i class="am-icon-checked"></i></span> 男
										</label>
										<label class="am-radio-inline">
											<input type="radio" name="radioo" value="1" data-am-ucheck="" class="am-ucheck-radio" >
											
											<span class="am-ucheck-icons">
											<i class="am-icon-unchecked"></i>
											<i class="am-icon-checked"></i></span> 女
										</label>
										
									</div>
								</div>

								<div class="am-form-group">
									<label for="user-birth" class="am-form-label">生日</label>
									<div class="am-form-content birth">
										<div class="birth-select">
											<select data-am-selected="" style="display: none;">

												@for($i=1980;$i<=2020;$i++)
												<option value="a">{{ $i }}</option>
												@endfor
											</select>
											<em>年</em>
										</div>
										<div class="birth-select2">
											<select data-am-selected="" style="display: none;">
												@for($j=1;$j<=12;$j++)
												<option value="a">{{$j}}</option>
												@endfor
											</select>
											<em>月</em></div>
										<div class="birth-select2">
											<select data-am-selected="" style="display: none;">
												@for($z=1;$z<=31;$z++)
												<option value="a">{{$z}}</option>
												@endfor
											</select>
											<em>日</em></div>
									</div>
							
								</div>
								
								<div class="am-form-group">
									<label for="user-email" class="am-form-label">电子邮件</label>
									<div class="am-form-content">
										<input id="user-email" placeholder="Email" type="email" value="{{ $result->email }}" >

									</div>
								</div>
								
								
								<div class="info-btn">
									<div class="am-btn am-btn-danger">保存修改</div>
								</div>

							</form>
						</div>

					</div>

@endif

@endsection

