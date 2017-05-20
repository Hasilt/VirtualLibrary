<?php 
session_start();
$link=mysql_connect("localhost","root","")or die("Can't Connect...");
			
	mysql_select_db("shop",$link) or die("Can't Connect to Database...");
	$q="select * from orders";
	 $res=mysql_query($q,$link) or die("Can't Execute Query...");

	mysql_close($link);
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
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
				
					<table border='1' WIDTH='100%'>
								<tr>
								<td WIDTH='10%'><b><u>NO</u></b>
								<TD WIDTH='40%'><b><u>Name</u></b>
								<TD WIDTH='20%'><b><u>Category</u></b>
								<TD WIDTH='20%'><b><u>Time</u></b>
								<TD WIDTH='30%'><b><u>Order Id</u></b>
								<TD WIDTH='5%'><b><u>Order Id</u></b>
							
						</tr>
                     <?php
                    $conn = mysql_connect("localhost", "root", "");
                     mysql_select_db('shop');
                                 $q="select * from orders";
                                 $res=mysql_query($q,$conn) or die("wrong query");
			$count=1;
							while($row=mysql_fetch_assoc($res))
							{
							$id=$row['id'];
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['name'].'
										<td>'.$row['cat'].'
										<td>'.$row['ordertime'].'
										<td>'.$row['id'].'
										<td><a href="process_orders.php?id='.$id.'"><img src="images/drop.png" >

												
									
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
