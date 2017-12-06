@extends('homes.layout.head')


@section('head')
<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/homes/basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link href="/homes/css/cartstyle.css" rel="stylesheet" type="text/css" />
		<link href="/homes/css/optstyle.css" rel="stylesheet" type="text/css" />
		
		
		<script type="text/javascript" src="/homes/js/jquery.js"></script>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=0">
		<meta name="_token" content="{{ csrf_token() }}"/>
		<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/systyle.css" rel="stylesheet" type="text/css">
		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/homes/js/validate.js"></script>
		<script src="/homes/layer/layer.js"></script>
		
@endsection

@section('title','个人中心')

@section('content')



@if($res->apply==1)
		
		<a href="">您还未完成实名验证,无法申请成为商家</a>
		<a href="/home/user/idcard">点击此处前去完成实名验证</a>

	@elseif($res->apply==3)

		<a href="">您正在进行实名验证申请,请等待实名验证成功后,即可申请为商家</a>
	@elseif($res->apply==2)
			
		<a href="">您已完成实名验证,可申请成为商家</a>
		<div class="user-info">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">商家注册</strong> / <small>Personal&nbsp;information</small></div>
						</div>
						<hr>
					
						<!--头像 -->
					

						<!--个人信息 -->
						<div class="info-main">
							<form class="am-form am-form-horizontal" id='art_form' >


								<div class="am-form-group">
									<label class="am-form-label" for="user-name2">店铺名：</label>
									<div class="am-form-content">
										<input type="text" placeholder="店铺名" id="user-name" name="sname" value="" style="width:300px;" >



									</div>

								</div>

							

								<div class="am-form-group">
									<label class="am-form-label">申请人qq：</label>
									<div class="am-form-content">
										<input type="text" placeholder="店铺申请人qq" id="user-qq" name="qq" value="" style="width:300px;" >


									</div>

								</div>

								<div class="am-form-group">
									<label class="am-form-label">申请分类：</label>
									<div class="am-form-content">
										<div style="padding:10px 0;width:150px;float:left;margin: 0 20px 10px 0px;" >	
										<select name="stype" id="city" >
										@foreach($c_one as $k=>$v)
										<option value="{{$v->id}}" >{{$v->cate_name}}</option>
										@endforeach
										</select>
										</div>

									</div>

								</div>
									

									


									<div class="refund-tip">

									<label class="am-form-label" for="user-birth">店铺头像：</label>

										<div class="filePic">
											<input type="file" accept="image/*" allowexts="gif,jpeg,jpg,png,bmp" maxsize="5120" max="5" name="simg" value="选择图片" class="inputPic" style="opacity: 0; position: absolute;width: 80px;height:80px;margin: 0 0 0 100px;cursor: pointer;" id="file_upload">
											<img alt="" src="/homes/images/image.jpg" id="img1" style="width:80px;height:80px">
										</div>
									</div>
							
								<div style="height:20px;clear:both"></div>
								<div class="am-form-group" style="clear:both;">
									<label class="am-form-label" for="user-email">地址：</label>
									<div class="am-form-content">

										<input type="text" placeholder="地址" id="user-addr" name="saddress" value="" style="width:500px;" >


									</div>			

								</div>
						


						</div>
							
								<div class="info-btn">

									{{ csrf_field()}}

    								

									<div class="am-btn am-btn-danger" style="margin:10px 0 0 60px" onclick="shopapp({{session('userid')}})">注册为商家</div>
								</div>
						</form>
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
                                // console.log(imgPath);
                                $.ajax({
                                    type: "post",
                                    url: "/home/user/shopapply",
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
                                        $('#img1').attr('src','http://ozsps8743.bkt.clouddn.com/img/image_'+data);
                                       
                                      // $('#art_thumb').val(data);
                                    },
                                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                                        alert("上传失败，请检查网络后重试");
                                        $('#img1').attr('src','1.jpg');
                                    }
                                });
                            }


    function shopapp (id) {
    	var sname = $('#user-name').val();
    	var qq = $('#user-qq').val();
    	var stype = $('#city').val();
    	var simg = $('#img1').attr('src');
    	var saddress = $('#user-addr').val();

    	// console.log(sname);
    	// console.log(qq);
    	// console.log(stype);
    	// console.log(simg);
    	// console.log(saddress);
    	$.post('/home/user/uploads',{'_token':'{{ csrf_token() }}',sname:sname,qq:qq,stype:stype,simg:simg,saddress:saddress},function(data){
	            
	           // console.log(data);
	            if (data) {
	                layer.open({
		          	   type: 1
			          ,offset: 't' //具体配置参考：offset参数项
			          ,content: '<div style="padding: 20px 80px;">申请成功,请耐心等待后台人员审核</div>'
			          ,btn: '关闭'
			          ,btnAlign: 'c' //按钮居中
			          ,shade: 0 //不显示遮罩
			          ,yes: function(){
			            layer.closeAll();
			            location.href="/home/seller/index";
			          }
			        });
	            }else {
	                layer.open({
		          	   type: 1
			          ,offset: 't' //具体配置参考：offset参数项
			          ,content: '<div style="padding: 20px 80px;">申请失败,请稍后重试</div>'
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