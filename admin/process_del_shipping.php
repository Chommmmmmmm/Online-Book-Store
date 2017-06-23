<?php
require('includes/config.php');

			$query="delete from shipping_details where isbn_num =".$_GET['isbn_num'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:Shipping_Details.php");

?>