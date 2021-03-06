@extends('homes.layout.seller')

@section('head')
<link href="/homes/css/personal.css" rel="stylesheet" type="text/css">
		<link href="/homes/css/infstyle.css" rel="stylesheet" type="text/css">
		<script src="/homes/AmazeUI-2.4.2/assets/js/jquery.min.js" type="text/javascript"></script>
		<script src="/homes/AmazeUI-2.4.2/assets/js/amazeui.js" type="text/javascript"></script>

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/homes/home/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/custom-plugins/picklist/picklist.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/plugins/select2/select2.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/plugins/ibutton/jquery.ibutton.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/plugins/cleditor/jquery.cleditor.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/homes/home/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/homes/home/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/homes/home/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/homes/home/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/homes/home/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/homes/home/css/themer.css" media="screen">



    <!-- JavaScript Plugins -->
    <script src="/homes/home/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/homes/home/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/homes/home/js/libs/jquery.placeholder.min.js"></script>
    <script src="/homes/home/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/homes/home/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/homes/home/jui/jquery-ui.custom.min.js"></script>
    <script src="/homes/home/jui/js/jquery.ui.touch-punch.js"></script>

    <script src="/homes/home/jui/js/globalize/globalize.js"></script>
    <script src="/homes/home/jui/js/globalize/cultures/globalize.culture.en-US.js"></script>

    <!-- Plugin Scripts -->
    <script src="/homes/home/custom-plugins/picklist/picklist.min.js"></script>
    <script src="/homes/home/plugins/autosize/jquery.autosize.min.js"></script>
    <script src="/homes/home/plugins/select2/select2.min.js"></script>
    <script src="/homes/home/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/homes/home/plugins/validate/jquery.validate-min.js"></script>
    <script src="/homes/home/plugins/ibutton/jquery.ibutton.min.js"></script>
    <script src="/homes/home/plugins/cleditor/jquery.cleditor.min.js"></script>
    <script src="/homes/home/plugins/cleditor/jquery.cleditor.table.min.js"></script>
    <script src="/homes/home/plugins/cleditor/jquery.cleditor.xhtml.min.js"></script>
    <script src="/homes/home/plugins/cleditor/jquery.cleditor.icon.min.js"></script>

    <!-- Core Script -->
    <script src="/homes/home/bootstrap/js/bootstrap.min.js"></script>
    <script src="/homes/home/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/homes/home/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/homes/home/js/demo/demo.formelements.js"></script>
@endsection

@section('title','商品上传')

