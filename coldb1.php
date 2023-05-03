<?php
   include("config.php");
   session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
		{
			
			$pid=$_POST['pid'];
			$name=$_POST['name'];
			$category=$_POST['category'];
			$quan=$_POST['quan'];
			$cost=$_POST['cost'];
			//$phone=$_POST['phone'];
			$descr=$_POST['descr'];
			
			
			
		   
		   $uploaded_dir = "./uploads/"; 
		   $filename = $_FILES["userfile"]["name"]; 
		   $path = $uploaded_dir . $filename; 
		   
		    move_uploaded_file($_FILES["userfile"]["tmp_name"], $path);
			$count=0;
			$quant=0;
			$query = "select count(*) as 'aa',Quantity from products where Pid='$pid' ";

			$result = mysqli_query($db, $query);

			while ($row = mysqli_fetch_array($result)) {
				$count=$row['aa'];
				$quant=(int)$row['Quantity'];
			}
			if( $count==0)
			{
			
				$query = "insert into products values ('$pid','$name','$category','$quan','$cost','$filename','$path','$descr','Admin')";
				echo $query;
				mysqli_query($db,$query);
				echo "<script> alert('Product uploaded successfully')</script>";
				echo "<script>window.location='products.php';</script>";
			}
			else
			{
				$totquan=$quant+(int)$quan;
				$query = "update products set Quantity='$totquan' where Pid='$pid'";
				echo $query;
				mysqli_query($db,$query);
				echo "<script> alert('Product updated successfully')</script>";
				echo "<script>window.location='products.php';</script>";
				
			}
			
			
		}
		?>