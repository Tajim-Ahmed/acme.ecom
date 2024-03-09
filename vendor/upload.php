<?php
SESSION_start();

// print_r($_POST);

// echo "<br>";



print_r($_FILES['image']['tmp_name']);
$source=$_FILES['image']['tmp_name'];
$dest="../shared/image/".$_FILES['image']['name'];

move_uploaded_file($source,$dest);
// echo '<br>';
// echo $dest;

$conn = mysqli_connect("localhost","root","");

 $status=mysqli_query($conn," insert into ecom.product(category,title,price,des,imgpath,owner) values('$_POST[category]','$_POST[title]',$_POST[price],'$_POST[discription]','$dest',$_SESSION[userid])");
 if($status){
    echo "product uploaded sucessfully";
 }
 else{
    echo mysqli_error($conn);
 }

header("location:home.php");


?>