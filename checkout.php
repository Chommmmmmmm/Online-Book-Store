<?php
 session_start();
 extract($_POST);
 extract($_SESSION);
 
require('includes/config.php'); 
$isbn=$_SESSION['ISBN_VALUE'];
	
	$q="select * from book where b_isbn=$isbn";
	
	$res=mysqli_query($conn,$q) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);	

	
	$inumber= intval($row['b_isbn']);
	$namee = $row['b_nm'];
	$pri = intval($_GET['amount'])*intval($_GET['id']);
	$quanti= intval($_GET['id']);

	//echo $uid;
	if(isset($submit))
	{
		
	$query="insert into shipping_details(name,address,postal_code,city,state,phone,f_id,isbn_num,book_name,book_price,book_qty) values('$name','$address','$pc','$city','$state','$phone','$uid','$inumber','$namee','$pri','$quanti')";

	
	$res=mysqli_query($conn,$query) or die("Can't Execute Query...");
	$query="update book set b_qty= b_qty-'$quanti' where b_isbn='$inumber'";
	echo $query;
	mysqli_query($conn,$query) or die("Can't Execute Query...");
	header("location:payment_details.php");
	}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
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
			<!------------------------------->
			<font style="font-size:30px;margin-left:420px">Shipping Details</font>	
			<div class="container">
			<!-- freshdesignweb top bar -->
            <div class="freshdesignweb-top">
                <div class="clr"></div>
				
            </div><!--/ freshdesignweb top bar -->    
	 									<div class="entry">
										<?php
										
											echo '	<table border="0" width="100%">
												 <tr>
													<td><hr color="purple"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>Item Details</td>
												</tr>
												<tr>
													<td><hr color="purple"></td>
												</tr>
											 </table>
											
											<table border="0"  width="100%" bgcolor="#ffffff">
												<tr> 
													
													<td width="15%" rowspan="3">
														<img src="'.$row['b_img'].'" width="100">
													
													</td>
												</tr>
											
												<tr> 
													<td width="50%" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">
																<td align="right" width="10%">NAME</td>
																<td width="6%">: </td>
																<td align="left">'.$row['b_nm'].'</td>
															</tr>

															<tr>
																<td align="right"> PRICE</td>
																<td>: </td>
																<td align="left">'.$_GET['id']*$_GET['amount'].'</td>
															</tr>
															<tr>
																<td align="right"> QTY</td>
																<td>: </td>

																<td align="left">'.$_GET['id'].'</td>
															</tr>
														</table>
										
														
													</td>
												</tr>
											</table>';
										?>
									</div>
      <div  class="form">
    		<form id="contactform" method="post"> 

    			<p class="contact"><label for="name">Name</label></p> 
    			<input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Address</label></p> 
    			<textarea id="address" name="address" placeholder="Address" required="" cols="55" row="10"type="email"> </textarea>
                
                <p class="contact"><label for="username">Postal Code</label></p> 
    			<input id="pc" name="pc" placeholder="201001" required="" tabindex="2" type="text"> 
    			 
                <p class="contact"><label for="city">City</label></p> 
    			<input type="text" id="city" name="city" required="" placeholder="delhi"> 
                <p class="contact"><label for="state">State</label></p> 
    			<input type="text" id="state" name="state" required="" placeholder="delhi"> 
            <p class="contact"><label for="phone">Mobile phone</label></p> 
            <input id="phone" name="phone" placeholder="phone number" required="" type="text"> <br>
            <input class="button" name="submit" id="submit" tabindex="5" value="Confirm & Proceed" type="submit"> 	 
   </form> 
</div> 
<div id="footer">
						<?php
							include("includes/footer.inc.php");
						?>
			</div>

</div>


</body>