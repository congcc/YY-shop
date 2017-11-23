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
                	
                    <div class="mws-panel-body no-padding">
                        <table class="mws-table">
                            <thead>
                                <tr>
                                    <th>编号</th>
                                    <th>商品名</th>
                                    <th>价格</th>
                                    <th>图片</th>
                                    <th>库存</th>
                                    <th>折扣</th>
                                    <th>评论</th>
                                    <th>详情</th>
                                    <th>操作</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($ress as $k => $v)
                                <tr class="@if($k % 2 == 0) odd @else even @endif">
                                    <td>{{$v->id}}</td>
                                    <td>{{$v->name}}</td>
                                    <td>{{$v->price}}</td>
                                    <td>{{$v->pic}}</td>
                                    <td>{{$v->count}}</td>
                                    <td>{{$v->discount}}</td>
                                    <td>{{$v->comments}}</td>
                                    <td>{{$v->det}}</td>
                                     <td class=" ">
                                        <a href="/home/seller/goodslist/{{$v->id}}/edit" class='btn btn-danger'>修改</a>

                                       <form action="/home/seller/goodslist/{{$v->id}}" method='post' style='display:inline'>
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button class='btn btn-warning'>删除</button>
                                       </form>
                            
                                    </td>
                                   
                                </tr>
                             @endforeach  
                            </tbody>
                        </table>
                    </div>
                </div>
@endsection