@extends('admins.layout.admins')

<!-- @section('title','商品添加页面') -->

@section('content')
		<h3>添加父板块</h3>
		<form action="/admin/type" method='post'>
			<table border='0' width='400'> 
				<tr>
					<td align='right'>食品类型:</td>
					<td><input type="text" name='cate_name'></td>
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
					{{ csrf_field() }}
			</table>
		</form>

@endsection