@extends('homes.layout.seller')

@section('head')

 <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="/homes/imageInput/js/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="/homes/layer/layer.js" type="text/javascript"></script>
    <script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js" type="text/javascript"></script>




<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/infstyle.css" rel="stylesheet" type="text/css">
		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js" type="text/javascript"></script>

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/homes/home/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/custom-plugins/picklist/picklist.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/plugins/select2/select2.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/plugins/ibutton/jquery.ibutton.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/plugins/cleditor/jquery.cleditor.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/homes/home/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/homes/home/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/homes/home/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/homes/home/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/homes/home/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/css/themer.css" media="screen">



    <!-- JavaScript Plugins -->
    <script src="/homes/home/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/homes/home/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/homes/home/js/libs/jquery.placeholder.min.js"></script>
    <script src="/homes/home/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/homes/home/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/homes/home/jui/jquery-ui.custom.min.js"></script>
    <script src="/homes/home/jui/js/jquery.ui.touch-punch.js"></script>

    <script src="/homes/home/jui/js/globalize/globalize.js"></script>
    <script src="/homes/home/jui/js/globalize/cultures/globalize.culture.en-US.js"></script>

    <!-- Plugin Scripts -->
    <script src="/homes/home/custom-plugins/picklist/picklist.min.js"></script>
    <script src="/homes/home/plugins/autosize/jquery.autosize.min.js"></script>
    <script src="/homes/home/plugins/select2/select2.min.js"></script>
    <script src="/homes/home/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/homes/home/plugins/validate/jquery.validate-min.js"></script>
    <script src="/homes/home/plugins/ibutton/jquery.ibutton.min.js"></script>
    <script src="/homes/home/plugins/cleditor/jquery.cleditor.min.js"></script>
    <script src="/homes/home/plugins/cleditor/jquery.cleditor.table.min.js"></script>
    <script src="/homes/home/plugins/cleditor/jquery.cleditor.xhtml.min.js"></script>
    <script src="/homes/home/plugins/cleditor/jquery.cleditor.icon.min.js"></script>

    <!-- Core Script -->
    <script src="/homes/home/bootstrap/js/bootstrap.min.js"></script>
    <script src="/homes/home/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/homes/home/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/homes/home/js/demo/demo.formelements.js"></script>

    <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>

<style>
		#user-name2{
			width: 85px;
			float: left;
		}
		.span1{
			float: left;
			margin: 0 0 0 9px;
		}
		.span2{
			float: left;
			margin-top: 5px;
		}
		.span3{
			clear: both;
			margin-top: 5px;
		}
		.prices{
			margin-bottom: 50px;
			width: 100px;
			height: 150px;
			margin: 20px 0 0 0;
		}
		.lis1,.lis2{
			float: left;
			font-size: 15px;
			padding: 0 5px 0 5px;
			height: 35px;
			border: 1px solid #ddd;
			text-align: center;
			line-height: 35px;
			font-family: "微软雅黑";
			margin: 0 0 0 7px;
			cursor: pointer;
		}
		.subpri{
			display: none;
		}
    </style>
@endsection

@section('title','商品上传')

