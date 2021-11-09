<?php

include("contact.php");
extract($_POST);
$sql = "INSERT INTO `contact-data` (`name`,`email`,`message`) VALUES ('".$name."','".$email."','".$message."')";
$result = $myqli->query($sql);


if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}

echo "Thank You For Contacting Us ";
$mysqli->close();


?>