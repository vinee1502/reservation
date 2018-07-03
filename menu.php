4
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>

<body>

<?php include 'navbar.php';?>
<?php include 'menu-tab.php';?>
<!-- Main content starts -->

<div class="content">

  	
	    <!-- Matter -->

	    <div class="matter">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Menu</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
<?php
	include('includes/dbcon.php');
	$query=mysqli_query($con,"select * from subcategory")or die(mysqli_error($con));
		while ($row=mysqli_fetch_array($query)){
			$subcat_id=$row['subcat_id'];
			$subcat_name=$row['subcat_name'];
?>   

                <div class="widget-content">
                  <div class="padd">
                    <h3><?php echo $subcat_name;?></h3>
                    <div class="gallery">
                      <!-- Full size image link in anchor tag. Thumbnail link in image tag. -->
<?php
						
							$querym=mysqli_query($con,"select * from menu natural join subcategory where subcat_id='$subcat_id' order by menu_name")or die(mysqli_error($con));
							while ($rowm=mysqli_fetch_array($querym)){
								$mid=$rowm['menu_id'];
								$menu=$rowm['menu_name'];
								/* $cat=$rowm['cat_name']; */
								$subcat=$rowm['subcat_name'];
								$desc=$rowm['menu_desc'];
								$price=$rowm['menu_price'];
								$pic=$rowm['menu_pic'];
?>                        
                      <a href="images/<?php echo $pic;?>" class="prettyPhoto[pp_gal]" title="<?php echo $menu." - P".$price;?>" alt="<?php echo $menu." - P".$price;?>">
                      		<img src="images/<?php echo $pic;?>" alt="<?php echo $menu." - P".$price;?>">
                      		
                      </a>
                     <?php }?>
                    </div>

                  </div><!--pad-->
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div><!--widget-->
<?php }?>                
              </div>  
              
            </div>


            <div class="col-md-4">
              <div class="widget">
                <div class="widget-head">
                  <div class="pull-left">Combo</div>
                  <div class="widget-icons pull-right">
                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
                  </div>  
                  <div class="clearfix"></div>
                </div>
<?php
	include('includes/dbcon.php');
	$query=mysqli_query($con,"select * from combo")or die(mysqli_error($con));
		while ($row=mysqli_fetch_array($query)){
			$combo_id=$row['combo_id'];
			$combo_name=$row['combo_name'];
			$price=$row['combo_price'];
?>   

                <div class="widget-content">
                  <div class="padd">
                    <h3><?php echo $combo_name." - <span class='label label-primary'>P".$price."</span>";?></h3>
                    
                      <!-- Full size image link in anchor tag. Thumbnail link in image tag. -->
<?php
						
							$querym=mysqli_query($con,"select * from combo_details natural join menu where combo_id='$combo_id' group by cat_id")or die(mysqli_error($con));
							while ($rowm=mysqli_fetch_array($querym)){
								
								$menu_name=$rowm['menu_name'];
?>                        
                    <!-- Widget content -->
                  <!-- activity starts -->
                  <ul class="activity">

                    <li>
                      <!-- Icon with avtivity  -->
                      <?php echo $menu_name;?>
                    </li>

                  </ul> 

                     <?php }?>
                    

                  </div><!--pad-->
                  <div class="widget-foot">
                    <!-- Footer goes here -->
                  </div>
                </div><!--widget-->
<?php }?>                
              </div>  
            </div>


          </div>
        </div>
		 
		<!-- Matter ends -->

    </div>

   <!-- Mainbar ends -->	    
   <div class="clearfix"></div>

</div>
<!-- Content ends -->

<?php include 'footer.php';?> 
<?php include 'script.php';?>
</body>
</html>