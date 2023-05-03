<?php
   include("config.php");
   //require_once 'mail_config.php';
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "GET") {
      // username and password sent from form 
      
      $name = mysqli_real_escape_string($db,$_GET['name']);
      $uname = mysqli_real_escape_string($db,$_GET['uname']); 
      $pswd = mysqli_real_escape_string($db,$_GET['pswd']); 
      $email = mysqli_real_escape_string($db,$_GET['email']); 
      $phone = mysqli_real_escape_string($db,$_GET['phone']); 
      $addr = mysqli_real_escape_string($db,$_GET['addr']); 
      
	  $sql = "Insert into vendors values ('$name','$uname', '$pswd','$email','$phone','$addr')";
	  /*
	   //echo"<pre>";print_r($useremail['0']['email']);exit;
           $mail->addCC($email); 
           $mail->Subject = 'Water Supply';
           
          $mail->Body ='Successfully Created account <br/>Username is '.$uname.'<br/>Password is '.$pswd.'.';
         $result = $mail->send();
        // echo"<pre>";print_r($result);
            if($result){
              // echo"<pre>";print_r($result);exit;
            }else{
            	
                echo 'alert("Email not sent .please check your internet connection");';
            }
	  */
      $result = mysqli_query($db,$sql);
	  
    echo "<script type='text/javascript'>alert('Data Saved Successfully !!');</script>";
    echo "<script type='text/javascript'>window.location='vendors.php';</script>";
     
   }
?>
