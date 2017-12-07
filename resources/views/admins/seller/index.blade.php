@extends('admins.layout.admins')

@section('title','卖家管理')

@section('content')


<div class="mws-panel grid_8 mws-collapsible">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
            卖家列表
        </span>
        <div class="mws-collapse-button mws-inset">
            <span>
            </span>
        </div>
    </div>
    <div class="mws-panel-inner-wrap">
        <div class="mws-panel-body no-padding">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                <form action='/admin/seller' method='get'>
                <div id="DataTables_Table_1_length" class="dataTables_length">
                    <label>
                        显示
                        <select name="num" size="1" aria-controls="DataTables_Table_1">
                            <option value="10" @if(isset($_GET[ 'num']) ? $_GET[ 'num'] : '10') selected="selected"
                            @endif>
                                10
                            </option>
                            25 {{--
                            <option value="25" @if($request->
                                num == '25') selected="selected" @endif>
                            </option>
                            --}} {{--
                            <option value="50" @if($_GET[ 'num']=='50' ) selected="selected" @endif>
                                50
                            </option>
                            --}}
                        </select>
                        条数据
                    </label>
                </div>
                <div class="dataTables_filter" id="DataTables_Table_1_filter">
                    <label>
                        关键字:
                        <input type="text" name='search' aria-controls="DataTables_Table_1" value="{{isset($_GET['search']) ? $_GET['search'] : '' }}">
                    </label>
                    <button class='btn btn-danger'>
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
                            style="width: 60px;">
                                ID
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                            style="width: 120px;">
                               店铺名称
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                            style="width: 80px;">
                                积分
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                            style="width: 80px;">
                                店铺图片                            
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                            style="width: 150px;">
                                商户地址                            
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                            style="width: 80px;">
                                商户状态
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                            style="width: 80px;">
                                店铺资金
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                            style="width: 90px;">
                                操作
                            </th>
                        
                    </thead>
                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                 @foreach($req as $k => $v)

                    <tr class="@if($k % 2 == 0) odd @else even @endif">
                        <td class="">
                            {{$v->id}}
                        </td>
                        <td class=" ">
                            {{$v->sname}}
                        </td>
                        <td class=" ">
                            {{$v->sclass}}
                        </td>

                        <td class=" ">
                            <img src="{{$v->simg}}" alt="" >
                        </td>

                        <td class=" ">
                            {{$v->saddress}}
                        </td>

                        <td class=" ">
                            <a href="/admin/sellerdis/{{$v->id}}">
                                <button id="auth" onclick="return confirm('您确定要{{$v->sauth ? '关闭' : '开启'}}吗?')" >
                                    {{$v->sauth ? '开启' : '关闭'}}
                                    {{method_field('PUT')}}
                                </button>
                            </a>
                        </td>
                        <td class=" ">
                            {{$v->swallet}}$
                        </td>
                        <td class=" ">
                            <span class="btn-group">
                                <a href="/admin/seller/{{$v->id}}" class="btn btn-small"><i>详情</i></a>
                                <a href="/admin/seller/{{$v->id}}/edit" class="btn btn-small"><i>修改</i></a>
                               <form action="/admin/seller/{{$v->id}}" onclick="return confirm('您确定要删除吗?')" method='post' style='display:inline' method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-small"><i>删除</i></button>
                               </form>
                            </span>
                        </td>
                    </tr>
                @endforeach

                    </tbody>
                </table>
                
                <div class="dataTables_info" id="DataTables_Table_0_info">
                    Showing 1 to 10 of 20 entries
                </div>
                <div class="dataTables_paginate paging_full_numbers">
                    {!! $res->appends($request->all())->render()!!}
                </div>
            </div>
        </div>
    </div>
</div>


@endsection