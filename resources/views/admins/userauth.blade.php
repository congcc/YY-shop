@extends('admins.layout.admins')

@section('title','添加新闻页面')

@section('content')
		<h3>发布新闻</h3>
		<form action="action.php?action=add" method='post'>
			<table border='0' width='400'> 
				<tr>
					<td align='right'>标题:</td>
					<td><input type="text" name='title'></td>
				</tr>
				<tr>
					<td align='right'>关键字:</td>
					<td><input type="text" name='keywords'></td>
				</tr>
				<tr>
					<td align='right'>作者:</td>
					<td><input type="text" name='author'></td>
				</tr>
				<tr>
					<td align='right'>内容:</td>
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