@extends('admins.layout.admins')

@section('title','添加子板块')

@section('content')
		<h3>添加子板块</h3>
		<form action="/admin/type" method="post" enctype="multipart/form-data"> 
			<table border='0' width='400'> 
			
				<tr>
					<td align='right'>一级分类:</td>
					<td><input type="text" name='cate_name' value="{{ $fcate_name}}"></td>
					
				</tr>
				<tr>
					<td align='right'>二级分类:</td>
					<td><input type="text" name='cate_name' value=""></td>
				</tr>
				<tr>
					<td align='right'>文件上传:</td> 
					<td><input type="file" name='profile'></td>
				</tr>
				<tr>
					<td>
					<a href="" class="btn btn-small">
                          添加子版块
                    </a>
                    </td>
				</tr>
				<tr>
					<td colspan='3' align='center'>
						<input type="submit" value='添加' />&nbsp;&nbsp;&nbsp;
						<input type="reset" value='重置' />
					</td>
					
				</tr>
					<input type="hidden" name='pid' value="{{$id}}">
				{{ csrf_field()}}

			</table>
		</form>

@endsection