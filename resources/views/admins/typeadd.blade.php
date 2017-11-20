@extends('admins.layout.admins')

@section('title','商品添加页面')

@section('content')
		<h3>添加商品</h3>
		<form action="action.php?action=add" method='post'>
			<table border='0' width='400'> 
				<tr>
					<td align='right'>类型:</td>
					<td><input type="text" name='title'></td>
				</tr>
				<tr>
					<td align='right'>试用季节:</td>
					<td><input type="text" name='keywords'></td>
				</tr>
				<tr>
					<td align='right'>商家名称:</td>
					<td><input type="text" name='author'></td>
				</tr>
				<tr>
					<td align='right'>商品信息:</td>
					<td><textarea name="content" id="" cols="30" rows="5" width='300px' height='200px' style='resize:none'></textarea></td>
				</tr>
				<tr>
					<td colspan='3' align='center'>
						<input type="submit" value='添加' />&nbsp;&nbsp;&nbsp;
						<input type="reset" value='重置' />
					</td>
					
				</tr>

			</table>
		</form>

@endsection