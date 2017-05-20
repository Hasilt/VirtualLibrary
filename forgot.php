<!doctype html>
<html>
<head>
<style>
.center {
    margin: auto;
    width: 60%;
    border: 3px solid #73AD21;
    padding: 10px;
}
</style>
<meta charset="utf-8">
<title>Forgot</title>
</head>
<body>
<?php session_start();?>

		<?php
			include("includes/head.inc.php");
		?>


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
							<span style="font-size: 36px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">
							<?php
								include("includes/logo.inc.php");
							?>
    </span></div>
  </div>
  
<div class="center">
<form action="process_forgot.php" method="POST">
  <span style="font-size: 16px; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif;">Your Email:<br/> 
<input name="email" type="text" autocomplete="on" size="30" >
<input name="submit" type="submit" id="Submit" title="Submit" value="Submit" >
  </span>
</form><br>

</div>
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
<span style="color: #828282"></span>
</body>
</html>