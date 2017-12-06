@extends('admins.layout.admins')

@section('title','买家详情')

@section('content')
<h3>买家详情</h3>
    <table border='1' width='1300'>
        <tr>
            <th>ID</th>
            <th>登录号</th>
            <th>手机号</th>
            <th>昵称</th>
            <th>姓名</th>
            <th>生日</th>
            <th>性别</th>
            <th>身份证</th>
            <th>地址</th>
            <th>用户创建时间</th>
            <th>最后登间</th>
            <th>用户钱包</th>
        </tr>
        <tr>
            <td>{{$res->id}}</td>
            <td>{{$res->username}}</td>
            <td>{{$res->phone}}</td>
            <td>{{$result->nickname}}</td>
            <td>{{$result->truename}}</td>
            <td>{{$result->birth}}</td>
            <td>{{$result->sex ? '男': '女'}}</td>
            <td>{{$result->idcard}}</td>
            <td>{{$result->area}}</td>
            <td>{{$result->createtime_user}}</td>
            <td>{{$result->last_user}}</td>
            <td>{{$result->wallet}}</td>
        </tr>
    </table>
<a href="/admin/buys"><button>返回</button></a>
@endsection
