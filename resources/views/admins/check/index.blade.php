@extends('admins.layout.admins')

@section('title','商家入驻列表')

@section('content')
<div class="mws-panel grid_8 mws-collapsible">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
            申请中
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
                <table class="mws-table mws-datatable dataTable" id="DataTables_Table_0"
                aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                            style="width: 128px;">
                                ID
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                            style="width: 173px;">
                               昵称
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                            style="width: 158px;">
                                真实名称
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                            style="width: 158px;">
                                头像
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                            style="width: 80px;">
                                性别
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                            style="width: 80px;">
                                状态
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                            style="width: 80px;">
                                操作
                            </th>
                        </tr>
                        

                    </thead>
                    <tbody role="alert" aria-live="polite" aria-relevant="all">

                      @foreach($req as $k => $v)
                    <tr class="@if($k % 2 == 0) odd @else even @endif">
                        <td class="">
                        {{$v->id}}
                        </td>
                        <td class=" ">
                            {{$v->nickname}}
                        </td>
                        <td class=" ">
                            {{$v->truename}}
                        </td>
                        <td>
                            <img src="{{$v->user_pic}}" alt="" style="width: 150px;height: 80px;">
                        </td>
                        
                        <td class=" ">
                            {{$v->sex ? '女': '男'}}
                        </td>
                        <td class=" ">
                            {{$v->apply}}
                        </td>
                        <td class=" ">
                            <span class="btn-group">
                                <a href="/admin/check/{{$v->id}}" class="btn btn-small"><i>详情</i></a>
                                <form action="/admin/check/{{$v->id}}" onclick="return confirm('您确定要通过申请吗?')" method='post' style='display:inline' method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button class="btn btn-small"><i>通过</i></button>
                               </form>
                                <a href="/admin/check/{{$v->id}}/edit" class="btn btn-small" onclick="return confirm('您确定要不通过申请吗?')" ><i>不通过</i></a>
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
                    {!! $uinfo->appends($request->all())->render()!!}
                </div>
        </div>
    </div>
</div>


@endsection

@section('js')
@endsection