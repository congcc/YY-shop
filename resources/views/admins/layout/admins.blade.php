<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
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
<link rel="stylesheet" type="text/css" href="/admins/css/style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/pagination.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/style.css" media="screen">


<link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/stype.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/pagination.css" media="screen">
<link href="/admins/css/page.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="/admins/js/jquery.min.js"></script>
<script type="text/javascript" src="/admins/js/page.js"></script>
<link rel="stylesheet" type="text/css" href="/admins/css/style.css" media="screen">






<title>@yield('title')</title>

</head>

<body>


    <!-- Header -->
    <div id="mws-header" class="clearfix">
    
        <!-- Logo Container -->
        <div id="mws-logo-container">
        
            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <div id="mws-logo-wrap">
                <img src="/admins/images/mws-logo.png" alt="mws admin">
            </div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
            <!-- Notifications -->
            <div id="mws-user-notif" class="mws-dropdown-menu">
                <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                    <div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                            <li class="read">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="read">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
                            <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
                <a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                    <div class="mws-dropdown-content">
                        <ul class="mws-messages">
                            <li class="read">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="read">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
                            <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
                <!-- User Photo -->
                <div id="mws-user-photo">
                    <img src="/admins/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, John Doe
                    </div>
                    <ul>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="/admin/">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
        <!-- Necessary markup, do not remove -->
        <div id="mws-sidebar-stitch"></div>
        <div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icol32-widescreen"></i> 管理人员</a>
                        <ul class="closed">
                            <li><a href="/admin/user/create">添加管理员</a></li>
                            <li><a href="/admin/user">后台人员</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icol32-reseller-programm"></i> 买家管理</a>
                        <ul class="closed">
                            <li><a href="/admin/buys">买家列表</a></li>
                            <li><a href="/admin/buyedis">买家禁用</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="icol32-user-female"></i> 卖家管理</a>
                        <ul class="closed">
                            <li><a href="/admin/seller">用户列表</a></li>
                            <li><a href="/admin/sellerdis">卖家禁用</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="icol32-vcard"></i> 商家入驻</a>
                        <ul class="closed">
                            <li><a href="/admin/check">待审核申请</a></li>
                            <li><a href="/admin/csucc">成功申请</a></li>
                            <li><a href="/admin/cfail">失败申请</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="icol32-report-disk"></i> 商品审核</a>
                        <ul class="closed">
                            <li><a href="/admin/goods">审核中</a></li>
                            <li><a href="/admin/gsucc">通过申请</a></li>
                            <li><a href="/admin/gfail">未通过</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="icol32-application-cascade"></i> 商品分类</a>
                        <ul class="closed">
                            <li><a href="/admin/type">分类列表</a></li>
                            <li><a href="/admin/type">分类添加</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="icol32-webcam"></i> 订单管理</a>
                        <ul class="closed">
                            <li><a href="/admin/orders">0 代付款</a></li>
                            <li><a href="/admin/shipping">1 代发货</a></li>
                            <li><a href="admin/dinggoods">2 待收货</a></li>
                            <li><a href="/admin/plorder">3 待评价</a></li>
                            <li><a href="/admin/coorder">4 已完成</a></li>
                            <li><a href="/admin/cancelled">5 已取消</a></li>
                            <li><a href="/admin/apply">6 买家申请退货</a></li>
                            <li><a href="/admin/return">7 卖家同意退货</a></li>
                            <li><a href="/admin/refund">8 卖家退款</a></li>
                            <li><a href="/admin/success">9 退款成功</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""><i class="icol32-cart"></i> 支付管理</a>
                        <ul class="closed">

                            <li><a href="/admin/complaint">买家投诉</a></li>
                            <li><a href="/admins/form_wizard.html">卖家投诉</a></li>

                            <li><a href="/admin/pay">用户列表</a></li>
                            <li><a href="/admin/pays">商户列表</a></li>

                        </ul>
                    </li>
                    <li>
                        <a href="/admin/logis"><i class="icol32-lorry-link"></i> 物流管理</a>
                        <ul class="closed">
                            <li><a href="/admin/logis">物流列表</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icol32-www-page"></i>友情链接</a>
                        <ul class="closed">
                            <li><a href="/admin/flink">列表</a></li>
                            <li><a href="/admin/flink/create">添加链接</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="icol32-www-page"></i> 网站管理</a>
                        <ul class="closed">
                            <li><a href="/admin/web">网站状态</a></li>
                            
                        </ul>
                    </li>
                </ul>
            </div>         
        </div>
    

         
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
        
            <!-- Inner Container Start -->
            <div class="container">

            @if(session('msg'))
                <div class="mws-form-message info">                 

                    {{session('msg')}}

                </div>
            @endif

            
            @section('content')


            @show
            </div>
            <!-- Inner Container End -->
                       
            <!-- Footer -->
            <div id="mws-footer">
                Copyright Your Website 2012. All Rights Reserved.
            </div>
            
        </div>
        <!-- Main Container End -->
        
    </div>


    <!-- JavaScript Plugins -->
    <script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/admins/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/admins/js/libs/jquery.placeholder.min.js"></script>
    <script src="/admins/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/admins/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/admins/jui/jquery-ui.custom.min.js"></script>
    <script src="/admins/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/admins/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="/admins/js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/admins/plugins/flot/jquery.flot.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/admins/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/admins/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/admins/plugins/validate/jquery.validate-min.js"></script>
    <script src="/admins/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/admins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/admins/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/admins/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/admins/js/demo/demo.dashboard.js"></script>
    @section('js')
    @show
</body>
</html>





