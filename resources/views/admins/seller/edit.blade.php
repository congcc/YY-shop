
@extends('admins.layout.admins')

@section('title','卖家管理')

@section('content')
<h3>卖家详情</h3>
<form action="/admin/seller/{{$res->id}}" method='post'>
    <table border='0' width='400'> 
        <tr>
            <td align='right'>ID:</td>
            <td><input type="text" name='id' value="{{$res->id}}"></td>
        </tr>
        <tr>
            <td align='right'>店铺名称:</td>
            <td><input type="text" name='sname' value="{{$res->sname}}"></td>
        </tr>
        <tr>
            <td align='right'>店铺类型:</td>
            <td><input type="text" name='stype' value="{{$res->stype}}"></td>
        </tr>
        <tr>
            <td align='right'>店铺积分:</td>
            <td><input type="text" name='sclass' value="{{$res->sclass}}"></td>
        </tr>
        <tr>
            <td align='right'>商户地址:</td>
            <td><input type="text" name='saddress' value="{{$res->saddress}}"></td>
        </tr>
        <tr>
            <td align='right'>店铺资金:</td>
            <td><input type="text" name='swallet' value="{{$res->swallet}}"></td>
        </tr>
        <tr>
            <td align='right'>商户状态:</td>
            <td><input type="text" name='sauth' value="{{$res->sauth}}"></td>
        </tr>
    </table>
    {{ csrf_field()}}
    
    {{method_field('PUT')}}
        <button>修改</button>
</form>
@endsection