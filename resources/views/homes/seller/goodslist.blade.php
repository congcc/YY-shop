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

<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
        <link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

        <link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
        <link href="/homes/css/footstyle.css" rel="stylesheet" type="text/css">
@endsection

@section('title','商品列表')

@section('content')


@foreach( $goods as $k=>$v)

    <div class="goods">
        <div class="goods-date" data-date="2015-12-21">
            
            <s class="line"></s>
        </div>

        <div class="goods-box first-box">
            <div class="goods-pic">
                <div class="goods-pic-box">
                    <a class="goods-pic-link" target="_blank" href="#" title="意大利费列罗进口食品巧克力零食24粒  进口巧克力食品">
                        <img src="{{$v->gimg}}" class="goods-img"></a>
                </div>
                <form action="/home/seller/goodslist/{{$v->id}}" method='post'>
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <button><a class="goods-delete" href="javascript:void(0);"><i class="am-icon-trash"></i></a></button>
                
                </form>
                <div class="goods-status goods-status-show" ><span class="desc">{{$v->gstatus ? '热卖中' : '商品已下架'}}</span></div>
            </div>

            <div class="goods-attr">
                <div class="good-title">
                    <a class="title" href="#" target="_blank">{{$v->gname}}</a>
                </div>
                <div class="goods-price">
                    <span class="g_price">                                    
                    <span>¥</span><strong>{{$v->gprice}}</strong>
                    </span>
                    <span class="g_price g_price-original">                                    
                    <span>¥</span><strong>142</strong>
                    </span>
                </div>
                <div class="clear"></div>
                <div class="goods-num">
                    <div class="match-recom">
                    <form action="/home/seller/goodslist/{{$v->id}}" method='post' style='display:inline'>
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                <button class='btn btn-danger'>上架</button>
                    </form>
                        <a href="/home/seller/goodslist/{{$v->id}}/edit" ><button class='btn btn-danger'>下架</button></a>
                       
                        <i><em></em><span></span></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection