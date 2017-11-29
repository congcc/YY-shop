
@extends('admins.layout.admins')

@section('title','订单详情')

@section('content')
<h3>订单详情</h3>
<form action="" method='post'>
    <table border='1' width='1400'>
        <tr>
            <th>ID</th>
            <th>昵称</th>
            <th>真实姓名</th>
            <th>生日</th>
            <th>性别</th>
            <th>头像</th>
            <th>身份证</th>
            <th>地址</th>
            <th>创建时间</th>
            <th>邮箱</th>
            <th>状态</th>
        </tr>
        <tr>
        <td>{{$res->id}}</td>
        <td>{{$res->nickname}}</td>
        <td>{{$res->truename}}</td>
        <td>{{$res->birth}}</td>
        <td>{{$res->sex}}</td>                 
        <td><img src="{{$res->user_pic}}" alt="" style="width: 150px;height: 80px;"></td>
        <td>{{$res->idcard}}</td>
        <td>{{$res->area}}</td>
        <td>{{$res->createtime_user}}</td>
        <td>{{$res->email}}</td>
        <td>{{$res->apply}}</td>
        </tr>
    </table>
</form>
<a href="/admin/check"><button>返回</button></a>
@endsection