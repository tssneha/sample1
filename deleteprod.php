<?php
   include("config.php");
   session_start();
   
     if($_SERVER["REQUEST_METHOD"] == "GET") {
	  
	  $id = mysqli_real_escape_string($db,$_GET['id']); 
	  
	  $sql = "delete from products where Pid='$id'";	  
	  echo $sql;
      $result = mysqli_query($db,$sql);
	  
	
	echo "<script type='text/javascript'>alert('Data Deleted Successfully !!');</script>";
	echo "<script type='text/javascript'>window.location='manproducts.php';</script>";
	 }
	

   //}
?>