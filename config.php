<?php
$link=mysql_connect("localhost","root","")or die("Can't Connect...");
			
	mysql_select_db("shop",$link) or die("Can't Connect to Database...");
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //you need to exit the script, if there is an error
    exit();
}
?>
