<?php session_start();?>

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
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">View List</h1>
							<h3><a href="delreq.php"><text align="right">Delete Requested Books</a></h3>
							<div class="entry">
							<pre><?php
							//	print_r($_SESSION);
							?></pre>
						
							<form action="process_cart.php" method="POST">
							<table width="100%" border="0">
								<tr >
									<Td> <b>Id
									<td> <b>Category
									<td> <b>Title
									<td> <b>Publisher
									<td> <b>Availability
									<td> <b>Pages
									<td> <b>Delete
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
									$tot = 0;
									$i = 1;
								
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	//print_r($_GET);
										echo '
											<tr>
											<Td> '.$i.'
											<td> '.$x['cat'].'
											<td> '.$x['nm'].'
											<td> '.$x['pub'].'
											<td> '.$x['avl'].'
											<td> '.$x['page'].'
											<td> <a href="process_cart.php?id='.$id.'">Delete</a>
										</tr>
										';
										
											if ($i==1)
											 {
											 	
												$_SESSION['name1']=$x['nm'];
												$_SESSION['avlbty1']=$x['avl'];
											    $_SESSION['cat1']=$x['cat']; 
											}

											else if ($i==2) {
												$_SESSION['name2']=$x['nm'];
												$_SESSION['avlbty2']=$x['avl'];
											    $_SESSION['cat2']=$x['cat'];
											
											}
											
									
										
										
										$tot = $i;
										$i++;


										if(isset($_SESSION['status']))
												 {
													//echo ' <td><a href="process_cart.php?nm='.$row['b_nm'].'&cat='.$_GET['cat'].'&rate='.$row['b_price'].'">
													echo ' <td><a href="process_cart.php?nm='.$x['nm'].'&cat='.$x['cat'].'&pub='.$x['pub'].'&page='.$x['page'].'&avl='.$x['avl'].'"></a></td>';
												}
									
									}
										
									}
								if(isset($_SESSION['status']))
								{
								echo"<br><div style ='font:21px/31px Arial,tahoma,sans-serif;color:#2F4F4F'> Hello ";
								echo $_SESSION['unm']; 
								echo " Please Confirm your list</div>";	
								}
								else
								{
								echo"<br><div style ='font:21px/31px Arial,tahoma,sans-serif;color:#ff8800'>Please Log in  ";
								}
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="6" align="right">
							<h4>&nbsp;</h4>
							
							</td>
							<td>&nbsp;</td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							<Br>
								</table>						

								<br><br>
							<center>
							<?php
								if ($i>3) {
									include 'limit.php';
								}
								?>
							<input type="submit" value=" Proceed " >
							</center>
							</form>
							</div>
							<h2><font color="white"></h2>
						</div>
						
					</div>
					<!-- end content -->
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
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