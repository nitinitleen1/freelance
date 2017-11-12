<?php
//include_once 'connection-script.php';
	$link=mysqli_connect('localhost','root','root');
	if(!$link)
		{
			die('Connection failed: '.mysql_error());
		}
	mysqli_select_db($link,'Login_portal');
	session_start();
	$pin=$_POST['pin'];
	//print $pin;

	$query="SELECT * from Login where pin = '$pin'";
	$result=mysqli_query($link,$query);
	//print $result;
	$num=mysqli_num_rows($result);
	//print $num;
	$row=mysqli_fetch_array($result);
	if($num == 0)
	{
		//header('location: index.php');
		echo 3;
	}
	else
	{	
		//print "bhai sahi chal raha hai";
		header('Location: dashboard.php');
	}			

?>