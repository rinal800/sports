<?php
	include "header.php";
?>
<br>
<br />
<table border="5"  align="center" cellpadding="5px" style="background-color:#99FFCC; margin-left:450px;  color:darkblue;">

	<tr>
	<th style="padding:5px;">User Name</th>
	<th style="padding:10px;">Email Id</th>
	<th style="padding:10px;">Message</th>
	</tr>
	<?php
	
		include "connect.php";
		$qry="select * from feedback";
		$qq=mysqli_query($con,$qry);
		while($rec=mysqli_fetch_array($qq))
		{
	?>
	
		<tr>
		<td align="center"><?php echo $rec[1];?></td>
		<td align="center"><?php echo $rec[2];?></td>
		<td align="center"><?php echo $rec[4];?></td>
		</tr>
		<?php
		}
	
		?>

</table>
<br />
<br />
<br />
<br />
<br />

<?php
	include "footer.php";
?>
