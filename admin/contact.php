<?php 
session_start();
$link=mysql_connect("localhost","root","")or die("Can't Connect...");
			
	mysql_select_db("shop",$link) or die("Can't Connect to Database...");
	$q="select * from contact";
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
								<TD WIDTH='20%'><b><u>NAME</u></b>
								<TD WIDTH='20%'><b><u>EMAIL</u></b>
								<TD WIDTH='50%'><b><u>QUERY</u></b>
								<TD WIDTH='25%'><b><u>DELETE</u></b>
							
						</tr>
						<?php
							$count=1;
							while($row=mysql_fetch_assoc($res))
							{
							$id=$row['con_id'];
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['con_nm'].'
										<td>'.$row['con_email'].'
										<td>'.$row['con_query'].'
										<td><a href="process_del_contact.php?id='.$id.'"><img src="images/drop.png" >
												
									
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
