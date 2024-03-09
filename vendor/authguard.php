<?php
  session_start(); // Make sure to start the session before accessing session variables
  
  if(!isset($_SESSION['login_status'])){
    echo "Illegal Attempt, Login Bypassed";
    die;
 }
 
 if($_SESSION['login_status']==false){
    echo "unauthorized Access,403:Forbidden";
    die;
 }

 if($_SESSION['usertype'] != 'Vendor'){
    echo "Permission Denied, Authorization Failed";
    die;
 }
?>