<?php
//include_once 'connection-script.php';
	$link=mysqli_connect('localhost','root','root');
	if(!$link)
		{
			die('Connection failed: '.mysql_error());
		}
	mysqli_select_db($link,'Login_portal');
	session_start();
	;
	$account=$_POST['account'];
	//$account=mysql_real_escape_string($account);
	$account=strip_tags($account);
	//print $account;
    $_SESSION['account'] = $account;

	$pwd=$_POST['password'];
	//$password=$pwd."encrypt";
	//$pwd=md5($password);
	//print $pwd;





	$query="SELECT * from Login where account = '$account'";
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
		if ($pwd == $row['password']) 
		{  
			//ob_end_flush();
			//ob_start();
			header('Location: verify.php');
			//ob_end_flush();
		}
		else
		{
			echo "bhai gadbad hai";
			//header('Location: index.php');
		}
	}			

?>