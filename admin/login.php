
<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8" />
<link rel="icon" href="assets/img/logo.png" type="image/gif" sizes="16x16">
<title>Infinitsys Solutions Pvt Ltd </title>
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />

<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
<link href="assets/css/default/app.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="pace-top">

<div id="page-loader" class="fade show">
<span class="spinner"></span>
</div>


<div class="login-cover">
<div class="login-cover-image" style="background-image: url(assets/img/login-bg/login-bg-17.jpg)" data-id="login-cover-image"></div>
<div class="login-cover-bg"></div>
</div>


<div id="page-container" class="fade">

<div class="login login-v2" data-pageload-addclass="animated fadeIn">

<div class="login-header">
<div class="brand">
  <img src="assets/img/logo.png" style="height:100px"><br>
<!-- <b>United Pharma Technologies</b>  -->
<!-- <small>responsive bootstrap 4 admin template</small>
 --></div>
<div class="icon">
<!-- <i class="fa fa-lock"></i>
 --></div>
</div>
<?php 

   include"db.php";
   error_reporting(1);

    if(isset($_POST["submit"]))
    {  

     $uname=$_POST["username"];
      $pwd=$_POST["password"]; 
    $sel_sql="select * from ma_users where usr_uname='".$uname."' and  usr_pwd='".$pwd."' and usr_status=1";

      $sel_result=$conn->query($sel_sql); 
        if($sel_result->num_rows>0)
{
   

while($row=$sel_result->fetch_assoc())
    {
        $dbuname=$row["usr_fname"];
        $emp_uni=$row["user_uniq"];
        $dbuid=$row["usr_id"];
        $dbsname=$row["usr_uname"];
        $dbrole=$row["role_id"];
        $dbmobile=$row["usr_mob"];
        $dbemail=$row["usr_email"];
        $dbimg=$row["usr_photo"];
       $ss_update="update session_log set ssl_status=0 where usr_id='".$dbuid."' and ssl_status=1";
     $ss_update_result=$conn->query($ss_update);
     if($ss_update_result==true){
        $ss_uniq=uniqid();
$dt=date('Y-m-d');
$dbuniq=uniqid();
         $ss_insert="insert into session_log(ssl_uniq,usr_uni,usr_uname,usr_mob,role_id,ssl_dt) values('".$ss_uniq."','".$emp_uni."','".$dbuname."','".$dbmobile."','".$dbrole."','".$dt."')";
$ss_insert_result=$conn->query($ss_insert);
session_start();
     if($ss_insert_result==true){

        $_SESSION["emp_uni"]= $emp_uni;
        $_SESSION["ss_uni"]= $dbuniq;
        $_SESSION["usr_name"]= $dbuname;
        $_SESSION["usr_role"]= $dbrole;
        $_SESSION["usr_sname"]= $dbsname;
        $_SESSION["usr_mobile"]= $dbmobile;
        $_SESSION["usr_email"]= $dbemail;
        
        ?>
        <script>
            window.location.href='dashboard.php';
        </script>
        <?php
 }
}
     }  

        
       } 
        else
        {
$err=" Your Usename Or Password Are Wrong.Please Try Again";

        } 
    }

    
    ?>



<div class="login-content">
  <span style="color:red"><?php echo $err;?></span>
<form action="" method="post" class="margin-bottom-0">
<div class="form-group m-b-20">
<input type="text" name="username" class="form-control form-control-lg" placeholder="Email Address" required />
</div>
<div class="form-group m-b-20">
<input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required />
</div>
<!-- <div class="checkbox checkbox-css m-b-20">
<input type="checkbox" id="remember_checkbox" />
<label for="remember_checkbox">
Remember Me
</label>
</div> -->
<div class="login-buttons">
<input type="submit" name="submit" value="submit" class="btn btn-success btn-block btn-lg">
</div>
<!-- <div class="m-t-20">
Not a member yet? Click <a href="signup.php">here</a> to register.
</div> -->
</form>
</div>

</div>


