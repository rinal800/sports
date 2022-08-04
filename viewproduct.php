
<table border="5" align="center" cellpadding="20px" style="background-color: #99FFCC;  border-color: #000000; color:#000099;">

           <tr>
		   <th>id</th>
		   <th>product name</th> 
		   <th>company</th>
		   <th>price</th>
	       <th>stock</th>
		 
		    <th>image</th>
			  <th>details</th>
		   </tr>
		   
		   
		   <?php
		
	    	include "connect.php";
	
	        $qry="select * from product";
	
	        $a=mysqli_query($con,$qry);
			while($rec=mysqli_fetch_array($a))
	        {
		?>
		<tr>
			<td><?php echo $rec[0];?></td>
			<td><?php echo $rec[1];?></td>
			<td><?php echo $rec[3];?></td>
			<td><?php echo $rec[4];?></td>
			<td><?php echo $rec[5];?></td>
			
			
			
			<td><img src="../image/<?php echo $rec[2];?>" style="height:60px;width:70px"/> </td>
			<td><p style="width:500px"><?php echo $rec[6];?></p> </td>
			<td><a href="product.php?id=<?php echo $rec[0];?>">Edit</a> </td>
		<td><a href="deleteproduct.php?id=<?php echo $rec[0];?>">Delete</a> </td>
		</tr>
	
	<?php }
	?>
</table>