@section('content')

		<!--个人信息 -->
	<div class="info-main" style="padding-bottom: 20px">
		<form class="am-form am-form-horizontal">
			
		<div style="height:50px"></div>
			<label class="mws-form-label"><strong>分类选择</strong></label><hr/>
					<div style="width: 600px">
						<div style="padding:10px 0;width:150px;float:left;margin: 0 20px 10px 0px;" >	
							<select name="cate_name" id="city" readonly>
							<option value="" readonly >{{$c_one->cate_name}}</option>
							</select>
						</div>

						<div style="padding:10px 0;width:150px;float:left;margin: 0 20px 10px 0px;" >
							<select name="cate_name" id="area" >
								<!-- <option class="" value="">请选择</option> -->
							@foreach($c_two as $k=>$v)
								<option class="{{$v->id}}" value="{{$v->id}}">{{$v->cate_name}}</option>
							@endforeach
							</select>
						</div>

						<div style="padding:10px 0;width:150px;float:left;margin: 0 20px 10px 0px;" >
							<select name="cate_name" id="subset" >	
								<!-- <option class="" value="">请选择</option>	 -->
							@foreach($c_three as $o=>$p)
								<option class="{{$p->id}}" value="{{$p->id}}">{{$p->cate_name}}</option>
							@endforeach
							</select>
						</div>
					</div>

						

						
			
			<div class="am-form-group" style="clear: both">
				<label class="am-form-label" for="user-name2">商品名称</label>
				<div class="am-form-content">
					<input type="text" placeholder="商品名称" id="goods-name" name="gname">

				</div>
			</div>

			<div class="am-form-group" style="clear: both">
				<label class="am-form-label" for="user-name2">一口价</label>
				<div class="am-form-content">
					<input type="text" placeholder="一口价" id="gprice" name="gprice">

				</div>
			</div>

			
			<div class="am-form-group" style="clear: both">
				<label class="am-form-label" for="user-name2">商品标签</label>
				<div class="am-form-content">
					<input type="text" placeholder="商品标签" name="labels1" class="tags" style="float: left;width: 85px;margin-left: 15px;">
					<input type="text" placeholder="商品标签" name="labels2" class="tags" style="float: left;width: 85px;margin-left: 15px;">
					<input type="text" placeholder="商品标签" name="labels3" class="tags" style="float: left;width: 85px;margin-left: 15px;">
					<input type="text" placeholder="商品标签" name="labels4" class="tags" style="float: left;width: 85px;margin-left: 15px;">
				</div>
			</div>
		
			<div class="am-form-group">
				<label class="am-form-label" for="user-name2">商品规格</label><br/>
				<div style="height: 30px;clear: height;"></div>
				<div class="am-form-content">
					<div class="add_a">
						<span class="span2">口味 : </span><input type="text" class="flavor1" id="user-name2" name="gprice" style="margin-left:10px;"><span class="span1 spanadd1 btn btn-danger">添加</span>
					</div>
					<div style="height: 15px;clear: both;"></div>
					<div class="add_b" style="clear: both;">
						<span class="span2">包装 : </span><input type="text" class="flavor2" id="user-name2" name="gprice" style="margin-left:10px;"><span class="span1 spanadd2 btn btn-danger">添加</span>
					</div>	
				</div>
				<div style="height: 50px;clear: height;"></div>
				<span class="span3 btn btn-danger">定制价格</span>
				<div class="prices">
					<div style="width: 780px;height: 45px;">
						<ul class="ul1">
							
						</ul>
					</div>
					<div style="width: 780px;height: 45px;">
						<ul class="ul2">

						</ul>
					</div>
					<div class="subpri">
						<input type="text" name="prices" value="" style="width: 70px;">
						<span style="margin: 10px 0 0 0;" class="span1 spansub btn btn-danger">确定</span>
					</div>
				</div>
			</div>

			
			
			
			<div style="height: 80px;clear: both"></div>
			<div class="mws-form-row">
                	<label class="mws-form-label"><strong>商品主图</strong></label>
                	<div class="btn btn-info" id= "upload_pic" style="width:120px;height: 30px;margin:0 0 0 20px;text-align:30px; ">
                    	点击添加图片
                    </div>
            </div>
			

            <div class="mws-form-row"><img  id='pic1'  alt=""  style="width:80px;height:80px;margin:20px 20px 20px 0;float:left;"></div>

            <div class="mws-form-row"><img  id='pic2' alt=""  style="width:80px;height:80px;margin:20px 20px 20px 0;float:left;"></div>

            <div class="mws-form-row"><img  id='pic3' alt=""  style="width:80px;height:80px;margin:20px 20px 20px 0;float:left;"></div>

            <div class="mws-form-row"><img  id='pic4' alt=""  style="width:80px;height:80px;margin:20px 20px 20px 0;float:left;"></div>

            <div class="mws-form-row"><img  id='pic5' alt=""  style="width:80px;height:80px;margin:20px 20px 20px 0;float:left;"></div>

            <div class="mws-panel-body no-padding" style="padding-top:100px margin-left:10px;clear: both;">
            	
                	<div class="mws-form-row">
                    	<label class="mws-form-label"><strong>商品详情</strong></label>
                        <script id="editor" type="text/plain" style="width:800px;height:500px;"></script>
                    </div>
                   
                   
               
            </div>
			 

			 {{ csrf_field()}}
			<div class="btn btn-info"  onclick="upgoods({{session('userid')}})">添加商品</div>
			
	</div>