<ul class="login-bg-list clearfix">
<li class="active"><a href="javascript:;" data-click="change-bg" data-img="assets/img/login-bg/login-bg-17.jpg" style="background-image: url(assets/img/login-bg/login-bg-17.jpg)"></a></li>
<li><a href="javascript:;" data-click="change-bg" data-img="assets/img/login-bg/login-bg-16.jpg" style="background-image: url(assets/img/login-bg/login-bg-16.jpg)"></a></li>
<li><a href="javascript:;" data-click="change-bg" data-img="assets/img/login-bg/login-bg-15.jpg" style="background-image: url(assets/img/login-bg/login-bg-15.jpg)"></a></li>
<li><a href="javascript:;" data-click="change-bg" data-img="assets/img/login-bg/login-bg-14.jpg" style="background-image: url(assets/img/login-bg/login-bg-14.jpg)"></a></li>
<li><a href="javascript:;" data-click="change-bg" data-img="assets/img/login-bg/login-bg-13.jpg" style="background-image: url(assets/img/login-bg/login-bg-13.jpg)"></a></li>
<li><a href="javascript:;" data-click="change-bg" data-img="assets/img/login-bg/login-bg-12.jpg" style="background-image: url(assets/img/login-bg/login-bg-12.jpg)"></a></li>
</ul>


