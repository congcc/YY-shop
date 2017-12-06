
@extends('admins.layout.admins')

@section('title','商家入驻')

@section('content')
<h3>详情</h3>
<form action="" method='post'>
    <table border='1' width='1300'>
        <tr>
            <th>ID</th>
            <th>店铺名称</th>
            <th>积分</th>
            <th>店铺图片</th>
            <th>店铺地址</th>
            <th>qq</th>
            <th>状态</th>
        </tr>
        <tr>
            <td>{{$req->id}}</td>
            <td>{{$req->sname}}</td>
            <td>{{$req->sclass}}</td>
            <td><img src="{{$req->simg}}" alt="" style="width: 150px;height: 80px;"></td>
            <td>{{$req->saddress}}</td>
            <td>{{$req->qq}}</td>
            <td>{{$req->sauth}}</td>
        </tr>
    </table>
</form>
<a href="/admin/cfail"><button>返回</button></a>
@endsection