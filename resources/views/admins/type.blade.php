@extends('admins.layout.admins')

@section('title','添加新闻页面')

@section('content') 
<div class="mws-panel grid_8 mws-collapsible">
<div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
            Browser Engines
        </span>
        <div class="mws-collapse-button mws-inset">
            <span>
            </span>
        </div>
    </div>
    <div class="mws-panel-inner-wrap">
        <div class="mws-panel-body no-padding">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                <form action="admin/type" method="get" >
                    <div id="DataTables_Table_0_length" class="dataTables_length">
                        <label>
                            Show    
                            <select name="num" size="1" aria-controls="DataTables_Table_1">
                               <option value="10" @if($f[0]->num == 10) selected="selected"  @endif>
                                10
                               </option>
                               
                               <option value="25" @if($f[0]->num == 25) selected="selected"  @endif> 
                                25
                                </option>

                                <option value="50">
                                50
                            </option> 
                               
                            </select>
                            entries
                        </label>
                    </div>
                    <div class="dataTables_filter" id="DataTables_Table_0_filter">
                        <label>
                            关键字：
                            <input type="text" aria-controls="DataTables_Table_0">
                        </label>
                        <button class="btn btn-danger">
                            搜索
                        </button>
                    </div>
                </form>
                <table class="mws-table mws-datatable dataTable" id="DataTables_Table_0"
                aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                            style="width: 128px;">
                                商品类型
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                            style="width: 173px;">
                                商品价格
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                            style="width: 158px;">
                                上架时间
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                            style="width: 111px;">
                                试用季节
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                            style="width: 111px;">
                                
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                            style="width: 111px;">
                                
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                            style="width: 80px;">
                                商品状态
                            </th>
                            <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1"
                            aria-label="" style="width: 112px;">
                            </th>
                        </tr>
                    </thead>
                   
                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                    @foreach ($res as $k => $v) 
                        @if ( $v->pid == 0 )

                        <tr class="odd p1">
                         <ul class="closed">
                            <li>
                                <td class="  sorting_1">
                                  {{ $v->cate_name }}
                                </td>
                            </li>
                          </ul>  
                            <td class=" sorting_1"></td>
                            <td class=" ">
                                
                            </td>
                            <td class=" ">
                                
                            </td>
                            <td class=" ">
                                
                            </td>
                             <td class=" ">
                                
                            </td>
                            <td class=" ">
                                <span class="badge badge-info">
                                    开启
                                </span>
                            </td>
                            <td class=" ">
                                <span class="btn-group">
                                    <a href="/admin/type/create" class="btn btn-small">
                                        添加父分区
                                    </a> 
                                    <a href="/admin/type/{{ $v->id }}" class="btn btn-small">
                                        修改父分区
                                    </a>
                                    <a href="/admin/typeson/{{$v->id}}" class="btn btn-small">
                                        添加子版块
                                    </a>

                                <form action="/admin/type/{{ $v->id}}" method='post'>     
                                    <button class="btn btn-small">    <i class="icon-trash">
                                        </i>    </button>
                                          {{ csrf_field() }}  
                                         {{ method_field('DELETE') }}
                                            
                                 </form>
                                 
                                </span>
                            </td>
                        </tr>
                            @endif
                       @foreach ($res as $sk => $sv)
                      @if ($sv->pid==$v->id) 
                       
                        <tr class="odd p2">
                            <td class=" sorting_1"></td>
                            <td class="  sorting_1">
                                {{ $sv->cate_name }}
                            </td>
                            <td class=" sorting_1"></td>
                            <td class=" ">
                                
                            </td>
                            <td class=" ">
                                
                            </td>
                            <td class=" ">
                                
                            </td>
                            <td class=" ">
                                <span class="badge badge-info">
                                    开启
                                </span>
                            </td>
                            <td class=" ">
                                <span class="btn-group">
                                
                                    <a href="/admin/typethree/{{$sv->id}}" class="btn btn-small">
                                        添加子版块
                                    </a>
                                    <a href="/admin/typeson/{{$sv->id}}/edit" class="btn btn-small">
                                        修改
                                    </a>

                                <form action="/admin/typeson/{{ $sv->id}}" method='post'>     
                                    <button class="btn btn-small">    <i class="icon-trash">
                                        </i>    </button>
                                          {{ csrf_field() }}  
                                         {{ method_field('DELETE') }}
                                            
                                 </form>
                                 
                                </span>
                            </td>
                        </tr>
                        
                        @foreach ( $sres as $tk => $tv)

                         @if( $sv->id == $tv->pid)

                            <tr class="odd p3">
                            <td class=" sorting_1"></td>
                            <td class=" sorting_1"></td>
                            <td class="  sorting_1">
                                {{ $tv->cate_name }}
                            </td>
                            <td class=" ">
                                
                            </td>
                            <td class=" ">
                                
                            </td>
                            <td class=" ">
                                
                            </td>
                            <td class=" ">
                                <span class="badge badge-info">
                                    开启
                                </span>
                            </td>
                            <td class=" ">
                                <span class="btn-group">
                                
                                    <a href="/admin/typethree/{{$tv->id}}/edit" class="btn btn-small">
                                        修改
                                    </a>

                                <form action="/admin/typethree/{{ $tv->id}}" method='post'>     
                                    <button class="btn btn-small">    <i class="icon-trash">
                                        </i>    </button>
                                          {{ csrf_field() }}  
                                         {{ method_field('DELETE') }}
                                            
                                 </form>
                                 
                                </span>
                            </td>
                        </tr>
                    
                   
                    @endif
                    @endforeach
                     @endif
                        @endforeach   
                     @endforeach   
                    </tbody>

                                 
                    
                </table>
                <div class="dataTables_info" id="DataTables_Table_0_info">
                   {!! $f->appends($request->all())->render() !!} 
                    
                </div>
                <div class="dataTables_paginate paging_two_button" id="DataTables_Table_0_paginate">
                    <a class="paginate_disabled_previous" tabindex="0" role="button" id="DataTables_Table_0_previous"
                    aria-controls="DataTables_Table_0">
                        Previous
                    </a>
                    <a class="paginate_enabled_next" tabindex="0" role="button" id="DataTables_Table_0_next"
                    aria-controls="DataTables_Table_0">
                        Next
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection