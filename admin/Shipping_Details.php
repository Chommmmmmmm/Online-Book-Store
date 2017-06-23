<?php 
session_start();
require('includes/config.php');

	$q="select * from shipping_details";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<style>
			table{padding:5px;border:10px solid gray}
			td,th{padding:15px}
			
		</style>
</head>
<body>
<!-- start header -->
<div id="header">
	<div id="menu">
		<?php
			include("includes/menu.inc.php");
		?>
	</div>
</div>
<div id="logo-wrap">
<div id="logo">
		<?php
			include("includes/logo.inc.php");
		?>
</div>
</div>
<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
				
					<table border='1' WIDTH='100%'>
						
						<tr>
<td WIDTH='10%' style="color:darkgreen"><b><u>SR.NO</u></b></td>
<TD style="color:darkgreen" WIDTH='50%'><b><u>NAME</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>ADDRESS</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>POSTAL CODE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>CITY</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>STATE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>PHONE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>USER</u></b></TD>	
<TD style="color:darkgreen" WIDTH='25%'><b><u>BOOK NAME</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>BOOK ISBN</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>QTY</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>TOTAL</u></b></TD>

							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['name'].'
										<td>'.$row['address'].'
										<td>'.$row['postal_code'].'
										<td>'.$row['city'].'
										<td>'.$row['state'].'
										<td>'.$row['phone'].'
										<td>'.$row['f_id'].'
										<td>'.$row['book_name'].'
										<td>'.$row['isbn_num'].'
										<td>'.$row['book_qty'].'
										<td>'.$row['book_price'];
										
										
									echo 	'<td><a href="process_del_shipping.php?isbn_num='.$row['isbn_num'].'"><img src="images/drop.png" ></a>
												
									
									</tr>';
									$count++;
							}
						?>

					</TABLE>
				
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
<!-- end page -->
<!-- start footer -->
<div id="footer">
			<?php
				include("includes/footer.inc.php");
			?>
</div>
<!-- end footer -->
</body>
</html>
