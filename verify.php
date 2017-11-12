<?php   
      session_start();
      if (!empty($_SESSION['count']))
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
.container {
	margin-left: auto;
	margin-right: auto;
    width: 100%;
    border: 1px solid gray;
}

header {
    padding: 1em;
    color: white;
    background-color: #D2691E;
    clear: left;
    text-align: center;
}
.div{ 
  	margin-left: auto ;
  	margin-right: auto ;
	width: 200px;
    height: 50px;    
    padding: 60px;
    border: 1px solid #D2691E;
    position: relative;
  font-weight: bold;
  margin-bottom: 10px;
}
h1{
	text-align: center;
	color: #D2691E; 
}
h4{
	text-align: center;
}
.logo{
	margin-top: 5%;
	text-align: center;
	font-size: 350%;
	font-weight: bold;
}
button{
   width:120px;
   margin:0 50%;
   position:relative;
   left:-50px;
}
</style>
</head>
<body>
<header>
   <h1>STONEGATEBANK</h1>
</header>
<div class="logo">LOGO</div>
<h1>Login Step 2</h1>
<h4>Enter Pin to Proceed</h4>
 <form action="verify-script.php" method="post">
  <div class="div">
    <label>PIN: </label>
    <input type="text" name="pin" placeholder="Enter PIN">
    <br>
    <br>
    <button type="submit" value="Enter">VALIDATE PIN</button>
    </form>
</div>

</body>
</html>
<?php
  session_destroy();
?>