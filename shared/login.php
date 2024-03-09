<?php

session_start();
$_SESSION ['login_status']= false ; 

$usernamel = $_POST['usernamel'];
$passwordl = $_POST['passwordl'];
$conn = mysqli_connect("localhost","root","","ecom");

$sql_result = mysqli_query( $conn, "select * from signin where username = '$usernamel' and password = '$passwordl'");
$no_of_rows = mysqli_num_rows($sql_result);

if ($no_of_rows==0){
echo "invalid cridentials";
die;
}

$dbrow=  mysqli_fetch_assoc($sql_result);
echo"success";
$_SESSION ['login_status']= true ; 
$_SESSION ['usertype']= $dbrow['usertype'] ; 
$_SESSION ['userid']= $dbrow['sr no'];
$_SESSION ['username']= $dbrow['username'];





if($dbrow['usertype']== 'vendor' ){
    header("location:../vendor/home.php");
}
else if($dbrow['usertype']== 'customer' ){
    header("location:../customer/home.php");
}


?>