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
table{

  border-collapse: collapse;
}

table, td, tr {
  border: 1px solid #D2691E;
}
input{
  width: 70%;
}
textarea{
  width: 80%;
}
button {
    background-color: #D2691E; /* Green */
    color: white;
    border:none;
    padding: 12px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 25px;
    font-weight: bold;
    border-radius: 30px;
}


.td1{
  background-color: #F3F3F3;
}
.td2{
  width: 60%;
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
        <a href="#">MONEY TRANSEFER</a>
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
    <p>Plaese make sure that you have enough funds availbe in your account to transfer. Also don't forget to validate beneficiary's <br>account number and routing number of receiving banks.</p>
        <br>
        <form id="form1" runat="server" action ="transfer-script.php" method="post">     
            <table id="table1"; cellspacing="20px" cellpadding="10%";>  
               <tr>  
                      <td  align="top" class="td1">Beneficiary's Bank Name:</td>  
                      <td class="td2"><input type="text" name="bbname" /></td>  
               </tr>  
               <tr>  
                      <td align="top" class="td1" >Beneficiary's Account Name:</td>  
                      <td class="td2"><input type="text" name="aname" /></td>  
               </tr>  
               <tr>  
                      <td align="top" class="td1" >Beneficiary's Account Number:</td>  
                      <td class="td2"><input type="text" name="bname" /></td>  
               </tr>  
               <tr>  
                      <td align="top" class="td1" >SWIFT/ABA Routing Number:</td>  
                      <td class="td2"><input type="text" name="rnumber" /></td>  
               </tr>  
               <tr>  
                      <td align="top" class="td1" >Sender's Account Number:</td>  
                      <td class="td2"><input type="text" name="san" /></td>  
               </tr>  
               <tr>  
                      <td align="top" class="td1" >Amount To Transfer:</td>  
                      <td class="td2"><input type="text" name="att" placeholder="Amount to transfer"/></td>  
               </tr>   
               <tr>  
                <td align="top" class="td1" >Fund transfer option</td>  
                <td class="td2">

                <select  name="cars">  
                    
                    <option> --Please select your option-- </option>
                    <option value="NEFT">NEFT</option>  
                    <option value="EIMP">IMPS</option>  
                    <option value="RTGS">RTGS</option>  
                </select>
                </td>                 
               </tr>    
               <tr>  
                      <td align="top" class="td1" >Date of Transfer:</td>  
                      <td class="td2"><input type="text" name="dot" /></td>  
               </tr>  
               <tr>
                 <td  align="top" class="td1" >Transaction Description:</td>
                 <td class="td2"><textarea type="text" name="description"></textarea></td>
               </tr>       
                <tr>  
                <td></td>
                <td> <button type="Submit" value="Submit">TRANSFER</button><br></td>  
                </tr>  
        </table>   
    </form>  
  </div>
</body>
</html>
<?php
  session_destroy();
?>
