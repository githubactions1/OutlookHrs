<?php
session_start();
if($_SESSION["emp_uni"]!=""){
/*error_reporting(E_ALL);
ini_set('display_errors', 0);
date_default_timezone_set("Asia/Kolkata");
include 'fun_inc/proj_functions.php';
$pro_obj=new proj_fxns();*/
include"head.php";
include"header.php";
include"sidebar.php";
?>
<div id="content" class="content">
    <div class="row">
<div class="col-xl-12">
    <h2>Welcome</h2>
</div>
</div>
</div>
<?php
include"footer.php";
}
else{
?>
<script type="text/javascript">
location.href = 'login.php';</script>
<?php
}
?>