<?php

error_reporting(1);
session_start();
if($_SESSION["emp_uni"]!=""){
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
