<?php

	$link=mysql_connect("localhost","root","")or die("Can't Connect...");
			
			mysql_select_db("shop",$link) or die("Can't Connect to Database...");
			$id=$_GET['id'];
		
			
			
			$query="delete from contact where con_id ='$id'";
		
			mysql_query($query,$link) or die("can't Execute...");
			
			
			header("location:contact.php");

?>