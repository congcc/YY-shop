@extends('admins.layout.admins')

@section('title','管理人员')

@section('content')
<h3>人员详情</h3>
    <table border='1' width='1000'>
        <tr>
            <th>ID</th>
            <th>管理员名称</th>
            <th>真实姓名</th>
            <th>手机号</th>
            <th>邮箱</th>
            <th>状态</th>
        </tr>
        <tr>
            <td>{{$res->id}}</td>
            <td>{{$res->name}}</td>
            <td>{{$res->uname}}</td>
            <td>{{$res->phone}}</td>
            <td>{{$res->email}}</td>
            <td>{{$res->auth ? '开启' : '关闭'}}</td>
        </tr>
    </table>
<a href="/admin/user"><button>返回</button></a>
@endsection