
@extends('admins.layout.admins')

@section('title','订单详情')

@section('content')
<h3>订单详情</h3>
<form action="" method='post'>
    <table border='1' width='1100'>
        <tr>
            <th>ID</th>
         	<th>订单号</th>
         	<th>订单用户</th>
         	<th>订单商品</th>
         	<th>商户地址</th>
            <th>订单生成时间</th>
            <th>支付时间</th>
            <th>发货时间</th>
            <th>完成时间</th>
            <th>支付单号</th>
            <th>订单状态</th>
                     
        </tr>
        <tr>
            <td>{{$orde->id}}</td>
            <td>{{$orde->o_code}}</td>
            <td>{{$user->username}}</td>
            <td></td>
            <td>{{$shop->saddress}}</td>
            <td>{{$ordes->ord_time}}</td>
            <td>{{$ordes->pay_time}}</td>
            <td>{{$ordes->mat_time}}</td>
            <td>{{$ordes->complete}}</td>
            <td>{{$ordes->pay_id}}</td>
            <td>{{$ordes->ostate}}</td>


        </tr>
    </table>
</form>
<a href="/admin/orders"><button>返回</button></a>
@endsection