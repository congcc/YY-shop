@extends('admins.layout.admins')

<!-- @section('title','商品添加页面') -->

@section('content')
		<h3>修改板块</h3>
		<form action="/admin/typethree" method='post'>
			<table border='0' width='400'> 
				<tr>
					<td align='right'>食品名称:</td>
					<td><input type="text" name='cate_name' value='{{ $thrname}}'></td>
				</tr>
				
				 <tr>
					<td align='right'>文件上传:</td> 
					<td><input type="file" name='profile'></td>
				</tr> 
				<tr>
					<td colspan='3' align='center'>
						<input type="submit" value="提交" />&nbsp;&nbsp;&nbsp;
						<input type="reset" value='重置' />
					</td>
					
				</tr>
					<input type="hidden" name="id" value="{{$id}}">
					{{ csrf_field() }}
					
			</table>
		</form>

@endsection  