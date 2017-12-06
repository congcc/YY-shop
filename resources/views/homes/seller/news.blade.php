@extends('homes.layout.seller')

@section('head')
<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/cmstyle.css" rel="stylesheet" type="text/css">

		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
		
		
		<link href="/homes/css/bostyle.css" rel="stylesheet" type="text/css">

		<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/admins/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/themer.css" media="screen">



@endsection

@section('title','评论中心')

@section('content')


<div class="user-comment">
	<!--标题 -->
	<div class="am-cf am-padding">
		<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">评价管理</strong> / <small>Manage&nbsp;Comment</small></div>
	</div>
	<hr>

	<div data-am-tabs="" class="am-tabs am-tabs-d2 am-margin">
<table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1"
            aria-describedby="DataTables_Table_1_info">
<thead>
    <tr role="row">
       
        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
        rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
        style="width: 150px;">
            用户电话
        </th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
        style="width: 130px;">
            昵称
        </th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
        rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
        style="width: 70px;">
            收货地址
        </th>
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
        style="width: 80px;">
           订单号
        </th>
        
       
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
        style="width: 70px;">
           操作
        </th>
       
    </tr>
</thead>


 

</table>		
	</div>

</div>

	<script type="text/javascript">

	
    


	</script>			
@endsection