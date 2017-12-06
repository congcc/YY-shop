@extends('homes.layout.userbuy')
@section('head')
<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/addstyle.css" rel="stylesheet" type="text/css">
		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js"></script>

@endsection

@section('title','个人中心')

@section('content')
@if($defadd)

					<div class="user-address">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">地址管理</strong> / <small>Address&nbsp;list</small></div>
						</div>
						<hr>
						<ul class="am-avg-sm-1 am-avg-md-3 am-thumbnails">
						
							<li class="user-addresslist defaultAddr" style="margin: 10px 0 0 5px">
								<span class="new-option-r"><i class="am-icon-check-circle"></i>默认地址</span>
								<p class="new-tit new-p-re">
									<span class="new-txt">{{$defadd->name}}</span>
									<span class="new-txt-rd2">{{$defadd->phone}}</span>
								</p>
								<div class="new-mu_l2a new-p-re">
									<p class="new-mu_l2cw">
									<?php  $add = json_decode($defadd->address,true) ?>

										<span class="title">地址：</span>
										<span class="province">{{$add['0']}}</span>
										<span class="city"><?php if($add['3']){echo $add['3'];}else{echo "";} ?></span>
										<span class="dist">{{$add['1']}}</span>
										<span class="street">{{$add['2']}}</span></p>
								</div>
								<div class="new-addr-btn">
									<a href="/home/user/useraddr/{{$defadd->id}}"><i class="am-icon-edit"></i>编辑</a>
									
									<span class="new-addr-bar">|</span>
									<a style="cursor: pointer;" onclick="delClick({{$defadd->id}});"><i class="am-icon-trash"></i>删除</a>
								</div>
							</li>
							
							@foreach($res as  $k=>$v)
							<li class="user-addresslist" style="margin: 10px 0 0 5px">
								<a href="/home/user/addr/{{$v->id}}"><span class="new-option-r"><i class="am-icon-check-circle"></i>设为默认</span></a>
								<p class="new-tit new-p-re">
									<span class="new-txt">{{$v->name}}</span>
									<span class="new-txt-rd2">{{$v->phone}}</span>
								</p>
								<div class="new-mu_l2a new-p-re">
									<p class="new-mu_l2cw">
										<span class="title">地址：</span>
										<?php  $addr = json_decode($v->address,true) ?>
										<span class="province">{{$addr['0']}}</span>
										<span class="city"><?php if($addr['3']){echo $addr['3'];}else{echo "";} ?></span>
										<span class="dist">{{$addr['1']}}</span>
										<span class="street">{{$addr['2']}}</span></p>
								</div>
								<div class="new-addr-btn">
									<a href="/home/user/useraddr/{{$v->id}}"><i class="am-icon-edit"></i>编辑</a>
									<span class="new-addr-bar">|</span>
									<a style="cursor: pointer;" onclick="delClick({{$v->id}});"><i class="am-icon-trash"></i>删除</a>
								</div>
							</li>
							@endforeach
							
						</ul>
						<div class="clear"></div>
						<a class="new-abtn-type" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0}">添加新地址</a>
						<!--例子-->
						<div class="" id="doc-modal-1">

							<div class="add-dress">

								<!--标题 -->
								<div class="am-cf am-padding">
									<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">新增地址</strong> / <small>Add&nbsp;address</small></div>
								</div>
								<hr>

								<div class="am-u-md-12 am-u-lg-8" style="margin-top: 20px;">
									<form class="am-form am-form-horizontal">

										<div class="am-form-group">
											<label for="user-name" class="am-form-label">收货人</label>
											<div class="am-form-content">
												<input type="text" id="user-name" placeholder="收货人">
												<div id="e4" style="width: 200px;height: 20px;display: none;color: black;font-size: 13px;font-weight: bold"></div>
											</div>
										</div>

										<div class="am-form-group">
											<label for="user-phone" class="am-form-label">手机号码</label>
											<div class="am-form-content">
												<input id="user-phone" placeholder="手机号必填" type="email">
												<div id="e1" style="width: 200px;height: 20px;display: none;color: black;font-size: 13px;font-weight: bold"></div>
											</div>

										</div>
										<div class="am-form-group">
										<head>
        <link rel="stylesheet" type="text/css" href="/homes/style/cssreset-min.css">
        <link rel="stylesheet" type="text/css" href="/homes/style/common.css">
        <style type="text/css">
            .citys{
                margin-bottom: 10px;
            }
            .citys p{
                line-height: 28px;
            }
            .warning{
                color: #c00;
            }
            .main a{
                margin-right: 8px;
                color: #369;
            }
        </style>
        <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="/homes/script/jquery.citys.js"></script>
    </head>
    <body>   
        
           
            <script type="text/javascript">
                $('#demo2').citys({
                    required:false,
                    nodata:'disabled',
                    onChange:function(data){
                        var text = data['direct']?'(直辖市)':'';
                        $('#place').text('当前选中地区：'+data['province']+text+' '+data['city']+' '+data['area']);
                    }
                });
            </script>
            <p style="float: left;margin: 0 0 0 37px;text-align: center;width: 67px;height: 30px;line-height: 30px;">收货地址</p>
            <div id="demo3" class="citys" style="float: left;">
                <span>
                    <select name="province" style="float:left;width:150px"></select>
                    <select name="city"   style="float:left;width:150px;margin:0 0 0 20px;"></select>
                    <select name="area"   style="float:left;width:150px;margin:0 0 0 20px;"></select>
                </span>
            </div>
            
            <script type="text/javascript">
                var $town = $('#demo3 select[name="town"]');
                var townFormat = function(info){
                    $town.hide().empty();
                    if(info['code']%1e4&&info['code']<7e5){ //是否为“区”且不是港澳台地区
                        $.ajax({
                            url:'http://passer-by.com/data_location/town/'+info['code']+'.json',
                            dataType:'json',
                            success:function(town){
                                $town.show();
                                for(i in town){
                                        $town.append('<option value="'+i+'">'+town[i]+'</option>');
                                }
                            }
                        });
                    }
                };
                $('#demo3').citys({
                    province:'福建',
                    city:'厦门',
                    area:'思明',
                    onChange:function(info){
                        townFormat(info);
                    }
                },function(api){
                    var info = api.getInfo();
                    townFormat(info);
                });
            </script>
            
        
    </body>
										</div>
										
										<div class="am-form-group">

											<label for="user-intro" class="am-form-label">详细地址</label>
											<div class="am-form-content">
												<textarea class="" rows="3" id="user-intro" placeholder="100字以内写出你的详细地址..."></textarea>
												<div id="e5" style="width: 200px;height: 20px;display: none;color: black;font-size: 13px;font-weight: bold"></div>
												
											</div>
										</div>

										<div class="am-form-group">
											<div class="am-u-sm-9 am-u-sm-push-3">
												<a class="am-btn am-btn-danger" onclick="address({{session('userid')}})"  >保存</a>
												<a href="javascript: void(0)" class="am-close am-btn am-btn-danger" data-am-modal-close="" id="cancel">取消</a>
											</div>
										</div>
									</form>
								</div>

							</div>

						</div>

					</div>

					<script type="text/javascript">
						$(document).ready(function() {							
							$(".new-option-r").click(function() {
								$(this).parent('.user-addresslist').addClass("defaultAddr").siblings().removeClass("defaultAddr");
							});
							
							var $ww = $(window).width();
							if($ww>640) {
								$("#doc-modal-1").removeClass("am-modal am-modal-no-btn")
							}
							
						})
					</script>

					<div class="clear"></div>

