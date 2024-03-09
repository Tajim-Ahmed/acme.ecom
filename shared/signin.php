<?php
if(!isset($_POST['username']) || !isset($_POST['pass1']))
{
    echo " missing params" ;
    die;
}
$conn = mysqli_connect("localhost","root","");
$status = mysqli_query($conn," insert into `ecom`.`signin`(`username`,`password`,`usertype`) values('$_POST[username]','$_POST[pass1]','$_POST[usertype]')");
if($status){

    echo " sucessfull";

}
else{
    echo mysqli_error($conn);

}

// CREATE TABLE `ecom`.`signin` (`sr no` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(80) NOT NULL , `password` VARCHAR(200) NOT NULL , `usertype` VARCHAR(20) NOT NULL , `created-date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`sr no`)) ENGINE = InnoDB;

?>