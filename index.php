<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
	$(".loader").fadeOut("slow");
})
</script>
</head>

<body>
			<!-- start header -->
			<div class="loader"></div>
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
			      <span class="title">
				    <?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'to E-Library';
								}
							?>
		        </span></div>
				
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
							<h1 class="title">Welcome 
							  <?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'to E Library';
								}
							?>
							</h1>
							<div class="entry">
								<br>
								<p style="font-family: Gotham, 'Helvetica Neue', Helvetica, Arial, sans-serif; font-style: normal; color: #000000;">
								<span style="font-size: 16px; font-style: normal; font-weight: bold;">E Library</span> is where you can <span style="font-weight: bold">have the book from the library before anyone</span> else. you can also get information about collections of new books, periodicals. Here you can find the<span style="color: #FF0004"> digital copies</span> in PDF format of many books.<br />
								Complete simple procedures and have the book just like booking a movie ticket online. This is done as our mini Project in Semester 6.
								</p>
								<br>		
								
								<object width="550" height="400">
								<!--<param name="movie" value="somefilename.swf">-->
								<embed src="library.swf" width="550" height="400">
								</embed>
								</object>
								<br><br>
								<p>
									The only thing you need to do is sign up with your details and student id. 
									Then goto library tell your Token number which will be given from here , 
									after verification you will get the book.So make sure about the book and its 
									availabilty then you can borrow without anyone taking it.
								
								

								</p>
								<span style="font-size: 28px; font-style: normal; font-weight: bold;">CLICK REGISTER BORROW</span>
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