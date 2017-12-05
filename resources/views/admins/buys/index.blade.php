@extends('admins.layout.admins')

@section('title','买家列表')

@section('content')
<div class="mws-panel grid_8 mws-collapsible">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
            买家列表
        </span>
        <div class="mws-collapse-button mws-inset">
            <span>
            </span>
        </div>
    </div>
    <div class="mws-panel-inner-wrap">
        <div class="mws-panel-body no-padding">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
                <form action='/admin/buys' method='get'>
                    <div id="DataTables_Table_1_length" class="dataTables_length">
                        <label>
                            显示
                            <select name="num" size="1" aria-controls="DataTables_Table_1">
                                <option value="10" @if($request->num == '10') selected = "selected"
                                @endif
                                    10
                                </option>
                                25 {{--
                                <option value="25" @if($request->num == '25') selected = "selected"
                                @endif>
                                </option>
                                --}} {{--
                                <option value="50" @if($request->num == '50') selected = "selected"
                                @endif>
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
                               用户名
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                            style="width: 158px;">
                                手机号码
                            </th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                            style="width: 80px;">
                                用户\商户
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
                            {{$v->username}}
                        </td>
                        <td class=" ">
                            {{$v->phone}}
                        </td>
                        
                        <td class=" ">
                            {{$v->status ? '用户' : '商户'}}
                        </td>
                        <td class=" ">
                            <a href="/admin/buyss/{{$v->id}}" onclick="return confirm('您确定要修改吗?')">
                                <button id="auth">
                                    {{$v->status ? '关闭' : '开启'}}
                                </button>
                            </a>
                        </td>
                        <td class=" ">
                            <span class="btn-group">
                                <a href="/admin/buys/{{$v->id}}" class="btn btn-small"><i>详情</i></a>
                                <a href="/admin/buys/{{$v->id}}/edit" class="btn btn-small"><i>修改</i></a>
                               <form action="/admin/buys/{{$v->id}}" onclick="return confirm('您确定要删除吗?')" style='display:inline' method="post">
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

@section('js')
<script>
    $("#auth").click(function() 
    {
        var suth = $('#auth').val();
        $.ajax({
            url:"admin/buys",
            dataa:{'1'},
            type:"GET",
            dataType:"JSON",
            success: function(data)
            {
                if(data.trim() =="OK")
                {
                    alert("ok");
                } else {
                    alert("no");
                }
            }
        });
    })
</script>
@endsection