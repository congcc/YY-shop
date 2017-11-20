
@extends('admins.layout.admins')

@section('title','买家详情')

@section('content')
<h3>买家详情</h3>
<form action="" method='post'>
    <table border='0' width='400'> 
        <tr>
            <td align='right'>ID:</td>
            <td><input type="text" name='id' value=""></td>
        </tr>
        <tr>
            <td align='right'>管理员名称:</td>
            <td><input type="text" name='name' value=""></td>
        </tr>
        <tr>
            <td align='right'>真实姓名:</td>
            <td><input type="text" name='uname' value=""></td>
        </tr>
        <tr>
            <td align='right'>手机号:</td>
            <td><input type="text" name='phone' value=""></td>
        </tr>
        <tr>
            <td align='right'>邮箱:</td>
            <td><input type="text" name='email' value=""></td>
        </tr>
        <tr>
            <td align='right'>创建时间:</td>
            <td><input type="text" name='time' value=""></td>
        </tr>
        <tr>
            <td align='right'>登录时间:</td>
            <td><input type="text" name='last_time' value=""></td>
        </tr>
        <tr>
            <td align='right'>登录时间:</td>
            <td><input type="text" name='last_time' value=""></td>
        </tr><tr>
            <td align='right'>管理员名称:</td>
            <td><input type="text" name='name' value=""></td>
        </tr>
        <tr>
            <td align='right'>真实姓名:</td>
            <td><input type="text" name='uname' value=""></td>
        </tr>
        <tr>
            <td align='right'>手机号:</td>
            <td><input type="text" name='phone' value=""></td>
        </tr>
        <tr>
            <td align='right'>邮箱:</td>
            <td><input type="text" name='email' value=""></td>
        </tr>
        <tr>
            <td align='right'>创建时间:</td>
            <td><input type="text" name='time' value=""></td>
        </tr>
        <tr>
            <td align='right'>登录时间:</td>
            <td><input type="text" name='last_time' value=""></td>
        </tr>
        <tr>
            <td align='right'>登录时间:</td>
            <td><input type="text" name='last_time' value=""></td>
        </tr>
    </table>
</form>
<a href="/admin/buys"><button>返回</button></a>
@endsection

