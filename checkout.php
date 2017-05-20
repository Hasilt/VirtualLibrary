<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
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


<?php
//session_start();
//$id=$_SESSION['eid'];
$servername = "localhost";
$username = "root";
$dbname = "shop";
$user=$_SESSION['unm'];
$name1=$_SESSION['name1'];
if(!empty($_SESSION['name2']))
{$name2=$_SESSION['name2'];
$f=1;}
elseif (empty($_SESSION['name2'])) {
	$name2=0;
	$f=0;
}
$avl1=$_SESSION['avlbty1']-1;
$cat1=$_SESSION['cat1'];
if(!empty($_SESSION['avlbty2']))
{$avl2=$_SESSION['avlbty2']-1;}
elseif (empty($_SESSION['avlbty2'])) {
	$avl2=0;
} 
if(!empty($_SESSION['name2']))
{$cat2=$_SESSION['cat2'];}
elseif (empty($_SESSION['name2'])) {
	$cat2=0;
}
 
$timestamp = date('Y-m-d G:i:s');
$order1=rand(100,500);
$order2=1+$order1;
// Create connection
$conn = new mysqli($servername, $username, "", $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

		$link=mysql_connect("localhost","root","")or die("Can't Connect...");
			
			mysql_select_db("shop",$link) or die("Can't Connect to Database...");
			
			$q="select * from orders where unm='$user'";
			
			$res=mysql_query($q,$link) or die("wrong query");
			
			$row=mysql_fetch_assoc($res);
if(!empty($row)||($row['status']==1))
	{

echo"<br><div style ='font:18px/28px Arial,tahoma,sans-serif;color:#ff3300'><div style='text-align:center'>You have already made request   ";
    echo'<a href="delreq.php>Click here to delete list</a>';
	echo"<br><div style ='font:21px/31px Arial,tahoma,sans-serif;color:#ff8800'>Have a nice day ☻";
}
else
{ 

	include("config.php");

	$sql1 = "INSERT INTO orders (id,name,cat,ordertime,status,avl,unm)
	VALUES ('$order1','$name1','$cat1','$timestamp',0,'$avl1','$user')";
$sql0= "UPDATE book SET avl-1 WHERE b_nm='$name1'";
$retval0 = mysql_query( $sql0, $link );
	if ($conn->query($sql1) === TRUE) {
    include("includes/head.inc.php");
    include("includes/menu.inc.php");
    include("includes/logo.inc.php");
    echo"<br><div style ='font:21px/31px Arial,tahoma,sans-serif;color:#ff8800'>Okay,   ";
								echo $_SESSION['unm']; 
								echo " Your Request has Completed Successfully Please contact Library with in 24 hours</br>Otherwise your request will be cancelled";
									header('Refresh: 10; URL=index.php');


	} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
	}
	if($f==1)
	{
		$sql2 = "INSERT INTO orders (id,name,cat,ordertime,status,avl,unm)
	VALUES ('$order2','$name2','$cat2','$timestamp',0,'$avl2','$user')";
	$sqla= "UPDATE book SET avl-1 WHERE b_nm='$name1'";
$retvala = mysql_query( $sqla, $link );
	if ($conn->query($sql2) === TRUE) {
	echo"<br><div style ='font:21px/31px Arial,tahoma,sans-serif;color:#ff8800'>Please note down your order Ids,   ";
    echo $order1;
    echo " and ";
    echo $order2;
    echo "Have a nice day ☻";
	}
	else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
			} }
	elseif ($f==0) {
		echo"<br><div style ='font:21px/31px Arial,tahoma,sans-serif;color:#ff8800'>Please note down your order Ids, <br>   ";
    echo $order1;
    echo "<br>Have a nice day ☻";
	}
	
	
}



?>
						<!-- start footer -->
						<div id="footer">
									<?php
										include("includes/footer.inc.php");
									?>
						</div>
						<!-- end footer -->
</body>
</html>
