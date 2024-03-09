<?php
  session_start();
  if(!isset($_SESSION['login_status'])){
  
      echo "illigal attempt login bypass";
      die;
  
  }
  if(($_SESSION['login_status']==false)){
  
      echo "unauthorized acess, 403: forbiden";
      die;
  }
  if(($_SESSION['usertype']!='customer')){
      echo "permission denied";
      die;
  }
?>