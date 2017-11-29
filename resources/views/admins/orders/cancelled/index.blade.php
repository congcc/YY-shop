@extends('admins.layout.admins')

@section('title','代发货的订单列表')

@section('content')
<div class="mws-panel grid_8 mws-collapsible">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
            代发货的订单列表
        </span>
        <div class="mws-collapse-button mws-inset">
            <span>
            </span>
        </div>
    </div>
    <div class="mws-panel-inner-wrap">
        <div class="mws-panel-body no-padding">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                <div id="DataTables_Table_0_length" class="dataTables_length">
                    <label>
                        显示
                        <select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0">
                            <option value="10" selected="selected">
                                10
                            </option>
                            <option value="25">
                                25
                            </option>
                            <option value="50">
                                50
                            </option>
                            <option value="100">
                                100
                            </option>
                        </select>
                        条信息
                    </label>
                </div>
                <div class="dataTables_filter" id="DataTables_Table_0_filter">
                    <label>
                        Search:
                        <input type="text" aria-controls="DataTables_Table_0">
                    </label>
                </div>
                <table class="mws-table mws-datatable dataTable" id="DataTables_Table_0"
                aria-describedby="DataTables_Table_0_info">
                    <thead>
                        <tr role="row">
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                            style="width: 200px;">
                                ID
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                            style="width: 500px;">
                                订单号
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                            style="width: 200px;">
                                状态
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                            style="width: 200px;">
                                操作
                            </th>
                        </tr>
                        

                    </thead>
                    <tbody role="alert" aria-live="polite" aria-relevant="all">
                        @foreach($res as $k => $v)
                            <tr class="">
                                <td class="">
                                {{$v->id}}
                                </td>
                                <td class=" ">
                                {{$v->o_code}}
                                </td>
                                <td class=" ">
                                {{$v->ostate}}
                                </td>
                                
                                <td class=" ">
                                    <span class="btn-group">
                                        <a href="/admin/cancelled/{{$v->id}}" class="btn btn-small"><i>详情</i></a>
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                
                    </tbody>
                </table>
                
                <div class="dataTables_info" id="DataTables_Table_0_info">
                    Showing 1 to 10 of 20 entries
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

@section('js')
<script>
</script>
@endsection