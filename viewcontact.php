
<table border="5" align="center" cellpadding="50px" style="background-color: #006666margin-top:10px; border-color:chartreuse; color:#000099;">

           <tr>
		   <th>yourname</th>
		   <th>youremail</th>
		   </tr>
		   <?php
		   
		    include"connect.php";
			$qry= "select * from contacts";
		    $a=mysqli_query($con,$qry);
			while($res=mysqli_fetch_array($a))
			{
		
		   ?>
		  
		    <tr>
			<td><?php echo $res[1];?></td>
			<td><?php echo $res[2];?></td>
			</tr>
			
			<?php }
			
			?>
			</table>
		