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
							<h1 class="title">About E-library</h1>
							<div class="entry">
								<table  align="center" width="100%">
	
		
										<tr  bgcolor="#EDE9F3">
											<td align="center" width="100%"><b>What is E-library?</b></td>
										</tr>
										<tr>
											<td ><br><br>
												The E-library was started as an on-line library access for students in the CUCEK. <BR>
												Every title in the E-library assortment is listed with' dynamic and proprietary writing engine, which enables E-library to aggressively avail books while maintaining rest Books.<BR><BR>
												The order placed by the student must take the book within 12 to 24 hours of making an order. 
												<br><br>
											</td>
										</tr>
										<tr bgcolor="#EEE9F3">
											<td align="center" width="100%"><b>Making Knowledge Easier </b></td>
										</tr>
										<tr>
											<td ><br><br>	
												Bridging the gap between the Library and the student and making knowledge more easier and accessible is the purpose of E-library. 
												We are here to help you get the largest selection of books, available in CUCEK, in the easiest way possible, to your doorstep. We bring you books at your clicks.  And finally, The E-library has made accessibility very high by removing physical limitations so that students can access this database from anywhere at their own convenience. 
												Often the hassle to go to a bookstore restricts us from buying books. 
												The E-library is here to solve this problem and create a revolution in the domain of CUCEK Library and Students. 
											<br><br>
											</td>
										
										</tr>
											
									
										
								</table>

							</div>
							
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
