
@extends('admins.layout.admins')

@section('title','商品审核')

@section('content')
<h3>详情</h3>
<form action="" method='post'>
    <table border='1' width='1400'>
        <tr>
            <th>ID</th>
            <th>店铺名称</th>
            <th>商品名称</th>
            <th>商品分类</th>
            <th>商品图片</th>
            <th>价格</th>
            <th>审核</th>
            <th>上/下架</th>
        </tr>
        <tr>
        <td>{{$res->id}}</td>
        <td>{{$shop->sname}}</td>
        <td>{{$res->gname}}</td>
        <td>{{$gc->cate_name}}</td>
        <td><img src="{{$res->gimg}}" alt="" style="width: 150px;height: 80px;"></td>
        <td>{{$res->gprice}}$</td>
        <td>{{$res->gstate}}</td>
        <td>{{$res->gstatus}}</td>
        </tr>
    </table>
</form>
<a href="/admin/gfail"><button>返回</button></a>
@endsection