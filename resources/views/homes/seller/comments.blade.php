@extends('homes.layout.seller')

@section('head')
<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/cmstyle.css" rel="stylesheet" type="text/css">

		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
		
		
		<link href="/homes/css/bostyle.css" rel="stylesheet" type="text/css">

		<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/admins/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/themer.css" media="screen">



@endsection

@section('title','评论中心')

@section('content')


<div class="user-comment">
	<!--标题 -->
	<div class="am-cf am-padding">
		<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">评价管理</strong> / <small>Manage&nbsp;Comment</small></div>
	</div>
	<hr>

	<div data-am-tabs="" class="am-tabs am-tabs-d2 am-margin">
<table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
            aria-describedby="DataTables_Table_1_info">
<thead>
    <tr role="row">
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
        rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
        style="width: 150px;">
            商品名称
        </th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
        style="width: 130px;">
            评论图片
        </th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
        rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
        style="width: 70px;">
            评论人
        </th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
        style="width: 80px;">
           评论内容
        </th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
        style="width: 80px;">
           服务评分
        </th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
        style="width: 80px;">
           价格评分
        </th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
        style="width: 80px;">
           质量评分
        </th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
        style="width: 70px;">
           操作
        </th>
       
    </tr>
</thead>
@foreach($arr as $k=>$v)

 <tr class="" rows="4">
    <td class="">
        {{$v->goods->gname}}
    </td>
    
    <td class=" ">
        <img src="{{$v->picture}}" alt="" style="width: 150px;height: 80px;">
    </td>
    <td class=" ">
        {{$v->gg->nickname}}
    </td>
    <td class="  ng-scope">
        {{$v->content}}
    </td>
    <td class=" ">
        {{$v->g_grade}}
    </td>
    <td class=" ">
        {{$v->s_grade}}
    </td>
    <td class=" ">
        {{$v->m_grade}}
    </td>
    <td class=" ">
        <div class="btn-group">
	        <div onclick="com({{$v->oid}},{{$v->gid}})" >  
	          <a  class="btn btn-small" style="width:100px;"><i>回复</i></a>
	        </div>
         	<div>   
	         	<form action="/home/seller/comments/{{$v->oid}}" method='post' style='display:inline'>
	                {{csrf_field()}}
	                {{method_field('PUT')}}
					<input type="hidden" name="status" value="{{$v->status}}">
	                <button class="btn btn-small" style="width:100px;">{{$v->status ? '解封' : '禁言'}}</button>
	    		</form>
    		</div>
        </div>
    </td>
</tr>

@endforeach	
</table>		
	</div>

</div>

	<script type="text/javascript">

    
    

    function com(oid,gid){
        

    layer.alert('<textarea rows=6 cols=80 class="review"></textarea>',{
          type: 1,
          btn: ['回复','取消'],
          skin: 'layui-layer-molv', //加上边框
          area: ['520px', '240px'], //宽高
                    yes:function(index){
              
               var content = $('.review').val();
        
                    $.post("{{url('/home/seller/comments')}}",{'_token':'{{ csrf_token() }}',content:content,oid:oid,gid:gid},function(data){
                        if(data){
                   
                     layer.alert('回复成功！', {icon: 1});}


    
                });


                

               layer.close(index);   
            }
          
         
          });



    }
    </script>   
@endsection