@section('content')

		<!--个人信息 -->
	<div class="info-main">
		<form action="{{url('/home/seller/goodsup')}}" method='post' class="am-form am-form-horizontal">

			
			<div class="am-form-group">
				<label class="am-form-label" for="user-name2">商品名称</label>
				<div class="am-form-content">
					<input type="text" placeholder="商品名称" id="user-name2"name="gname">

				</div>
			</div>
			<div class="am-form-group">
				<label class="am-form-label" for="user-name2">商品价格</label>
				<div class="am-form-content">
					<input type="text" placeholder="商品价格" id="user-name2"name="gprice">

				</div>
			</div>
			
			<div class="am-form-group">
				<label class="am-form-label">售卖状态</label>
				<div class="am-form-content sex">
					<label class="am-radio-inline">
						<input type="radio" data-am-ucheck="" value="male" name="gstatus" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 上架
					</label>
					<label class="am-radio-inline">
						<input type="radio" data-am-ucheck="" value="female" name="gstatus" class="am-ucheck-radio"><span class="am-ucheck-icons"><i class="am-icon-unchecked"></i><i class="am-icon-checked"></i></span> 下架
					</label>
					
				</div>
			</div>

			
			<!-- <div class="am-form-group">
				<label class="am-form-label" for="user-birth">商品分类：</label>
				<div class="am-form-content birth">
					<div class="birth-select">
						<select data-am-selected="" style="display: none;">
							<option value="a">2015</option>
							<option value="b">1987</option>
						</select><div data-am-dropdown="" id="am-selected-21pbe" class="am-selected am-dropdown">  <button class="am-selected-btn am-btn am-dropdown-toggle am-btn-default" type="button">    <span class="am-selected-status am-fl">2015</span>    <i class="am-selected-icon am-icon-caret-down"></i>  </button>  <div class="am-selected-content am-dropdown-content" style="min-width: 212px;">    <h2 class="am-selected-header"><span class="am-icon-chevron-left">返回</span></h2>       <ul class="am-selected-list">                     <li data-value="a" data-group="0" data-index="0" class="am-checked">         <span class="am-selected-text">2015</span>         <i class="am-icon-check"></i></li>                                 <li data-value="b" data-group="0" data-index="1" class="">         <span class="am-selected-text">1987</span>         <i class="am-icon-check"></i></li>            </ul>    <div class="am-selected-hint"></div>  </div></div>
						
					</div>
			
				</div>

				<div> -->
				<label class="mws-form-label"><strong>分类选择</strong></label>
						<div style="padding:10px 0">	
							<select name="cate_name" id="city">
							<option value="-1">--分类--</option>
							</select>
						</div>

						<div style="padding:10px 0">
							<select name="cate_name" id="area">
								<option value="-1">--分类--</option>
							</select>
						</div>


						<script type="text/javascript">
						//
						var city = document.getElementById('city');

						var area = document.getElementById('area');

						//数组
						var c = ["休闲零食", "饼干糕点", "生鲜果蔬","粮油干货","茶水饮料","传统滋补","中外名酒"];

						for (var i = 0; i < c.length; i++) {
							
							// city.innerHTML += '<option value="'+i+'">'+c[i]+'</option>';
							var op = new Option(c[i],i);  //<option value=''></option>

							city.options.add(op);
						};

						//市 
						var a = [
									["坚果炒货","肉类即食","糖果巧克力","梅/干果","海味即食","奶酪乳品","核桃"],
									["传统糕点","西式糕点","饼干","膨化食品","月饼","蛋黄派","进口饼干"],
									["水果","海鲜","肉禽","蔬菜","蛋/蛋制品","熟食","海鲜鱼类","进口水果"],
									["主食","粮油","方便面","调味品","干货","腊味","食用油","烘焙原料"],
									["红茶","白茶","绿茶","乌龙茶","咖啡","冲饮","饮料","乳制品"],
									["养生滋补","滋补食材","药食同源","蜂类产品","新资源保健","参茸贵细","参类滋补品"],
					       			 ["白酒","啤酒","葡萄酒","洋酒","调制酒","暖身黄酒","礼品装"]
						];

						city.onchange = function()
						{
							//获取省市的值
							var cv = this.value;

							area.innerHTML='';

							for (var i = 0; i < a[cv].length; i++) {

								// area.innerHTML += '<option value="'+i+'">'+a[cv][i]+'</option>';

								var ops = new Option(a[cv][i],i);

								area.options.add(ops);
							};

						}





						</script>
				<!-- </div>
		
			</div> -->

			<div class="mws-form-row">
                	<label class="mws-form-label"><strong>商品主图</strong></label>
                	<div class="mws-form-item"style="padding:10px 0">
                    	<input type="file">
                    </div>
            </div>

         

			

                <div class="mws-panel-body no-padding"style="padding-top:10px margin-left:10px">
                	
                    	<div class="mws-form-row">
                        	<label class="mws-form-label"><strong>商品详情</strong></label>
                            <div class="mws-form-item"style="padding:10px 0">
                            	<textarea id="cleditor" class="large" name="det"></textarea>
                            </div>
                        </div>
                       
                   
                </div>
			
			 {{ csrf_field()}}
			<input type="submit" class="btn btn-danger" value="添加">

		</form>
	</div>


@endsection