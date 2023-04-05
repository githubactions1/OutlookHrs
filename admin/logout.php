<?php 
session_start();
include"db.php";
//print_r($_SESSION);
//die;
/*include 'fun_inc/proj_functions.php';
$pro_obj=new proj_fxns();*/
//$res=$pro_obj->session_logout($_SESSION['gen_unid'],0);
$sid=$_SESSION['emp_uni'];

$logout_sql="update session_log set `ssl_out`=now(),`ssl_status`=0 where `usr_uni`='".$sid."' and `ssl_status`=1";
 $sel_result=$conn->query($logout_sql); 
unset($_SESSION['emp_uni']);
session_destroy();
header('location:login.php');

?>
