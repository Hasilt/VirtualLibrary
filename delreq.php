<?php
session_start();
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

<html>
   
   <head>
      <title>Delete the Request</title>
   </head>
   
   <body>
      <?php
      
       $unm = $_SESSION['unm'];
         if(isset($_POST['delete'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $conn = mysql_connect($dbhost, $dbuser, "");
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
			$id = $_POST['id'];	
           
            $sql0= "UPDATE book SET avl+1 WHERE id='$id'";
            $sql = "DELETE from orders WHERE id = '$id'" ;
            mysql_select_db('shop');
            $retval = mysql_query( $sql, $conn );
            $retval0 = mysql_query( $sql0, $conn );

            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }
            
            echo"<br><div style ='font:21px/31px Arial,tahoma,sans-serif;color:#2F4F4F'><div style='text-align:center'>Data Deleted Successfully ";
            
            mysql_close($conn);
         }else {
            ?>
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" align="center"
                     cellpadding = "2">
                     <table border='1' WIDTH='100%'>
						<tr>
								<td WIDTH='10%'><b><u>NO</u></b>
								<TD WIDTH='45%'><b><u>Name</u></b>
								<TD WIDTH='20%'><b><u>Category</u></b>
								<TD WIDTH='20%'><b><u>Time</u></b>
								<TD WIDTH='30%'><b><u>Order Id</u></b>
							
						</tr>
                     <?php
                    $conn = mysql_connect("localhost", "root", "");
                     mysql_select_db('shop');
                                 $q="select * from orders where unm='$unm'";
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

												
									
									</tr>';
									$count++;
							}
                     ?>
                     <tr>
                        <td width = "100">Enter Order ID</td>
                        <td><input name = "id" type = "text" 
                           id = "id"></td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td>
                           <input name = "delete" type = "submit" 
                              id = "delete" value = "Delete">
                        </td>
                     </tr>
                     
                  </table>
               </form>
            <?php
         }
      ?>
      
   </body>
</html>
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