<script>
	var ch1=100;
  	var ch2=100;
  	var ch3=100;
  	
  	$('#user-name').blur(function(){
		var name = $('#user-name').val();
		
		if(name==''){
			$('#e4').css('display','block');
			$('#e4').html('收货人不能为空哦');
			ch1 = 66;
		}else{
			$('#e4').css('display','none');
      		ch1 = 100;
		}
   });


	$('#user-phone').blur(function(){

	    var ph  = 	$('#user-phone').val();
	    
	    ch2 = checkTel($('#user-phone'),$('#e1'));
	    if(ch2!=100){
	      $('#e1').css('display','block');
	      return;
	    }else{
	      $('#e1').css('display','none');
	      ch2 = 100;
	    }
	});

	$('#user-intro').blur(function(){
		var addr = $('#user-intro').val();

		if(addr==''){
			$('#e5').css('display','block');
			$('#e5').html('内容不能为空');
			ch3 = 66;
		}else{
			$('#e5').css('display','none');
      		ch3 = 100;
		}
   });


//添加信息发送ajax
	function address (uid) {
		
		var sheng = $('select[name=province]').val();
		var shi = $('select[name=city]').val();
		var xian = $('select[name=area]').val();
		var name = $('#user-name').val();
		var ph  = $('#user-phone').val();
		var addr = $('#user-intro').val();

		// console.log('省'+sheng);
		// console.log('市'+shi);
		// console.log('县'+xian);

		$.post("{{url('home/user/addr')}}",{'_token':'{{ csrf_token() }}',uid:uid,name:name,ph:ph,sheng:sheng,shi:shi,xian:xian,addr:addr},function(data){
         // console.log(data);
         	if(data==1){
         		layer.alert('保存成功', {
				  icon: 1,
				  skin: 'layer-ext-moon' 
				})
				location.reload();
         	}else{
         		layer.alert('失败,请重试', {
				  icon: 2,
				  skin: 'layer-ext-moon' 
         		})
         	}
        },'json');
		
	}

	//取消按钮刷新页面
	$('#cancel').click(function(){
			location.reload();
	});



	//删除地址信息
	function delClick (id) {
		
		$.get("/home/user/deladdr",{id:id},function(data){
         
         	if(data==1){
         		layer.alert('删除成功', {
				  icon: 1,
				  skin: 'layer-ext-moon' 
				})
				location.reload();
         	}else{
         		layer.alert('失败,请重试', {
				  icon: 2,
				  skin: 'layer-ext-moon' 
         		})
         	}
        },'json');
	}

