<?php
$server = 'localhost'; 
$username = 'root'; 
$password=''; 
$dbname = "sahay";
$conn = mysqli_connect($server, $username, $password, $dbname);

//if (isset($_POST['submit'])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  
    
    $title = $_REQUEST['title'];
    $description = $_REQUEST['description'];
    $fileName = $_FILES['file']['name'];
    $fileType = $_FILES['file']['type'];
    $filePath = "C:/xampp/htdocs/Mini/assets/images/causes/".$fileName;

    if (empty($title)||(empty($description))||(empty($filePath))) {
        echo "Please fill all details";
    } else {
        $sql = "INSERT INTO `causes-images` (`title`,`description`,`file`) VALUES ('".$title."','".$description."','".$filePath."')";
        $run = mysqli_query($conn,$sql);
    

    echo "Your image has been sucessfully uploaded";
    
    }}
    
    $conn->close();

?>