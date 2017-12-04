@extends('admins.layout.admins')

@section('title','添加新闻页面')

@section('content')
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="./Public/css/css.css" type="text/css" rel="stylesheet" />
<link href="./Public/css/main.css" type="text/css" rel="stylesheet" />
<link rel="shortcut icon" href="./Public/images/main/favicon.ico" />
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(./Public/images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(./Public/images/main/add.jpg) no-repeat 0px 6px; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(./Public/images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9; font-size:14px; font-weight:bold; padding:10px 10px 10px 0; width:120px;}
.main-for{ padding:10px;}
.main-for input.text-word{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; padding:0 10px;}
.main-for select{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666;}
.main-for input.text-but{ width:100px; height:40px; line-height:30px; border: 1px solid #cdcdcd; background:#e6e6e6; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#969696; float:left; margin:0 10px 0 0; display:inline; cursor:pointer; font-size:14px; font-weight:bold;}
#addinfo a{ font-size:14px; font-weight:bold; background:url(./Public/images/main/addinfoblack.jpg) no-repeat 0 1px; padding:0px 0 0px 20px; line-height:45px;}
#addinfo a:hover{ background:url(./Public/images/main/addinfoblue.jpg) no-repeat 0 1px;}
</style>
</head>
<body>
<!--main_top-->

<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：友情链接&nbsp;&nbsp;>&nbsp;&nbsp;添加连接</td>
  </tr>
  <tr>
    <td align="left" valign="top" id="addinfo">
    <a href="section_add.html" target="mainFrame" onFocus="this.blur()" class="add">新增友情连接</a>
    </td>
  </tr>
    <tr>
      <td align="left" valign="top">
        <form action="/admin/flink" enctype="multipart/form-data" method="post">
          <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
            <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
              <td align="right" valign="middle" class="borderright borderbottom bggray">链接标题：</td>
              <td align="left" valign="middle" class="borderright borderbottom main-for">
                <input type="text" name="fs_name" value="" class="text-word">
              </td>
            </tr>
            <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
              <td align="right" valign="middle" class="borderright borderbottom bggray">链接LOGO：</td>
              <td align="left" valign="middle" class="borderright borderbottom main-for">
                <input type="file" name="fs_image" value="">
              </td>
            </tr>
            <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
              <td align="right" valign="middle" class="borderright borderbottom bggray">链接状态：</td>
              <td align="left" valign="middle" class="borderright borderbottom main-for">
                <select name="fs_auth" id="level">
                  <option value="1" >&nbsp;&nbsp;开启</option>
                  <option value="0" >&nbsp;&nbsp;关闭</option>
                </select>
              </td>
            </tr>
           
            <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
              <td align="right" valign="middle" class="borderright borderbottom bggray">链接地址：</td>
              <td align="left" valign="middle" class="borderright borderbottom main-for">
                <input type="text" name="fs_link" value="" class="text-word">
              </td>
            </tr>
            
           <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
              <td align="right" valign="middle" class="borderright borderbottom bggray">&nbsp;</td>
              <td align="left" valign="middle" class="borderright borderbottom main-for">
                <input name="" type="submit" value="提交" class="text-but">
                <input name="" type="reset" value="重置" class="text-but"></td>
            </tr>

                    {{ csrf_field()}}
          </table>
        </form>
      </td>
    </tr>
</table>
@endsection