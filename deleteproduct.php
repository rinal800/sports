<?php
								
	include "connect.php";
	
		$id=$_GET['id'];
		$qry="delete from product where id='$id'";
		$a=mysqli_query($con,$qry);
										
										
		if($a>0)
		{
			echo "<script>alert('product deleted');location.href='productview.php';</script>";
		}
		else
		{
			echo "record not deleted...";
		}
	

?>

