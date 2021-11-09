<?php
$server = 'localhost'; 
$username = 'root'; 
$password=''; 
$dbname = "sahay";
$conn = mysqli_connect($server, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    // collect value of input field
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
  
    if (empty($name)||(empty($email))||(empty($message))) {
        echo "Please fill all details";
    } else {
        $sql = "INSERT INTO `contact-data` (`name`,`email`,`message`) VALUES ('".$name."','".$email."','".$message."')";
        $run = mysqli_query($conn,$sql);
    

    echo "Thank You For Contacting Us ";
    }}
    $conn->close();

    
        
    



?>