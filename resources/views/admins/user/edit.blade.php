@extends('admins.layout.admins')

@section('title','管理人员')

@section('content')
<h3>修改管理员</h3>
<form action="/admin/user/{{$res->id}}" method='post'>
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
			<td align='right'>email:</td>
			<td><input type="text" name='email' value="{{$res->email}}"></td>
		</tr>
		<tr>
			<td align='right'>状态:</td>
			<td><input type="text" name='auth' value="{{$res->auth}}"></td>
		</tr>
	</table>
    {{ csrf_field()}}
    
    {{method_field('PUT')}}
		<button>修改</button>
</form>
@endsection