@extends('admins.layout.admins')

@section('title','管理人员')

@section('content')
<h3>添加管理员</h3>
@if (count($errors) > 0)
    <div class="mws-form-message error">
        <ul>
            @foreach ($errors->all() as $error)
                <li style='font-size:17px;list-style:none'>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/admin/user" class="mws-form" method='post'>
    <div class="mws-form-inline">
        <div class="mws-form-row">
            <label class="mws-form-label">管理员名称:</label>
            <div class="mws-form-item">
                <input type="text" name='name'>
            </div>
        </div>
        <div class="mws-form-row">
            <label class="mws-form-label">密码:</label>
            <div class="mws-form-item">
                <input type="password" name='key'>
            </div>
        </div>
        <div class="mws-form-row">
            <label class="mws-form-label">手机号:</label>
            <div class="mws-form-item">
                <input type="text" name='phone'>
            </div>
        </div>
        <div class="mws-form-row">
            <label class="mws-form-label">状态</label>
            <div class="mws-form-item clearfix">
                <ul class="mws-form-list inline">
                    <li>
                        <input type="radio" name='auth' value='1' checked>
                        <label>开启</label>
                    </li>
                    <li>
                        <input type="radio" name='auth' value='0'>
                        <label>禁止 </label>
                    </li>
                </ul>
            </div>
        </div>
        <input type="hidden" name="time" value="{{time()}}">
        <input type="hidden" name="time" value="">
    </div>
    {{ csrf_field()}}
    <input type="submit" class="btn btn-danger" onclick="return confirm('你确定要添加管理员吗?')" value="添加">
</form>
@endsection