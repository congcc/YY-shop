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


					<div class="user-address">
						
						
						<div class="clear"></div>
						<a class="new-abtn-type" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0}">管理地址</a>
						<!--例子-->
						<div class="" id="doc-modal-1">

							<div class="add-dress">

								<!--标题 -->
								<div class="am-cf am-padding">
									<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">修改地址</strong> / <small>Add&nbsp;address</small></div>
								</div>
								<hr>

								<div class="am-u-md-12 am-u-lg-8" style="margin-top: 20px;">
									<form class="am-form am-form-horizontal">

										<div class="am-form-group">
											<label for="user-name" class="am-form-label">收货人</label>
											<div class="am-form-content">
												<input type="text" id="user-name" placeholder="收货人" value="{{$res->name}}">
												<div id="e4" style="width: 200px;height: 20px;display: none;color: black;font-size: 13px;font-weight: bold"></div>
											</div>
										</div>

										<div class="am-form-group">
											<label for="user-phone" class="am-form-label">手机号码</label>
											<div class="am-form-content">
												<input id="user-phone" placeholder="手机号必填" type="email" value="{{$res->phone}}">
												<div id="e1" style="width: 200px;height: 20px;display: none;color: black;font-size: 13px;font-weight: bold"></div>
											</div>

										</div>
										<div class="am-form-group">
									<?php  $add = json_decode($res->address,true) ?>

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
                    province:'{{$add[0]}}',
                    city:'@if(isset( $add[3]) ? $add[3] : "")  @endif',
                    area:'{{$add[1]}}',
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
												<textarea class="" rows="3" id="user-intro" placeholder="100字以内写出你的详细地址..." >{{$add[2]}}</textarea>
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



	function address (uid) {
		
		var sheng = $('select[name=province]').val();
		var shi = $('select[name=city]').val();
		var xian = $('select[name=area]').val();
		var name = $('#user-name').val();
		var ph  = $('#user-phone').val();
		var addr = $('#user-intro').val();

		console.log(sheng);
		console.log(shi);
		console.log(xian);

		$.post("{{url('home/user/editaddr')}}",{'_token':'{{ csrf_token() }}',id:{{$res->id}},uid:uid,name:name,ph:ph,sheng:sheng,shi:shi,xian:xian,addr:addr},function(data){
         console.log(data);
    //      	if(data==1){
    //      		layer.alert('保存成功', {
				//   icon: 1,
				//   skin: 'layer-ext-moon' 
				// })
				// window.location.href=('/home/user/useraddr');
    //      	}else{
    //      		layer.alert('失败,请重试', {
				//   icon: 2,
				//   skin: 'layer-ext-moon' 
    //      		})
    //      	}
        },'json');
		
	}

	$('#cancel').click(function(){
			location.reload();
	});

</script>
@endsection

