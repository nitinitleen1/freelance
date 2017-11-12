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
	width: 450px;
    height: 200px;    
    padding: 60px;
    border: 1px solid #D2691E;
    position: relative;
  font-weight: bold;
  margin-bottom: 10px;
}
h1,h4{
	text-align: center;
	font-style: 
}
.logo{
	margin-top: 5%;
	text-align: center;
	font-size: 250%;
	font-weight: bold;
}
button{
   width:100px;
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
<h4>stonegate banking Service</h4>
 <form action="/action_page.php">
  <div class="div">
    <label>Account#: </label>
    <input type="text" name="account" placeholder="Enter Your Account Number">
    <br>
    <br>
    <label>Password: </label>
    <input type="Password" name="password" placeholder="Enter Your Password">
    <br>
    <br>
     <input type="checkbox" name="username" value="pass" checked>Remind me my Username <br>
    <br>

    <button type="submit" value="Enter">Enter</button>
    <br>
    <br>
    <a href="#">Have you forgotten your Username or Password </a>
</form>
</div>

</body>
</html>
