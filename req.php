<?php

if(isset($_POST['submit']))
      { 
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $message=$_POST['msg'];
            $name=$fname.$lname;
         print_r($_POST);
         die();
 /*$sql = "INSERT INTO `contact`(`con_uniq`,`con_name`,`con_mobile`,`con_email`,`con_msg`)values('$uni','$name','$phone','$email','$message')";
        $result = $conn->query($sql);*/
    
    $to = "santhakumarinagandla@gmail.com";
     $subject = "Quick Enquiry For Holisic Attitude Educational Services";
   
   
    $message = "
       Hi,\n
       You Received An Email Contact from Holisic Attitude Educational Services\n
       Request Details \n
    
       Name          : $name \n
       Email-Id      : $email \n
       Mobile        :$phone\n
      Message   : $message \n 
       ";
     
   
    $headers = "From: ".$email;
    if(mail($to,$subject,$message,$headers)){?>
  
    <script>alert("Thanks You. Our Incharge Will Contact You Soon");window.location="contact.html";</script>
  <?php } else {?>
<script>alert("Please Try Again");window.location="contact.html";</script>

<?php } }?>