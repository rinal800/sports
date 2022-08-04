
<table border="5" align="center" cellpadding="20px" style="background-color:#99FFCC; border-color:chartreuse; color:#000099;">

           <tr>
		   <th>yourname</th>
		   <th>youremail</th>
		  
		   </tr>
		   <?php
		   
		    include"connect.php";
			$qry= "select * from register";
		    $a=mysqli_query($con,$qry);
			while($rec=mysqli_fetch_array($a))
			{
		
		   ?>
		  
		    <tr>
			<td><?php echo $rec[1];?></td>
			<td><?php echo $rec[2];?></td>
			</tr>
			
			<?php }
			
			?>
			</table>
		