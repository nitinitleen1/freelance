<?php   
      session_start();
      if (!empty($_SESSION['count2']))
        { 
          session_destroy();
          if(!isset($_SESSION['account'])){
                header("Location: login.php");
             }  
        }
      else
        $_SESSION['count2']=1;
      

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
h1{
  text-align: center;
}
h4{ 
  text-align: center;
  color: solid black;
}
h3{
  font-weight: bold;
  color: solid black; 

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
  background-color: #D2691E;
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
table{
  border-collapse: collapse;
}

table, td, tr {
  border: 2px solid #D2691E;
}
input{
  width:60%;
}
.button {
    background-color: #D2691E; /* Green */
    color: white;
    border:none;
    padding: 12px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    width: 197%;

}
button{
  border-radius: 5px;
  border:none;
  font-size: 20px; 
}
time{
  background-color: #F9D4D4;
  width: 10px;
  border: 1px solid #D2691E;
  border-radius:2px;  
  text-align: center;
  font-size: 20px;
}

.td1{
  background-color: #F3F3F3;
}
.td2{
  width:55%;
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
        <a href="#">ACCOUNT HOME</a>
        <a href="#">ACCOUNT SUMMARY</a>
        <a href="#">MY PROFILE</a>
        <a href="#">ACCOUNT STATEMENT</a>
        <a href="#">MONEY TRANSEFER</a>
        <a href="#">e-bill PAYMENT</a>
        <a href="#">MY SECURITY SETTING</a>
        <a href="#">CHANGE MY PASSWORD</a>
        <a href="#">CHANGE MY PIN</a>
        <a href="#">SIGN OUT</a>
  </div>
  <div id="page-wrap">
    <h3>Transaction Authorization Code Required </h3>
    <br>
    <br>
    <p>The Token Code has been sent to your telephone number.</p>
    <h4>THIS COUNT DOWN AT THE END WILL TAKE THE PAGE BACK</h4>
    <p>You have <time class="time">05:00</time> minutes remaining to insert valid <b>TAC</b> otherwise you will be automatically redirected to funds transfer again.</p>
    <br>
     <form id="form" runat="server">     
            <table cellspacing="20px" cellpadding="10%";>  
               <tr>  
                      <td  align="top" class="td1">Transaction Auhtorization Code:</td>  
                      <td class="td2"><input type="text" name="TAC" /></td>  
               </tr>  
               <tr>  
                      <td class="button"><button type="Submit" value="Submit">VALIDATE</button></td>
                      <td></td>  
               </tr>  
      </form>    
  </div>
</body>
</html>
<?php
  session_destroy();
?>