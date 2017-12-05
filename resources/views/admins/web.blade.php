@extends('admins.layout.admins')

@section('title','添加新闻页面')

@section('content')
		
	 <tbody role="alert" aria-live="polite" aria-relevant="all">
                    @foreach ($res as $k => $v) 
                        

                        <tr class="odd p1">
                         <ul class="closed">
                            <li>
                                <td class="  sorting_1">
                              <a href="/admin/web/{{$v->id}}/edit"><button id="auth">{{ $v->w_status }}</button></a>   
                                </td>
                            </li>
                          </ul>  
                         </tr>
                        </tbody>
					</table>  
				@endforeach	
	

@endsection