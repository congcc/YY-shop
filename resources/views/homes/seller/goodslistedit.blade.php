@extends('homes.layout.seller')

@section('head')
<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/cmstyle.css" rel="stylesheet" type="text/css">

		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js"></script>

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/homes/home/plugins/colorpicker/colorpicker.css" media="screen">

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


@endsection

@section('title','商品列表')

@section('content')



<div class="mws-panel grid_8" style="padding-top:20px">
                	<form action="/home/seller/goodslist/{{$mo->id}}" class="mws-form" method='post' enctype='multipart/form-data'>
    		<div class="mws-form-inline">

    		
    				

    			<div class="mws-form-row">
    				<label class="mws-form-label">商品名:</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='name' value="{{$mo->name}}">
    				</div>
    			</div>

    			<div class="mws-form-row">
    				<label class="mws-form-label">价格:</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='price' value="{{$mo->price}}">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">图片:</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='pic' value="{{$mo->pic}}">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">库存:</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='count' value="{{$mo->count}}">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">折扣:</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='discount' value="{{$mo->discount}}">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">评论:</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='comments' value="{{$mo->comments}}">
    				</div>
    			</div>
    			<div class="mws-form-row">
    				<label class="mws-form-label">详情:</label>
    				<div class="mws-form-item">
    					<input type="text" class="small" name='det' value="{{$mo->det}}">
    				</div>
    			</div>
    			
    			
    		</div>
    		<div class="mws-button-row">
    			{{ csrf_field()}}

    			{{method_field('PUT')}}
    			<input type="submit" class="btn btn-danger" value="修改">
    			
    		</div>
    	</form>
                </div>
@endsection