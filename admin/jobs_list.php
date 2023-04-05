<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);
date_default_timezone_set("Asia/Kolkata");
/*include 'fun_inc/proj_functions.php';
$pro_obj=new proj_fxns();*/
include"head.php";
include"header.php";
include"sidebar.php";
?>
<div id="content" class="content">

<ol class="breadcrumb float-xl-right">
<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
<li class="breadcrumb-item"><a href="javascript:;">Jobs</a></li>

</ol>


<h1 class="page-header"><a href="add_hot_jobs.php"><button class="btn" style="background-color: #5DB581;color:#fff">Add Details</button></a></h1>


<div class="row">
<div class="col-xl-12">
<div class="panel panel-inverse" data-sortable-id="table-basic-7">

<div class="panel-heading" style="background-color: #205790">
<h2 class="panel-title">Job List</h4>

</div>


<div class="panel-body">

<div class="table-responsive">
<table class="table table-striped m-b-0">
<thead>
<tr>
<th>Sno</th>
<th>Title</th>
<th>Description</th>
<th>Created By</th>
<th>Location</th>
<th>Work Location</th>
<th>Action</th>
</tr>
</thead>
<tbody>
    <?php
include"db.php";

if(isset($_GET['id'])){
    $id=$_GET['id'];
 $up_sql="UPDATE `hot_jobs` SET `status`='0' WHERE id='".$id."' and status=1";
  $update_sql=$conn->query($up_sql);
if($update_sql==true){
  ?>

<script type="text/javascript">
location.href = 'jobs_list.php';</script>
<?php
}



}


$sql="select * from hot_jobs where status=1";
$ins_sql=$conn->query($sql);
$i=1;
foreach($ins_sql as $details){
$a=$details['uniq'];

    ?>
    <tr>
        <td><?php echo $i++;?></td>
        <td><?php echo $details['title'];?></td>
        <td><?php echo $details['description'];?></td>
        <td><?php echo $details['created_by'];?></td>
        <td><?php echo $details['location'];?></td>
        <td><?php echo $details['work_location'];?></td>
        
<td><a href="add_hot_jobs.php?id=<?php echo $a;?>"><i class="fa fa-edit" style="color:blue;font-size: 20px;padding-right: 10px"></i></a>
	<a href="jobs_list.php?id=<?php echo $a;?>"><i class="fa fa-trash" style="color:red;font-size: 20px;padding-right: 10px"></i></a>
</td>
 
</tr> 
<?php
}
?>
</tbody>
</table>
</div>

</div>




</div>
</div>
</div>
</div>
<?php

include"footer.php";
?>