@extends('homes.layout.seller')


@section('head')


@endsection

@section('title','个人中心')

@section('content')
@if($shop->sauth==3)
<a href="">您已成功提交了申请,请耐心等待后台审核通过</a>
				<!-- <script>
				layer.open({
			  	   type: 1
			      ,offset: 't' //具体配置参考：offset参数项
			      ,content: '<div style="padding: 20px 80px;">您已成功提交了申请,请耐心等待后台审核通过</div>'
			      ,btn: '关闭'
			      ,btnAlign: 'c' //按钮居中
			      ,shade: 0 //不显示遮罩
			      ,yes: function(){
			        layer.closeAll();
			      }
			    })

			</script> -->
@elseif($shop->sauth==0)
<a href="">因为您的违规操作,您的店铺已被冻结</a>
			<!-- <script>
				layer.open({
			  	   type: 1
			      ,offset: 't' //具体配置参考：offset参数项
			      ,content: '<div style="padding: 20px 80px;">因为您的违规操作,您的店铺已被冻结</div>'
			      ,btn: '关闭'
			      ,btnAlign: 'c' //按钮居中
			      ,shade: 0 //不显示遮罩
			      ,yes: function(){
			        layer.closeAll();
			      }
			    })

			</script> -->
@endif

@endsection
