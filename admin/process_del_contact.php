<?php

	require('includes/config.php');
			
			$query="delete from contact where con_email =".$_GET['con_email'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:contact.php");

?>