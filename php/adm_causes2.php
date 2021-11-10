<?php
$server = 'localhost'; 
$username = 'root'; 
$password=''; 
$dbname = "sahay";
$conn = mysqli_connect($server, $username, $password, $dbname);

if (isset($_POST['submit'])) {
  
    
    $title = $_REQUEST['title'];
    $description = $_REQUEST['description'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
   
		$folder = "assets/images/causes/".$fileName;
  
    if (empty($title)||(empty($description))||(empty($fileName))) {
        echo "Please fill all details";
    } else {
        $sql = "INSERT INTO `causes-images` (`title`,`description`,`file`) VALUES ('".$title."','".$description."','".$fileName."')";
        $run = mysqli_query($conn,$sql);
    

    echo "Your image has been sucessfully uploaded";
    
    }}
    
    $conn->close();

    
        
    



?>