<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="_token" content="{{ csrf_token() }}"/>
<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/admins/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/admins/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/login.css" media="screen">

<link rel="stylesheet" type="text/css" href="/admins/css/mws-theme.css" media="screen">


<title>后台登录</title>

</head>

<body>


    <div id="mws-login-wrapper">
        <div id="mws-login">
            <h1>登录</h1>
            <div class="mws-login-lock"><i class="icon-lock"></i></div>
            <div id="mws-login-form">

                <form class="mws-form" action="" method="post">
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="" id="name" class="mws-login-username required" placeholder="请输入用户名">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="password" name="" id="key" class="mws-login-password required" placeholder="请输入密码">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        {{csrf_field()}}
                        <input type="submit" id="dlog" value="登录" class="btn btn-success mws-login-button">
                    </div>

                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Plugins -->
   <script src="/admins/js/libs/jquery-1.8.3.min.js"></script>
   <script src="/admins/js/libs/jquery.placeholder.min.js"></script>
  <script src="/admins/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
   <script src="/admins/jui/js/jquery-ui-effects.min.js"></script>

    <!-- Plugin Scripts -->
   <script src="/admins/plugins/validate/jquery.validate-min.js"></script>

    <!-- Login Script -->
   <script src="/admins/js/core/login.js"></script>
   
    <script>
    /* $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
            });*/

    $('#dlog').click(function(){
        var name = $("#name").val();
        
        var key = $("#key").val();
        $.post('/admin/dlogin',{'_token':'{{ csrf_token() }}', name:name, key:key},function(data){
        //    console.log(data);
            
            if (data) {
                alert('登录成功！');
                // layer.load();
                   
                window.location.href = "/admin/type";  

            }else {
                alert ('账户或密码错误');
            }
        });
        return false;
     });
    </script>

</body>
</html>
