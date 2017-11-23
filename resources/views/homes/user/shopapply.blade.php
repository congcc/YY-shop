@extends('homes.layout.head')


@section('head')
<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
		<link href="/homes/basic/css/demo.css" rel="stylesheet" type="text/css" />
		<link href="/homes/css/cartstyle.css" rel="stylesheet" type="text/css" />
		<link href="/homes/css/optstyle.css" rel="stylesheet" type="text/css" />
		<script src="/homes/layer/layer.js"></script>
		
		<script type="text/javascript" src="/homes/js/jquery.js"></script>
		
@endsection

@section('title','个人中心')

@section('content')

	@if($res->apply==1)
		
		<a href="">您还未完成实名注册,无法申请成为商家</a>
		<a href="/home/user/idcard">点击此处前去完成实名注册</a>

	@elseif($res->apply==2)

		<a href="">您已完成实名注册,可申请成为商家</a>

	@endif

@endsection