<!-- <div class="theme-panel theme-panel-lg">
<a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
<div class="theme-panel-content">
<h5>App Settings</h5><ul class="theme-list clearfix">
<li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="assets/css/default/theme/red.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-pink" data-theme="pink" data-theme-file="assets/css/default/theme/pink.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Pink">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="assets/css/default/theme/orange.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-yellow" data-theme="yellow" data-theme-file="assets/css/default/theme/yellow.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Yellow">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-lime" data-theme="lime" data-theme-file="assets/css/default/theme/lime.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Lime">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-green" data-theme="green" data-theme-file="assets/css/default/theme/green.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Green">&nbsp;</a></li>
<li class="active"><a href="javascript:;" class="bg-teal" data-theme="default" data-theme-file="" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-aqua" data-theme="aqua" data-theme-file="assets/css/default/theme/aqua.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Aqua">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="assets/css/default/theme/blue.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="assets/css/default/theme/purple.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-indigo" data-theme="indigo" data-theme-file="assets/css/default/theme/indigo.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Indigo">&nbsp;</a></li>
<li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="assets/css/default/theme/black.min.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
</ul>
<div class="divider"></div>
<div class="row m-t-10">
<div class="col-6 control-label text-inverse f-w-600">Header Fixed</div>
<div class="col-6 d-flex">
<div class="custom-control custom-switch ml-auto">
<input type="checkbox" class="custom-control-input" name="header-fixed" id="headerFixed" value="1" checked />
<label class="custom-control-label" for="headerFixed">&nbsp;</label>
</div>
</div>
</div>
<div class="row m-t-10">
<div class="col-6 control-label text-inverse f-w-600">Header Inverse</div>
<div class="col-6 d-flex">
<div class="custom-control custom-switch ml-auto">
<input type="checkbox" class="custom-control-input" name="header-inverse" id="headerInverse" value="1" />
<label class="custom-control-label" for="headerInverse">&nbsp;</label>
</div>
</div>
</div>
<div class="row m-t-10">
<div class="col-6 control-label text-inverse f-w-600">Sidebar Fixed</div>
<div class="col-6 d-flex">
<div class="custom-control custom-switch ml-auto">
<input type="checkbox" class="custom-control-input" name="sidebar-fixed" id="sidebarFixed" value="1" checked />
<label class="custom-control-label" for="sidebarFixed">&nbsp;</label>
</div>
</div>
</div>
<div class="row m-t-10">
<div class="col-6 control-label text-inverse f-w-600">Sidebar Grid</div>
<div class="col-6 d-flex">
<div class="custom-control custom-switch ml-auto">
<input type="checkbox" class="custom-control-input" name="sidebar-grid" id="sidebarGrid" value="1" />
<label class="custom-control-label" for="sidebarGrid">&nbsp;</label>
</div>
</div>
</div>
<div class="row m-t-10">
<div class="col-md-6 control-label text-inverse f-w-600">Sidebar Gradient</div>
<div class="col-md-6 d-flex">
<div class="custom-control custom-switch ml-auto">
<input type="checkbox" class="custom-control-input" name="sidebar-gradient" id="sidebarGradient" value="1" />
<label class="custom-control-label" for="sidebarGradient">&nbsp;</label>
</div>
</div>
</div>
<div class="divider"></div>
<h5>Admin Design (5)</h5>
<div class="theme-version">
<a href="index_v2.html" class="active">
<span style="background-image: url(assets/img/theme/default.jpg);"></span>
</a>
<a href="https://seantheme.com/color-admin/admin/transparent/index_v2.html">
<span style="background-image: url(assets/img/theme/transparent.jpg);"></span>
</a>
</div>
<div class="theme-version">
<a href="https://seantheme.com/color-admin/admin/apple/index_v2.html">
<span style="background-image: url(assets/img/theme/apple.jpg);"></span>
</a>
<a href="https://seantheme.com/color-admin/admin/material/index_v2.html">
<span style="background-image: url(assets/img/theme/material.jpg);"></span>
</a>
</div>
<div class="theme-version">
<a href="https://seantheme.com/color-admin/admin/facebook/index_v2.html">
<span style="background-image: url(assets/img/theme/facebook.jpg);"></span>
</a>
<a href="https://seantheme.com/color-admin/admin/google/index_v2.html">
<span style="background-image: url(assets/img/theme/google.jpg);"></span>
</a>
</div>
<div class="divider"></div>
<h5>Language Version (7)</h5>
<div class="theme-version">
<a href="index.html" class="active">
<span style="background-image: url(assets/img/version/html.jpg);"></span>
</a>
<a href="https://seantheme.com/color-admin/admin/ajax/">
<span style="background-image: url(assets/img/version/ajax.jpg);"></span>
</a>
</div>
<div class="theme-version">
<a href="https://seantheme.com/color-admin/admin/angularjs/">
<span style="background-image: url(assets/img/version/angular1x.jpg);"></span>
</a>
<a href="https://seantheme.com/color-admin/admin/angularjs10/">
<span style="background-image: url(assets/img/version/angular10x.jpg);"></span>
</a>
</div>
<div class="theme-version">
<a href="javascript:alert('Laravel Version only available in downloaded version.');">
<span style="background-image: url(assets/img/version/laravel.jpg);"></span>
</a>
<a href="https://seantheme.com/color-admin/admin/vuejs/">
<span style="background-image: url(assets/img/version/vuejs.jpg);"></span>
</a>
</div>
<div class="theme-version">
<a href="https://seantheme.com/color-admin/admin/reactjs/">
<span style="background-image: url(assets/img/version/reactjs.jpg);"></span>
</a>
<a href="javascript:alert('.NET Core 3.1 MVC Version only available in downloaded version.');">
<span style="background-image: url(assets/img/version/dotnet.jpg);"></span>
</a>
</div>
<div class="divider"></div>
<h5>Frontend Design (4)</h5>
<div class="theme-version">
<a href="https://seantheme.com/color-admin/frontend/one-page-parallax/">
<span style="background-image: url(assets/img/theme/one-page-parallax.jpg);"></span>
</a>
<a href="https://seantheme.com/color-admin/frontend/e-commerce/">
<span style="background-image: url(assets/img/theme/e-commerce.jpg);"></span>
</a>
</div>
<div class="theme-version">
<a href="https://seantheme.com/color-admin/frontend/blog/">
<span style="background-image: url(assets/img/theme/blog.jpg);"></span>
</a>
<a href="https://seantheme.com/color-admin/frontend/forum/">
<span style="background-image: url(assets/img/theme/forum.jpg);"></span>
</a>
</div>
<div class="divider"></div>
<div class="row m-t-10">
<div class="col-md-12">
<a href="https://seantheme.com/color-admin/documentation/" class="btn btn-inverse btn-block btn-rounded" target="_blank"><b>Documentation</b></a>
<a href="javascript:;" class="btn btn-default btn-block btn-rounded" data-click="reset-local-storage"><b>Reset Local Storage</b></a>
</div>
</div>
</div>
</div> -->


<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>

</div>


<script src="assets/js/app.min.js" type="aa4b978262a2c757cfe994d7-text/javascript"></script>
<script src="assets/js/theme/default.min.js" type="aa4b978262a2c757cfe994d7-text/javascript"></script>

<script type="aa4b978262a2c757cfe994d7-text/javascript">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-53034621-1', 'auto');
        ga('send', 'pageview');

    </script>

<script src="assets/js/demo/login-v2.demo.js" type="aa4b978262a2c757cfe994d7-text/javascript"></script>

<script src="ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="aa4b978262a2c757cfe994d7-|49" defer=""></script></body>

<!-- Mirrored from seantheme.com/color-admin/admin/html/login_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 10:12:45 GMT -->
</html>