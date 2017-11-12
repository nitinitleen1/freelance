<?php   
      session_start();
      if (!empty($_SESSION['count1']))
        { 
          session_destroy();
          if(!isset($_SESSION['account'])){
                header("Location: login.php");
             }  
        }
      else
        $_SESSION['count']=1;
      
?>
<!DOCTYPE html>
<html>
<head>
<style>

header {
    padding: 1em;
    color: white;
    background-color: #D2691E;
    clear: left;
    text-align: center;
}
h1,h4{
	text-align: center;
	font-style: 
}
#sidebar a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 4px;
    text-decoration: none;
}

#sidebar a:hover {
    background-color: #D2691E;
}

#sidebar a.active {
    background-color: #D2691E;
    color: black;
}
.image{
  width: 200px;
  height: 70px;
  margin-top: 0;
}

#main {
    margin: auto;
}

#sidebar    {
    width: 210px;
    min-height: 800px;
    float: left;
}

#page-wrap  {
  margin-top: 25px;
  margin-left: 20px;
  float: left;
}
#page-wrap a{
  color:red;
}

.clear:after {
    clear: both;
    display: table;
    content: "";
}
hr{
  width: 100%;
  height: 1px;
}
</style>
</head>
<body>
<header>
   <h1>STONEGATEBANK</h1>
</header>

<div id="main" class="clear">

  <div id="sidebar">
    <div class="image"><img src="">PHOTO</div>
    <hr>
        <a href="#" class="active">ACCOUNT MENU</a>
        <hr>
        <a href="#">ACCOUNT HOME</a>
        <hr>
        <a href="#">ACCOUNT SUMMARY</a>
        <hr>
        <a href="#">MY PROFILE</a>
        <hr>
        <a href="#">ACCOUNT STATEMENT</a>
        <hr>
        <a href="transfer.php">MONEY TRANSEFER</a>
        <hr>
        <a href="#">e-bill PAYMENT</a>
        <hr>
        <a href="#">MY SECURITY SETTING</a>
        <hr>
        <a href="#">CHANGE MY PASSWORD</a>
        <hr>
        <a href="#">CHANGE MY PIN</a>
        <hr>
        <a href="#">SIGN OUT</a>
  </div>
  <div id="page-wrap">
    <p><?php
//include_once 'connection-script.php';
 error_reporting(E_ERROR | E_PARSE);
session_start();
if(!isset($_SESSION['account']))
{
  header('Location: login.php');
}
else{
  echo $_SESSION['account'];
}

?></p>
        <br>
        <p>You logged in from IP Address: IP ADDRESS(This IP has recorded for the security purpose)</p>
        <p>You logged in at: TIME AND DATE</p>
        <div class="Inbox">Inbox</div>
        <h2><a href="#">Alert: </a> 0</h2>
  </div>
</div>
</body>
</html>

