
@extends('admins.layout.admins')

@section('title','买家详情')

@section('content')
<h3>买家详情</h3>
<form action="" method='post'>
    <table border='0' width='400'>
        <tr>
            <td align='right'>ID:</td>
            <td><input type="text" name='id' value="{{$res->id}}"></td>
        </tr>
        <tr>
            <td align='right'>登录号:</td>
            <td><input type="text" name='username' value="{{$res->username}}"></td>
        </tr>
        <tr>
            <td align='right'>手机号:</td>
            <td><input type="text" name='phone' value="{{$res->phone}}"></td>
        </tr>
        <tr>
            <td align='right'>姓名:</td>
            <td><input type="text" name='truename' value="{{$result->truename}}"></td>
        </tr>
        <tr>
            <td align='right'>昵称:</td>
            <td><input type="text" name='nickname' value="{{$result->nickname}}"></td>
        </tr>
        <tr>
            <td align='right'>生日:</td>
            <td><input type="text" name='birth' value="{{$result->birth}}"></td>
        </tr>
        <tr>
            <td align='right'>性别:</td>
            <td><input type="text" name='sex' value="{{$result->sex ? '男': '女'}}"></td>
        </tr><tr>
            <td align='right'>身份证:</td>
            <td><input type="text" name='idcard' value="{{$result->idcard}}"></td>
        </tr>
        <tr>
            <td align='right'>地址:</td>
            <td><input type="text" name='area' value="{{$result->area}}"></td>
        </tr>
        <tr>
            <td align='right'>用户创建时间:</td>
            <td><input type="text" name='createtime_user' value="{{$result->createtime_user}}"></td>
        </tr>
        <tr>
            <td align='right'>最后登间:</td>
            <td><input type="text" name='last_user' value="{{$result->last_user}}"></td>
        </tr>
        <tr>
            <td align='right'>用户钱包:</td>
            <td><input type="text" name='wallet' value="{{$result->wallet}}"></td>
        </tr>
        <tr>
            <td align='right'>用户\商户:</td>
            <td><input type="text" name='utype' value="{{$res->utype ? '用户' : '商户'}}"></td>
        </tr>
    </table>
</form>
<a href="/admin/buys"><button>返回</button></a>
@endsection

