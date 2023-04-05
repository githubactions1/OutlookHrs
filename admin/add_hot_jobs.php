<?php
session_start();
if($_SESSION["emp_uni"]!=""){
include"head.php";
include"header.php";
include"sidebar.php";
include"db.php";
?>
<div id="content" class="content">

<ol class="breadcrumb float-xl-right">
<li class="breadcrumb-item"><a href="javascript:;" style="color:#5DB581">Home</a></li>
<li class="breadcrumb-item"><a href="javascript:;" style="color:#5DB581">Hot Jobs</a></li>
</ol>

<?php
//include"db.php";
if(isset($_POST['submit'])){
  //print_r($_POST);
  $title=$_POST['title'];
  $des=$_POST['des'];
  $created_by=$_POST['created_by'];
  $location=$_POST['location'];
  $w_location=$_POST['w_location'];
  $uniq=uniqid();
  

  $sql="INSERT INTO `hot_jobs`(`uniq`, `title`, `description`, `location`, `work_location`, `created_by`) VALUES ('".$uniq."','".$title."','".$des."','".$location."','".$w_location."','".$created_by."')";
$ins_sql=$conn->query($sql);
if($ins_sql==true){
  ?>
<script type="text/javascript">location.href = 'jobs_list.php';</script>
<?php
}

}
if(isset($_GET['id'])){
$id=$_GET['id'];
$fetch_sql="select * from  hot_jobs where uniq='".$id."' and status=1";
$fetchsql=$conn->query($fetch_sql);
foreach($fetchsql as $fedetails){
} 
}
if(isset($_POST['update'])){
  $id=$_GET['id'];

  $title=$_POST['title'];
  $des=$_POST['des'];
  $created_by=$_POST['created_by'];
  $location=$_POST['location'];
  $w_location=$_POST['w_location'];

  $up_sql="UPDATE `hot_jobs` SET `title`='".$title."',`description`='".$des."',`location`='".$location."',`work_location`='".$w_location."',`created_by`='".$created_by."' WHERE uniq='".$id."' and status=1";
  $update_sql=$conn->query($up_sql);
if($update_sql==true){
  ?>

<script type="text/javascript">
location.href = 'jobs_list.php';</script>
<?php
}

}

?>


<div class="row">
<div class="col-xl-12">

<div class="panel panel-inverse" data-sortable-id="form-stuff-10">

<div class="panel-heading" style="background-color: #205790">
<h4 class="panel-title">ADD HOT JOBS</h4>

</div>
 
<div class="panel-body">
  
<form action="#" method="post" enctype="multipart/form-data">
<fieldset>
<!-- <legend class="m-b-15">Legend</legend>
 -->
<div class="row">
<div class="col-sm-12">
<div class="form-group">
<label for="report_name">Job Title</label>
<input type="text" class="form-control" id="title" name="title" placeholder="About Title" value="<?php if(isset($_GET['id'])){echo $fedetails['title']; }?>" />
</div>
</div>


<div class="col-sm-12">
<div class="form-group">
<label for="s_officer">Job Description</label>
<textarea class="form-control" id="des" name="des" placeholder="Enter  Description" style="height:300px"><?php if(isset($_GET['id'])){echo $fedetails['description']; }?></textarea>
</div>
</div>
<div class="col-sm-12">
<div class="form-group">
<label for="report_name">Created By</label>
<input type="text" class="form-control" id="title2" name="created_by" placeholder="Admin" value="<?php if(isset($_GET['id'])){echo $fedetails['created_by']; }?>" />
</div>
</div>
<div class="col-sm-12">
<div class="form-group">
<label for="report_name">Location</label>
<input type="text" class="form-control" id="title2" name="location" placeholder="Location" value="<?php if(isset($_GET['id'])){echo $fedetails['location']; }?>" />
</div>
</div>

<div class="col-sm-12">
<div class="form-group">
<label for="report_name">Work Location</label>
<input type="text" class="form-control" id="title2" name="w_location" placeholder="Remote/On Site" value="<?php if(isset($_GET['id'])){echo $fedetails['work_location']; }?>" />
</div>
</div>
</div>

  
<div class="col-sm-2">
 <?php
if(isset($_GET['id'])){
  ?>
  <input type="submit" name="update" value="Update" class="btn" style="background-color: #78B833;color:#fff;margin-top: 45px"></div>
<?php    
}
else{?>
  <input type="submit" name="submit" value="Submit" class="btn" style="background-color: #78B833;color:#fff;margin-top: 45px"></div>

<?php
}
?> 

  </div>



</fieldset>
</form>

</div>




</div>

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
<script src="jquery-3.6.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
