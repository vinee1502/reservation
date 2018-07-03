<?php
include('../includes/dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['id'];
	 $category = $_POST['subcategory'];
	 
	 mysqli_query($con,"UPDATE subcategory SET subcat_name='$category' where subcat_id='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated category details!');</script>";
		echo "<script>document.location='subcategory.php'</script>";
	
} 

