@extends('admins.layout.admins')

@section('title','添加新闻页面')

@section('content')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
            用户列表页面
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">
            <form action='/admin/user' method='get'>
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
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
            aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                        style="width: 70px;">
                            ID
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                        style="width: 150px;">
                            用户名
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                        style="width: 111px;">
                            手机号
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 80px;">
                            创建时间
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 80px;">
                            登录时间
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 80px;">
                            状态
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 110px;">
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                    @foreach($res as $k => $v)
                    <tr class="@if($k % 2 == 0) odd @else even @endif">
                        <td class="">
                            {{$v->id}}
                        </td>
                        <td class=" ">
                            {{$v->name}}
                        </td>
                        <td class=" ">
                            {{$v->phone}}
                        </td>
                        <td class=" ">
                            {{$v->time}}
                        </td>
                        <td class=" ">
                            {{$v->last_time}}
                        </td>
                        <td class=" ">
                            <button class='btn btn-info'>
                                {{$v->auth ? '开启' : '关闭'}}
                            </button>
                        </td>
                            <td class=" ">
                                <span class="btn-group">
                                    <a href="/admin/user/{{$v->id}}" class="btn btn-small"><i class="icol32-application-form-magnify"></i></a>
                                    <a href="/admin/user/{{$v->id}}/edit" class="btn btn-small"><i class="icol32-application-form-edit"></i></a>
                                    
                                    <form action="" method='post' style='display:inline' method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <a href="/admin/user/{{$v->id}}" class="btn btn-small"><i class="icol32-cross"></i></a>
                                   </form>
                                </span>
                            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="dataTables_info" id="DataTables_Table_1_info">
                Showing 1 to 10 of 57 entries
            </div>
            <div class="dataTables_paginate paging_full_numbers">
                {!! $res->appends($request->all())->render()!!}
            </div>
        </div>
    </div>
</div>




@endsection
