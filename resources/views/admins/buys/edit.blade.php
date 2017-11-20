@extends('admins.layout.admins')

@section('title','修改买家')

@section('content')
<h3>修改买家</h3>
<form action="/admin/buys/{{$res->id}}" method='post'>
	<table border='0' width='400'> 
		<tr>
			<td align='right'>ID:</td>
			<td><input type="text" name='id' value="{{$res->id}}"></td>
		</tr>
		<tr>
			<td align='right'>用户名:</td>
			<td><input type="text" name='username' value="{{$res->username}}"></td>
		</tr>
		<tr>
			<td align='right'>手机号:</td>
			<td><input type="text" name='phone' value="{{$res->phone}}"></td>
		</tr>
		<tr>
			<td align='right'>状态:</td>
			<!-- <td><input type="text" name='status' value="{{$res->status}}"></td> -->
			<td><input type="text" name='status' value="{{$res->status}}"></td>
		</tr>
		<tr>
			<td align='right'>用户\商户:</td>
			<td><input type="text" name='utype' value="{{$res->utype}}"></td>
		</tr>+
	</table>
    {{ csrf_field()}}

    {{method_field('PUT')}}
		<tr><button>修改</button></tr>
</form>

@endsection