<script>
	var ue = UE.getEditor('editor');
	var tags = document.getElementsByClassName('tags');

	$('#area').change(function(){

		var twoid = $('#area').val();
		$.get("/home/seller/select",{twoid:twoid},function(data){
			$('#subset option').remove();
	     	for (var i = 0; i <data.length; i++) {
	     		$('#subset').append($("<option value="+data[i]['id']+" > "+data[i]['cate_name']+" </option>"));
	      	}
	    },'json');
	})

	//商品规格
	$(".spanadd1").click(function(){
		$(this).before('<input type="text" class="flavor1" style="width:85px;float:left;margin-left:10px;">');
	})
	$(".spanadd2").click(function(){
		$(this).before('<input type="text" class="flavor2" style="width:85px;float:left;margin-left:10px;">');
	})
	var flavor1 = document.getElementsByClassName('flavor1');
	var flavor2 = document.getElementsByClassName('flavor2');
	var ind1 = 0; 
	var ind2 = 0;
	var arr1 = [];
	var arr2 = [];
	var arr3 = [];
	var arr4 = [];
	$('.span3').click(function(){
		$('.ul1').empty();
		$('.ul2').empty();
		$('.subpri').show();
		for(var i = 1;i<=flavor1.length;i++){
			$('.ul1').append('<li class="lis1">'+flavor1[i-1].value+'</li>');
			arr3.push(flavor1[i-1].value);
		}
		for(var j = 1;j<=flavor2.length;j++){
			$('.ul2').append('<li class="lis2">'+flavor2[j-1].value+'</li>');
			arr4.push(flavor2[j-1].value);
		}
	})
	$(".ul1").on("click",".lis1",function(){
		$('.ul1 li').css('border','1px solid #ddd');
		$('.ul1 li').attr('name','b');
	　　$(this).css('border','2px solid red');
		$(this).attr('name','a');
	});
	$(".ul2").on("click",".lis2",function(){
		$('.ul2 li').css('border','1px solid #ddd');
		$('.ul2 li').attr('name','b');
	　　$(this).css('border','2px solid red');
		$(this).attr('name','a');
	});
	$('.spansub').click(function(){
		var lis1 = document.getElementsByClassName('lis1');
		var lis2 = document.getElementsByClassName('lis2');
		for(var q=0; q<lis1.length;q++){
			if(lis1[q].getAttribute('name')=="a"){
				ind1 = q;	
			}
		}
		for(var w=0; w<lis2.length;w++){
			if(lis2[w].getAttribute('name')=="a"){
				ind2 = w;	
			}
		}
		var pri = document.getElementsByName('prices')[0];
		var pris = pri.value;
		arr1.push(ind1+','+ind2);
		arr2.push(pris);
	})
	/*$('.sub').click(function(){
		$.post("/home/seller/goodsup",{'_token':'{{ csrf_token() }}',arr1:arr1,arr2:arr2,arr3:arr3,arr4:arr4},function(data){
	    	if(data==1){
	    		layer.msg('添加成功');
	    	}else{
	    		layer.msg('添加失败');
	    	}
	    },'json')
	})*/

 
//显示图片上传的iframe窗
$('#upload_pic').click(function () {
    layer.open({
        type: 2,
        title: '图片上传',
        shadeClose: true,
        shade: 0.8,
        area: ['50%', '350px'],
        content: '/home/seller/pic' //iframe的url
    });
});

function upgoods(uid){
	var clid = $('#subset').val();
	var gname = $('#goods-name').val();
	var gimg = $('#pic1').attr('src');
	var gdcont = UE.getEditor('editor').getContent();
	var gdpic = $('#pic1').attr('src')+','+$('#pic2').attr('src')+','+$('#pic3').attr('src')+','+$('#pic4').attr('src')+','+$('#pic5').attr('src');
	var gprice = $('#gprice').val();
	var tagsarr = [];
	for(var q=0;q<tags.length;q++){
		tagsarr.push(tags[q].value);
	}
		

	$.post("/home/seller/goodsup",{'_token':'{{ csrf_token() }}',arr1:arr1,arr2:arr2,arr3:arr3,arr4:arr4,clid:clid,gname:gname,gimg:gimg,gdcont:gdcont,gdpic:gdpic,gprice:gprice,tagsarr:tagsarr},function(data){
	    	if(data==1){
	    		layer.msg('添加成功');
	    	}else{
	    		layer.msg('添加失败');
	    	}
	    	//console.log(data);
	    },'json')

}
</script>
@endsection