<?php
require('includes/config.php');
	
		
			
		
			$parent = $_POST['parent'];
			$subcat=$_POST['subcat'];
			
			$query="insert into subcat(parent_id, subcat_nm) values('$parent','$subcat')";
			
			mysqli_query($conn,$query) or die("can't Execute...");
			
			header("location:subcategory.php");
		
?>
	
	