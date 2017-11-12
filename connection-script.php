<?php
$link=mysqli_connect('localhost','root','root');
if(!$link)
	{
		die('Connection failed: '.mysql_error());
	}
mysqli_select_db($link,'Login_portal');
?>