</script>
@else(!$defadd)
	<div class="user-address">
						<!--标题 -->
						
						
						<a class="new-abtn-type" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0}">添加新地址</a>
						<!--例子-->
						<div class="" id="doc-modal-1">

							<div class="add-dress">

								<!--标题 -->
								<div class="am-cf am-padding">
									<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">新增地址</strong> / <small>Add&nbsp;address</small></div>
								</div>
								<hr>

								<div class="am-u-md-12 am-u-lg-8" style="margin-top: 20px;">
									<form class="am-form am-form-horizontal">

										<div class="am-form-group">
											<label for="user-name" class="am-form-label">收货人</label>
											<div class="am-form-content">
												<input type="text" id="user-name" placeholder="收货人">
												<div id="e4" style="width: 200px;height: 20px;display: none;color: black;font-size: 13px;font-weight: bold"></div>
											</div>
										</div>

										<div class="am-form-group">
											<label for="user-phone" class="am-form-label">手机号码</label>
											<div class="am-form-content">
												<input id="user-phone" placeholder="手机号必填" type="email">
												<div id="e1" style="width: 200px;height: 20px;display: none;color: black;font-size: 13px;font-weight: bold"></div>
											</div>

										</div>
										<div class="am-form-group">
										<head>
        <link rel="stylesheet" type="text/css" href="/homes/style/cssreset-min.css">
        <link rel="stylesheet" type="text/css" href="/homes/style/common.css">
        <style type="text/css">
            .citys{
                margin-bottom: 10px;
            }
            .citys p{
                line-height: 28px;
            }
            .warning{
                color: #c00;
            }
            .main a{
                margin-right: 8px;
                color: #369;
            }
        </style>
        <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="/homes/script/jquery.citys.js"></script>
    </head>
    <body>   
        
           
            <script type="text/javascript">
                $('#demo2').citys({
                    required:false,
                    nodata:'disabled',
                    onChange:function(data){
                        var text = data['direct']?'(直辖市)':'';
                        $('#place').text('当前选中地区：'+data['province']+text+' '+data['city']+' '+data['area']);
                    }
                });
            </script>
            <p style="float: left;margin: 0 0 0 37px;text-align: center;width: 67px;height: 30px;line-height: 30px;">收货地址</p>
            <div id="demo3" class="citys" style="float: left;">
                <span>
                    <select name="province" style="float:left;width:150px"></select>
                    <select name="city"   style="float:left;width:150px;margin:0 0 0 20px;"></select>
                    <select name="area"   style="float:left;width:150px;margin:0 0 0 20px;"></select>
                </span>
            </div>
            
            <script type="text/javascript">
                var $town = $('#demo3 select[name="town"]');
                var townFormat = function(info){
                    $town.hide().empty();
                    if(info['code']%1e4&&info['code']<7e5){ //是否为“区”且不是港澳台地区
                        $.ajax({
                            url:'http://passer-by.com/data_location/town/'+info['code']+'.json',
                            dataType:'json',
                            success:function(town){
                                $town.show();
                                for(i in town){
                                        $town.append('<option value="'+i+'">'+town[i]+'</option>');
                                }
                            }
                        });
                    }
                };
                $('#demo3').citys({
                    province:'福建',
                    city:'厦门',
                    area:'思明',
                    onChange:function(info){
                        townFormat(info);
                    }
                },function(api){
                    var info = api.getInfo();
                    townFormat(info);
                });
            </script>
            
        
    </body>
										</div>
										
										<div class="am-form-group">

											<label for="user-intro" class="am-form-label">详细地址</label>
											<div class="am-form-content">
												<textarea class="" rows="3" id="user-intro" placeholder="100字以内写出你的详细地址..."></textarea>
												<div id="e5" style="width: 200px;height: 20px;display: none;color: black;font-size: 13px;font-weight: bold"></div>
												
											</div>
										</div>

										<div class="am-form-group">
											<div class="am-u-sm-9 am-u-sm-push-3">
												<a class="am-btn am-btn-danger" onclick="address({{session('userid')}})"  >保存</a>
												<a href="javascript: void(0)" class="am-close am-btn am-btn-danger" data-am-modal-close="" id="cancel">取消</a>
											</div>
										</div>
									</form>
								</div>

							</div>

						</div>

					</div>

					<script type="text/javascript">
						$(document).ready(function() {							
							$(".new-option-r").click(function() {
								$(this).parent('.user-addresslist').addClass("defaultAddr").siblings().removeClass("defaultAddr");
							});
							
							var $ww = $(window).width();
							if($ww>640) {
								$("#doc-modal-1").removeClass("am-modal am-modal-no-btn")
							}
							
						})
					</script>

					<div class="clear"></div>

