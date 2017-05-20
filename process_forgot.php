<?php
$connect = mysql_connect("localhost", "root", "");
mysql_select_db("shop",$connect);
$email = $_POST['email'];
$submit = $_POST['submit'];

if($submit)
{
$email_check = mysql_query("SELECT * FROM user WHERE u_email = '".$email."'");
$count = mysql_num_rows($email_check);
if($count!=0)
{
	$random = md5(rand(72891, 92729));
	//die($random);
	$new_password = $random;
	$email_password = $new_password;
	$new_password = md5($new_password);
	mysql_query("update user set password = '".$new_password."' WHERE u_email = '".$email."'");
	$subject = "E Library Login Information ";
	$message = "Your Password  of your E library account has been changed to $email_password  		Regards Team SHAJY";
	$from = "admin@elibrary.com";
	mail($email,$subject,$message,$from);

	echo'<td align = "left"><img src="images/bg.gif"></td>';
	echo"<div style ='font:21px/31px Arial,tahoma,sans-serif;color:#ff0000'>Your new password has been sent successfully to $email</div>";
	echo"<br><div style ='font:21px/31px Arial,tahoma,sans-serif;color:#ff8800'>You will be redirected , Please Wait !!!</div>";
	echo"<div style ='font:21px/31px Arial,tahoma,sans-serif;color:#000000'>            Regards Team SHAJY</div>";
	include("forgot_msg.html");
	header('Refresh: 4; URL=index.php');
}
else
{
	//<table border="2px"  width="100%" height="100%">
	echo"<div style ='font:21px/31px Arial,tahoma,sans-serif;color:#ff0000'>This email does not exist</div>";
echo"<br><div style ='font:21px/31px Arial,tahoma,sans-serif;color:#ff8800'>You will be redirected , Please Wait !!!</div>";
	header('Refresh: 4; URL=index.php');

}

	}
?>
