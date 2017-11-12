<?php
  error_reporting(E_ERROR | E_PARSE);
  $link=mysqli_connect('localhost','root','root');
  if(!$link)
    {
      die('Connection failed: '.mysqli_error());
    }
  mysqli_select_db($link,'Login_portal');
  session_start();  

           $san= $_POST["san"];
            //echo $id;
           $bbname = $_POST['bbname'];
           //echo $_GET['Name'];
           $bname=$_POST['bname'];
           $aname=$_POST['aname'];
           $rnumber =$_POST["rnumber"];
           //$san =$_GET['san'];
           $amount= $_POST['att'];
           $mode = $_POST['cars'];
           $date = $_POST['dot'];
           $desc = $_POST['description'];
           

          $sql="INSERT INTO transfer VALUES('$bbname','$aname','$bname','$rnumber','$san','$amount','$mode','$date','$desc')";
          $result=mysqli_query($link,$sql);
          // if ($result) {
          //   // echo "done";
          // }
          header('Location: validate.php');
?>