<script>
	var ch1=100;
  	var ch2=100;
  	var ch3=100;
  	
  	$('#user-name').blur(function(){
		var name = $('#user-name').val();
		
		if(name==''){
			$('#e4').css('display','block');
			$('#e4').html('收货人不能为空哦');
			ch1 = 66;
		}else{
			$('#e4').css('display','none');
      		ch1 = 100;
		}
   });


	$('#user-phone').blur(function(){

	    var ph  = 	$('#user-phone').val();
	    
	    ch2 = checkTel($('#user-phone'),$('#e1'));
	    if(ch2!=100){
	      $('#e1').css('display','block');
	      return;
	    }else{
	      $('#e1').css('display','none');
	      ch2 = 100;
	    }
	});

	$('#user-intro').blur(function(){
		var addr = $('#user-intro').val();

		if(addr==''){
			$('#e5').css('display','block');
			$('#e5').html('内容不能为空');
			ch3 = 66;
		}else{
			$('#e5').css('display','none');
      		ch3 = 100;
		}
   });


//添加信息发送ajax
	function address (uid) {
		
		var sheng = $('select[name=province]').val();
		var shi = $('select[name=city]').val();
		var xian = $('select[name=area]').val();
		var name = $('#user-name').val();
		var ph  = $('#user-phone').val();
		var addr = $('#user-intro').val();

		$.post("{{url('home/user/addr')}}",{'_token':'{{ csrf_token() }}',uid:uid,name:name,ph:ph,sheng:sheng,shi:shi,xian:xian,addr:addr},function(data){
         	// console.log(data);
    //      	if(data==1){
    //      		layer.alert('保存成功', {
				//   icon: 1,
				//   skin: 'layer-ext-moon' 
				// })
				// location.reload();
    //      	}else{
    //      		layer.alert('失败,请重试', {
				//   icon: 2,
				//   skin: 'layer-ext-moon' 
    //      		})
    //      	}
        },'json');
		
	}

	//取消按钮刷新页面
	$('#cancel').click(function(){
			location.reload();
	});



	//删除地址信息
	function delClick (id) {
		
		$.get("/home/user/deladdr",{id:id},function(data){
         
         	if(data==1){
         		layer.alert('删除成功', {
				  icon: 1,
				  skin: 'layer-ext-moon' 
				})
				location.reload();
         	}else{
         		layer.alert('失败,请重试', {
				  icon: 2,
				  skin: 'layer-ext-moon' 
         		})
         	}
        },'json');
	}

</script>
@endif	
@endsection

