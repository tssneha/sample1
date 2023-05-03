<?php
   include("config.php");
   session_start();
   
     if($_SERVER["REQUEST_METHOD"] == "GET") {
	  
	  $user = mysqli_real_escape_string($db,$_GET['user']); 
	  
	  $sql = "update cart set Stat='Completed' where Addedby='$user'";	  
	  echo $sql;
      $result = mysqli_query($db,$sql);
	  
	
	echo "<script type='text/javascript'>alert('Redirecting to payment gateway !!');</script>";
	echo "<script type='text/javascript'>debugger;window.open('https://pmny.in/UIsVdTquxN1z','_blank');</script>";
	echo "<script>window.location='prodlist.php';</script>";
	 }
	

   //}
?>