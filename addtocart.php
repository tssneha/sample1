<?php
   include("config.php");
   //require_once 'mail_config.php';
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "GET") {
      // username and password sent from form 
      
      $pid = mysqli_real_escape_string($db,$_GET['pid']);
      $name = mysqli_real_escape_string($db,$_GET['name']);
      $category = mysqli_real_escape_string($db,$_GET['category']); 
      $cost = mysqli_real_escape_string($db,$_GET['cost']); 
      $descr = mysqli_real_escape_string($db,$_GET['descr']); 
      $number = mysqli_real_escape_string($db,$_GET['number']); 
      $tcost = mysqli_real_escape_string($db,$_GET['tcost']); 
      $aby=$_SESSION['uname'];
      $sql="select Quantity from products where Pid='$pid'";
      $curquantity=0;
      $result = mysqli_query($db,$sql)or die(mysqli_error());
      while($row = mysqli_fetch_array( $result ))
      {
        $curquantity=(int)$row['Quantity'];
      }
      $availquan=$curquantity-$number;
      if($availquan>0)
      {
      $sql="update products set Quantity='$availquan' where Pid='$pid'";
      $result = mysqli_query($db,$sql);
	  $sql = "Insert into cart values ('','$pid','$name','$category', '$cost','$number','$tcost','$aby','Pending')";
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
	  
    echo "<script type='text/javascript'>alert('Added to cart Successfully !!');</script>";
    echo "<script type='text/javascript'>window.location='prodlist.php';</script>";
          }
          else{
            
    echo "<script type='text/javascript'>alert('Out of stock');</script>";
    echo "<script type='text/javascript'>window.location='prodlist.php';</script>";
          }
     
   }
?>
