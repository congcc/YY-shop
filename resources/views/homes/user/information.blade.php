@extends('homes.layout.userbuy')

@section('title','添加新闻页面')

@section('head')

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/infstyle.css" rel="stylesheet" type="text/css">
		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js" type="text/javascript"></script>
		<!-- <meta name="_token" content="{{ csrf_token() }}"/> -->
		<meta name="csrf-token" content="{{ csrf_token() }}">


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
						<form id="art_form">
							<div class="filePic">
								<input type="file" class="inputPic" allowexts="gif,jpeg,jpg,png,bmp" accept="image/*" name="userpic"  id="file_upload">
								<img class="am-circle am-img-thumbnail" id="img1" src="http://ozsps8743.bkt.clouddn.com/img/image_{{$result->user_pic}}" alt="">
							</div>
						</form>
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
											<select data-am-selected="" id="select1"  style="display: none;">
 
												<option value="a" selected >{{substr($result->birth,0,4)}}</option>
											</select>
											<em>年</em>
										</div>
										<div class="birth-select2">
											<select data-am-selected="" id="select2" style="display: none;">
												<option value="a" selected>{{substr($result->birth,4,2)}}</option>
											</select>
											<em>月</em></div>
										<div class="birth-select2">
											<select data-am-selected="" id="select3" style="display: none;">
												<option value="a" selected >{{substr($result->birth,6,2)}}</option>
											</select>
											<em>日</em></div>
									</div>
							
								</div>
								
								<div class="am-form-group">
									<label for="user-email" class="am-form-label">qq</label>
									<div class="am-form-content">
										<input id="qq" placeholder="qq号码" type="text" value="{{ $result->qq }}" >

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

<script>
$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
                            $(function () {
                                $("#file_upload").change(function (){ 
                                    uploadImage();
                                });
                            });
                            function uploadImage() {
//                            判断是否有选择上传文件
//                            input type file
                                var imgPath = $("#file_upload").val();
                                if (imgPath == "") {
                                    alert("请选择上传图片！");
                                    return;
                                }
                                //判断上传文件的后缀名
                                var strExtension = imgPath.substr(imgPath.lastIndexOf('.') + 1);
                                if (strExtension != 'jpg' && strExtension != 'gif'
                                    && strExtension != 'png' && strExtension != 'bmp') {
                                    alert("请选择图片文件");
                                    return;
                                }
                                var formData = new FormData($( "#art_form" )[0]);
                                console.log(formData);
                                $.ajax({
                                    type: "post",
                                    url: "/home/user/userpic",
                                    data: formData,
                                    async: true,
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    beforeSend:function(){
                                          // 菊花转转图
                                          // $('#img1').attr('src', 'http://img.lanrentuku.com/img/allimg/1212/5-121204193R0-50.gif');
                                          //
                                           a = layer.load();
                                      },
                                    success: function(data) {
                                        layer.close(a);
                                        // console.log(data);
                                        $('#img1').attr('src','http://ozsps8743.bkt.clouddn.com/img/image_'+data);
                                       
                                      // $('#art_thumb').val(data);
                                    },
                                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                    	 // console.log(data);
                                        alert("上传失败，请检查网络后重试");
                                        layer.close(a);
                                        $('#img1').attr('src','/homes/images/image.jpg');
                                    }
                                });
                            }
</script>

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
										<input type="text" id="nickname" placeholder="用户名一经设置不得修改" value="{{$result->nickname}}"	 name="">

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
											<!-- <span style="color:#ddd;">性别设置后不允许修改哟</span> -->
										</label>
										
									</div>
								</div>

								<div class="am-form-group">
									<label for="user-birth" class="am-form-label">生日</label>
									<div class="am-form-content birth">
										<div class="birth-select">
											<select data-am-selected="" id="select1" style="display: none;">

												@for($i=1980;$i<=2020;$i++)
												<option value="{{$i}}">{{$i}}</option>
												@endfor
											</select>
											<em>年</em>
										</div>
										<div class="birth-select2">
											<select data-am-selected=""  id="select2" style="display: none;">
												@for($j=1;$j<=12;$j++)
												<option value="@if($j<10) {{'0'.$j}} @elseif($j>=10) {{$j}} @endif">@if($j<10) {{'0'.$j}} @elseif($j>=10) {{$j}} @endif</option>
												@endfor
											</select>
											<em>月</em></div>
										<div class="birth-select2">
											<select data-am-selected="" id="select3" style="display: none;">
												@for($z=1;$z<=31;$z++)
												<option value="@if($z<10) {{'0'.$z}} @elseif($z>=10) {{$z}} @endif">@if($z<10) {{'0'.$z}} @elseif($z>=10) {{$z}} @endif</option>
												@endfor
											</select>
											<em>日</em></div>
									</div>
							
								</div>


								<div class="am-form-group">
									<label for="user-email" class="am-form-label">qq</label>
									<div class="am-form-content">
										<input id="qq" placeholder="qq号码" type="text" value="{{ $result->qq }}" >

									</div>
								</div>
								
								<div class="am-form-group">
									<label for="user-email" class="am-form-label">电子邮件</label>
									<div class="am-form-content">
										<input id="user-email" placeholder="Email" type="email" value="{{ $result->email }}" >

									</div>
								</div>								
								
								<div class="info-btn">
									<div class="am-btn am-btn-danger" onclick="save({{session('userid')}})">保存修改</div>
								</div>

							</form>	
						</div>

					</div>
<script>
function save (id) {
	var nickname = $('#nickname').val();
	var sex = $('input[name="radioo"]').val();
	var nian = $('#select1').val();
	var yue = $('#select2').val();
	var ri = $('#select3').val();
	var birth = nian+yue+ri;
	var qq = $('#qq').val();
	var email = $('#user-email').val();

	// console.log(nickname);
	// console.log(id);
	// console.log(sex);
	// console.log(qq);
	// console.log(birth);
	// console.log(email);

	$.post('/home/user/userinfo',{'_token':'{{ csrf_token() }}',id:id,sex:sex,birth:birth,qq:qq,email:email,nickname:nickname},function(data){
	            
	            // console.log(data);
	            if (data) {
	                layer.open({
		          	   type: 1
			          ,offset: 't' //具体配置参考：offset参数项
			          ,content: '<div style="padding: 20px 80px;">信息保存成功</div>'
			          ,btn: '关闭'
			          ,btnAlign: 'c' //按钮居中
			          ,shade: 0 //不显示遮罩
			          ,yes: function(){
			            layer.closeAll();
			            location.href= '/home/user/userinfo';
			          }
			        });
	            }else {
	                layer.open({
		          	   type: 1
			          ,offset: 't' //具体配置参考：offset参数项
			          ,content: '<div style="padding: 20px 80px;">信息保存失败,请重试</div>'
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

</script>
@endif

@endsection

