<?php include 'header.php';?>

<body>
	<?php include 'navbar.php';?>
	<?php include 'menu-tab.php';?>
	
		<div class = "content">
			<div class = "col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class = "col-md-9 col-lg-9">
					<div class="widget wgreen">
                
		                <div class="widget-head">
		                  <div class="pull-left">Events</div>
		                  <div class="widget-icons pull-right">
		                    <a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
		                    <a href="#" class="wclose"><i class="fa fa-times"></i></a>
		                  </div>
		                  <div class="clearfix"></div>
		                </div>

               			<div class="widget-content" style="height:500px">
                  			<div class="padd">
                  				<div class="page-tables">
                  					<div class="col-md-4 col-lg-4 col-sm-4">
									  <div class="widget">
										<!-- Widget title -->
										<div class="widget-head">
										  <div class="pull-left">Previous Events</div>
										  <div class="widget-icons pull-right">
											<a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
											<a href="#" class="wclose"><i class="fa fa-times"></i></a>
										  </div>  
										  <div class="clearfix"></div>
										</div>
										<div class="widget-content referrer">
										  <!-- Widget content -->
										  <div class="padd">
											<ul class="latest-news">
														<?php
														include('includes/dbcon.php');

															$query=mysqli_query($con,"select * from reservation WHERE r_status = 'Finished' LIMIT 0,5")or die(mysqli_error($con));
															  while ($row=mysqli_fetch_array($query)){
																$id=$row['rid'];
																$what=$row['r_ocassion'];
																$where=$row['r_venue'];
																$date = $row['r_date'];
															   
														?>   												
											  <li>
												<!-- Title and date -->
												<h6><a href="#"> <?php echo $what;?> </a> 
													<span class = "pull-right"><?php echo date("M d, Y",strtotime($date));?></span></h6>
												<p><?php echo $where;?></p>
											  </li>
														<?php }?>                                      
											</ul> 
										  </div>
										  <div class="widget-foot">
										  </div>
										</div>
									  </div>
									</div>	<!--col-->

									<div class="col-md-4 col-lg-4 col-sm-4">
										  <div class="widget">
										<!-- Widget title -->
										<div class="widget-head">
										  <div class="pull-left">Upcoming Events</div>
										  <div class="widget-icons pull-right">
											<a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
											<a href="#" class="wclose"><i class="fa fa-times"></i></a>
										  </div>  
										  <div class="clearfix"></div>
										</div>
										<div class="widget-content referrer">
										  <!-- Widget content -->
										  <div class="padd">
											<ul class="latest-news">
														<?php
														include('includes/dbcon.php');

															$query=mysqli_query($con,"select * from reservation WHERE r_status = 'Approved' LIMIT 0,5")or die(mysqli_error($con));
															  while ($row=mysqli_fetch_array($query)){
																$id=$row['rid'];
																$what=$row['r_ocassion'];
																$where=$row['r_venue'];
																$date = $row['r_date'];
															   
														?>   												
											  <li>
												<!-- Title and date -->
												<h6><a href="#"> <?php echo $what;?> </a> 
													<span class = "pull-right"><?php echo date("M d, Y",strtotime($date));?></span></h6>
												<p><?php echo $where;?></p>
											  </li>
														<?php }?>                                      
											</ul> 
										  </div>
										  <div class="widget-foot">
										  </div>
										</div>
									  </div>
										</div>
										
										<div class="col-md-4 col-lg-4 col-sm-4">
										  <div class="widget">
										<!-- Widget title -->
										<div class="widget-head">
										  <div class="center">Latest Annoucements</div>
										  <div class="widget-icons pull-right">
											<a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
											<a href="#" class="wclose"><i class="fa fa-times"></i></a>
										  </div>  
										  <div class="clearfix"></div>
										</div>
										<div class="widget-content referrer">
										  <!-- Widget content -->
										  <div class="padd">
											<ul class="latest-news">
														<?php
														include('includes/dbcon.php');

															$query=mysqli_query($con,"select * from event LIMIT 0,5")or die(mysqli_error($con));
															  while ($row=mysqli_fetch_array($query)){
																$id=$row['event_id'];
																$what=$row['event_what'];
																$where=$row['event_where'];
																$date = $row['event_date'];
															   
														?>   												
											  <li>
												<!-- Title and date -->
												<h6><a href="#"> <?php echo $what;?> </a> 
													<span class = "pull-right"><?php echo date("M d, Y",strtotime($date));?></span></h6>
												<p><?php echo $where;?></p>
											  </li>
														<?php }?>                                      
											</ul> 
										  </div>
										  <div class="widget-foot">
										  </div>
										</div>
									  </div>
										</div>
									
                   				</div><!--table-->
                  			</div><!--pad-->
                		</div><!--widget-content-->
                  		<div class="widget-foot">
                    	<!-- Footer goes here -->
                 		 </div>
              		</div><!--widget-->		
				</div><!--content-->		
				<?php include('right-sidebar.php');?>
			
             
    
    
			
			</div>	
		</div>
<?php include 'footer.php';?> 	
<?php include 'script.php';?>
<script>
         $(function () {
         //Initialize Select2 Elements
         $(".select2").select2();
         

     })
    </script>
</body>
</html>



