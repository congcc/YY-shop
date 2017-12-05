@extends('homes.layout.userbuy')


@section('head')

		<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/colstyle.css" rel="stylesheet" type="text/css">
@endsection

@section('title','个人中心')

@section('content')

					<div class="user-collection">
						<!--标题 -->
						<div class="am-cf am-padding">
							<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">我的收藏</strong> / <small>My&nbsp;Collection</small></div>
						</div>
						<hr>

						<div class="you-like">
							<div class="s-bar">
								我的收藏
								<a class="am-badge am-badge-danger am-round">降价</a>
								<a class="am-badge am-badge-danger am-round">下架</a>
							</div>
	
							
							<div class="s-content">
						@foreach ($res as $k => $v)
								<div class="s-item-wrap">
									<div class="s-item">

										<div class="s-pic">
											<a href="/homes/#" class="s-pic-link">
												<img src="{{$v->goods->gimg}}" alt="{{$v->goods->gname}}" title="{{$v->goods->gname}}" class="s-pic-img s-guess-item-img">
											</a>
										</div>
										<div class="s-info">
											<div class="s-title"><a href="/homes/#" title="{{$v->goods->gname}}">{{$v->goods->gname}}</a></div>
											<div class="s-price-box">
												<span class="s-price"><em class="s-price-sign">¥</em><em class="s-value">{{$v->goods->gprice}}</em></span>
												<span class="s-history-price"><em class="s-price-sign">¥</em><em class="s-value">68.00</em></span>
											</div>
											<div class="s-extra-box">
												
												<span class="s-sales">月销: {{$v->goods->xnumber}}</span>
											</div>
										</div>
										<div class="s-tp" >
									
											<a onclick="del({{$v->id}})"><span class="ui-btn-loading-before">删除</span></a>
											<i class="am-icon-shopping-cart"></i>
											<a href="/home/details/{{$v->gid}}/edit"><span class="ui-btn-loading-before buy")>立即购买</span></a>
											
		
										</div>
									</div>
								</div>

						@endforeach
							</div>

					

							<div class="s-more-btn i-load-more-item" data-screen="0"><i class="am-icon-refresh am-icon-fw"></i>更多</div>

						</div>

					</div>
@endsection
<script type="text/javascript">



function del(id)
{
	layer.alert('您确认删除该项内容吗？',{
            icon: 3,
            skin: 'layui-layer-molv'
            ,title: '删除提示'
            ,btn: ['确认','取消']
            ,yes:function(index){
                layer.close(index);
                $.get('/home/user/usercollect/'+id,function(data){
                	//console.log(data);
                   if(data=='1'){
                        layer.msg('删除成功！', {icon: 2});
                    }else if(data=='0'){
                        $('#'+id).remove();
                        layer.msg('删除失败！', {icon: 1});
                    }              
                });
            }            
        });
}


function yue (date) {

	 $.get('/home/user/{{$v->gid}}/edit',function(data){
                	           
                });
		

}
</script>

