<?php
 include"header.php";
?>
          
          
          
          
   
		
		
		
		
		<?php
								
									include "connect.php";
									if(isset($_GET['id']))
									{
										$id=$_GET['id'];
										$qry="select * from product where id='$id'";
										 $a=mysqli_query($con,$qry);
										$rec=mysqli_fetch_array($a);
									}
								
								?>
								
							
		
		
		
		 </div>
		 </div>
		 </div>
		
		 </section> 
			
		<section class="ftco-section contact-section">
						
      <div class="container">
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form name="register" class="bg-light p-5 contact-form" method="post" action="#" enctype="multipart/form-data">
			<h6 align="center">sign up </h6>
              <div class="form-group">
                <input type="text" name="pname" class="form-control" placeholder="product name" value="<?php if(isset($_GET['id'])){ echo $rec[1]; } ?>">
              </div>
			    <div class="form-group">
			  <select name="cricket" class="form-control">
			<option value="-">-----select-----</option>
			<option value="Cricket">cricket </option>
		    <option value="Hocky">hockey </option>
			<option value="FootBall">FootBall</option>
			<option value="HollyBall">Volleyball</option>
			<option value="Baseball">Baseball</option>
			<option value="Basketball">Basketball</option>
				<option value="judo">judo</option>
				<option value="judo">bedminton</option>
	
		</select></div>
              <div class="form-group">
                <input type="file" name="img" class="form-control" placeholder="image"><?php if(isset($_GET['id'])){ ?> <img src="../image/<?php echo $rec[2]; ?>"> <?php } ?>
              </div>
			   <div class="form-group">
                <input type="text" name="com" class="form-control" placeholder="company" value="<?php if(isset($_GET['id'])){ echo $rec[3]; } ?>"> 
              </div>
              <div class="form-group">
                <input type="text" name="price" class="form-control" placeholder="price" value="<?php if(isset($_GET['id'])){ echo $rec[4]; } ?>">
              </div>
			    <div class="form-group">
                <input type="text" name="stock" class="form-control" placeholder="stock"  value="<?php if(isset($_GET['id'])){ echo $rec[5]; } ?>">
              </div>
              <div class="form-group">
                <textarea  name="del" cols="30" rows="7" class="form- control" placeholder= "details"><?php if(isset($_GET['id'])){ echo $rec[6]; } ?></textarea>
              </div>
              <div class="form-group">
			  <?php
			    if(isset($_GET['id']))
				{
				?>
				
                <input type="submit" name="upadte" value="Edit" class="btn btn-primary py-3 px-5">
				<?php
				}
				else
				{
				?>
				 <input type="submit" name="submit" value="Add" class="btn btn-primary py-3 px-5">
				 <?php
				 }
				 ?>
              </div>
            </form>
          
          </div>
		  

          
             
              
            </div>
          </div>
        </div>
      </div>
    </section>


    
    
  

   
  
 <?php
include "footer.php";
?>




<?php
    if(isset($_POST['submit']))
	{
	    include "connect.php";
		
		$pname=$_POST['pname'];
		$image=$_FILES['img']['name'];
		$company=$_POST['com'];
		$price=$_POST['price'];
		$stock=$_POST['stock'];
		$del=$_POST['del'];
	
		move_uploaded_file($_FILES['img']['tmp_name'],"../image/".$image);
		
		$qry="insert into product(pnm,image,company,price,stock,del)values('$pname','$image','$company','$price','$stock','$del')";
		
		$rec=mysqli_query($con,$qry);
		if($rec>0)
		{
		   echo "<script>alert('product inserted');</script>";
		}
		else
		{
		   echo "record not insetred...";
		}
		
	}
	
?>



<?php


    if(isset($_POST['upadte']))
	{
	
	  include "connect.php";
		
		$pname=$_POST['pname'];
		$image=$_FILES['img']['name'];
		$company=$_POST['com'];
		$price=$_POST['price'];
		$stock=$_POST['stock'];
		$del=$_POST['del'];
		
		
			if($image=="")
			{
			
			$qry="update product set pnm='$pname',company='$company',price='$price',stock='$stock',del='$del' where id='$id'";
			echo $qry;
				
	   $rec=mysqli_query($con,$qry);
	   
	   if($rec>0)
		{
		   echo "<script>alert('update product');location.href='productview.php';</script>";
		}
		else
		{
		   echo "record not upadate...";
		}
	}
	
	
	else
	{
	
		move_uploaded_file($_FILES['img']['tmp_name'],"../image/".$image);
	$qry="update product set pnm='$pname',image='$image',company='$company',price='$price',stock='$stock',del='$del' where id='$id'";
	echo $qry;
	
	   $rec=mysqli_query($con,$qry);
	   }
	   
	   if($rec>0)
		{
			echo "<script>alert('product updated');location.href='productview.php';</script>";
		}
		else
		{
			echo "record not updated...";
		}
	}	

	
?>

