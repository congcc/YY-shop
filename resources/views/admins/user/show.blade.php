
@extends('admins.layout.admins')

@section('title','管理员详情')

@section('content')
<h3>管理员详情</h3>
<form action="" method='post'>
    <table border='0' width='400'> 
        <tr>
            <td align='right'>ID:</td>
            <td><input type="text" name='id' value="{{$res->id}}"></td>
        </tr>
        <tr>
            <td align='right'>管理员名称:</td>
            <td><input type="text" name='name' value="{{$res->name}}"></td>
        </tr>
        <tr>
            <td align='right'>真实姓名:</td>
            <td><input type="text" name='uname' value="{{$res->uname}}"></td>
        </tr>
        <tr>
            <td align='right'>手机号:</td>
            <td><input type="text" name='phone' value="{{$res->phone}}"></td>
        </tr>
        <tr>
            <td align='right'>邮箱:</td>
            <td><input type="text" name='email' value="{{$res->email}}"></td>
        </tr>
        
        <tr>
            <td align='right'>登录时间:</td>
            <td><input type="text" name='last_time' value="{{$res->auth ? '开启' : '关闭'}}"></td>
        </tr>
    </table>
</form>
<a href="/admin/user"><button>返回</button></a>
@endsection