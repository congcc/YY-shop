@extends('admins.layout.admins')

@section('title','实名认证')

@section('content')
<h3>详情</h3>
    <table border='1' width='1100'>
        <tr>
            <th>ID</th>
            <th>昵称</th>
            <th>姓名</th>
            <th>生日</th>
            <th>性别</th>
            <th>身份证</th>
            <th>地址</th>
            <td>创建时间</td>
            <td>email</td>
        </tr>
        <tr>
        	<td>{{$req->id}}</td>
        	<td>{{$req->nickname}}</td>
        	<td>{{$req->truename}}</td>
        	<td>{{$req->birth}}</td>
        	<td>{{$req->sex ? '女' : '男'}}</td>
        	<td>{{$req->idcard}}</td>
        	<td>{{$req->area}}</td>
        	<td>{{date('Y-m-d H:i:s',time($req->createtime_user))}}</td>
        	<td>{{$req->email}}</td>
        </tr>
    </table>
<a href="/admin/isucc"><button>返回</button></a>
@endsection
