@extends('homes.layout.userbuy')


@section('head')

    <meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/admins/plugins/colorpicker/colorpicker.css" media="screen">

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

		<link href="/homes/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css">
		<link href="/homes/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css">

		<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/cmstyle.css" rel="stylesheet" type="text/css">

		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js"></script>
		<meta name="_token" content="{{ csrf_token() }}"/>
		<style type="text/css"> 

<!--

body{font-size:12px;}

ul{padding:0;margin:0;}

.star_rating {list-style:none;margin:-1px 0 0 -1px; padding:0; width:70px; height:12px; position:relative; background:url(http://demo.jb51.net/demoimg/rating_stars.gif) 0 0 repeat-x; overflow:hidden;font-size:0;}

.star_rating li{padding:0;margin:0;float:left;}

.star_rating li a{display:block;width:14px;height:12px;text-decoration:none;text-indent:-9000px;z-index:20;position:absolute;padding:0;margin:0;}

.star_rating li a:hover{background:url(http://demo.jb51.net/demoimg/rating_stars.gif) 0 12px;z-index:2;left:0;}

.star_rating a.one_star{left:0;}

.star_rating a.one_star:hover{width:14px;}

.star_rating a.two_stars{left:14px;}

.star_rating a.two_stars:hover{width:28px;}

.star_rating a.three_stars{left:28px;}

.star_rating a.three_stars:hover{width:42px;}

.star_rating a.four_stars{left:42px;}

.star_rating a.four_stars:hover{width:56px;}

.star_rating a.five_stars{left:56px;}

.star_rating a.five_stars:hover{width:70px;}

.star_rating li.current_rating{background:url(http://demo.jb51.net/demoimg/rating_stars.gif) 0 24px;position:absolute;height:12px;display:block;text-indent:-9000px;z-index:1;left:0;}

#www_zzjs_net{margin:0 0 20px 20px;}

#www_zzjs_net p{margin:20px 0 5px 0;}

-->

</style>

@endsection

@section('title','个人中心')

										

 
@section('content')
<form action="/home/user/ucomments" method="post" enctype="multipart/form-data">
{{csrf_field()}}

		<!--标题 -->
<div class="am-cf am-padding">
	<div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">评价管理</strong> / <small>Manage&nbsp;Comment</small></div>
</div>
<hr>

<div class="am-tabs am-tabs-d2 am-margin" data-am-tabs="">


	<div class="am-tabs-bd" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
		<div class="am-tab-panel am-fade am-in am-active" id="tab1">
		
			<div class="comment-main">
				<div class="comment-list">
					<ul class="item-list">

						
						<div class="comment-top">
																				
						

						
						<div class="mws-form-row">
              <label class="mws-form-label" style="margin-bottom:15px">上传商品图片</label>
              <div class="mws-form-item" style="margin-bottom:30px">
                  <div style="position: relative;" class="fileinput-holder">
                  <input type="text" readonly="readonly" style="width: 200px; padding-right: 85px;" class="fileinput-preview" placeholder="未选择图片..."><span style="display:block; overflow: hidden; position: absolute; top: 0; left:200px; cursor: pointer;" type="button" class="fileinput-btn btn">Browse...<input type="file" class="required" name="picture" style="position: absolute; top: 0px; right: 0px; margin: 0px; cursor: pointer; font-size: 999px; opacity: 0; z-index: 999;"></span></div>
                    <label style="display:none" generated="true" class="error" for="picture"></label>
                </div>
            </div>
						
            <div class="mws-form-row" style="float:left;">
            <div>
            <label class="mws-form-label" style="margin-bottom:20px;">评价:</label>
            </div>
            <textarea name="content" cols="80" rows="10" style="margin-bottom:20px;"></textarea>
            </div>
             <div id="www_zzjs_net" star_width="14" style="float:right;margin-top:30px;margin-right:200px">

  <p>服务</p>

  <ul class="star_rating">

   <li style="display:none;">

    <input type="text" name="g_grade" value="" />

   </li>

   <li class="current_rating">default level</li>

   <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" title="1 of 5 stars" class="one_star">1</a></li>

   <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" title="2 of 5 stars" class="two_stars">2</a></li>

   <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" title="3 of 5 stars" class="three_stars">3</a></li>

   <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" title="4 of 5 stars" class="four_stars">4</a></li>

   <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" title="5 of 5 stars" class="five_stars">5</a></li>

  </ul>

  <p>价格</p>

  <ul class="star_rating">

   <li style="display:none;">

    <input type="text" name="s_grade" value="" />

   </li>

   <li class="current_rating">default level</li>

   <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" title="1 of 5 stars" class="one_star">1</a></li>

   <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" title="2 of 5 stars" class="two_stars">2</a></li>

   <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" title="3 of 5 stars" class="three_stars">3</a></li>

   <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" title="4 of 5 stars" class="four_stars">4</a></li>

   <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" title="5 of 5 stars" class="five_stars">5</a></li>

  </ul>

  <p>质量</p>

  <ul class="star_rating">

   <li style="display:none;">

    <input type="text" name="m_grade" value="" />

   </li>

   <li class="current_rating">default level</li>

   <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" title="1 of 5 stars" class="one_star">1</a></li>

   <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" title="2 of 5 stars" class="two_stars">2</a></li>

   <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" title="3 of 5 stars" class="three_stars">3</a></li>

   <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" title="4 of 5 stars" class="four_stars">4</a></li>

   <li><a href="#" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" rel="external nofollow" title="5 of 5 stars" class="five_stars">5</a></li>

  </ul>

 </div>
            
              

              <div class="item-info" style="float:right;">
                <div>
                  <p class="info-little"><span>颜色：12#玛瑙</span> <span>包装：裸装</span> </p>
                  <p class="info-time">{{time()}}</p>
                  <input type="hidden" name="gid" value="{{$id}}">
                  <input type="hidden" name="time" value="{{time()}}">
                  <input type="hidden" name="oid" value="{{$oid}}">
                  <input type="hidden" name="uid" value="{{$uid}}">
                </div>
              </div>
            
						</div>
            
					</ul>

				</div>
			</div>
			
		</div>
		
	</div>
</div>





	<input type="submit" value="提交评价" class="am-btn am-btn-danger anniu"/>				

</form>
	

<script type="text/javascript">
	

	function __start(){

 var initialize_width=0;

 if(document.getElelmentById){return false};

 if(document.getElementsByTagName==null){return false;}

 var startLevelObj=document.getElementById("www_zzjs_net")

 if(startLevelObj==null){return false;}

 initialize_width=parseInt(startLevelObj.getAttribute("star_width"),10);

 if(isNaN(initialize_width) || initialize_width==0){return false;}

 var ul_obj=startLevelObj.getElementsByTagName("ul");

 if(ul_obj.length<1){return false;}

 var length=ul_obj.length;

 var li_length=0;

 var a_length=0;

 var li_obj=null;

 var a_obj=null;

 var defaultInputObj=null;

 var defaultValue=null;

 for(var i=0;i<length;i++){

  li_obj=ul_obj[i].getElementsByTagName("li");

  li_length=li_obj.length;

  if(li_length<0){return false;}

  //获取默认值

  defaultInputObj=li_obj[0].getElementsByTagName("input");if(!defaultInputObj){return false;}

  defaultValue=parseInt(defaultInputObj[0].value,10);

  if(!isNaN(defaultValue) && defaultValue!=0){

   //alert("有初始值!");

   //li_obj[1].style.width=initialize_width*defaultValue+"px";

   //defaultValue=0;

  }

  for(var j=0;j<li_length;j++){

   a_obj=li_obj[j].getElementsByTagName("a");

   if(a_obj.length<1){continue;}

   if(a_obj[0].className.indexOf("star")>0){

    a_obj[0].onclick=function(){

     return give_value(this);

    }

    a_obj[0].onfocus=function(){

     this.blur();

    }

   }

  }

 }

}

function give_value(obj){

 var status=true;

 var parent_obj=obj.parentNode;

 var i=0;

 while(status){

  i++;

  if(parent_obj.nodeName=="UL"){break;}

  parent_obj=parent_obj.parentNode;

  if(i>1000){break;}//防止找不到ul发生死循环

 }

 var hidden_input=parent_obj.getElementsByTagName("input")[0];

 if(hidden_input.length<1){/*alert("sorry?\nprogram error!")*/;}

 var txt=obj.firstChild.nodeValue;//确保不能存在空格哦，因为这里用的firstChild

 if(isNaN(parseInt(txt,10))){/*alert('level error!')*/;return false;}

 hidden_input.setAttribute("value",txt.toString());

 //固定选中状态,先找到初始化颜色那个li

 var current_li=parent_obj.getElementsByTagName("li");

 var length=current_li.length;

 var ok_li_obj=null;

 for(var i=0;i<length;i++){

  if(current_li[i].className.indexOf("current_rating")>=0){

   ok_li_obj=current_li[i];break;//找到

  }

 }

 __current_width=txt*14;

 ok_li_obj.style.width=__current_width+"px";

 return false;

}

__start();
</script>
@endsection