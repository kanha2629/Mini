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
    $fileType = $_FILES['file']['type'];

    if (empty($title)||(empty($description))||(empty($fileName))) {
        echo "Please fill all details";
    }
     else{
    if($fileType=='image/jpeg'|| $fileType=='image/png'|| $fileType=='image/jpg'|| $fileType=='image/gif'){
        move_uploaded_file($_FILES['file'],['type']);
        $filepath = "assets/images/causes/".$fileName;
        $sql = "INSERT INTO `causes-images` (`title`,`description`,`file`) VALUES ('".$title."','".$description."','".$filepath."')";
        $run = mysqli_query($conn,$sql);

        echo "Your image has been sucessfully uploaded";
    


    }}
   
		
  
    // if (empty($title)||(empty($description))||(empty($fileName))) {
    //     echo "Please fill all details";
    // } else {
    //     $sql = "INSERT INTO `causes-images` (`title`,`description`,`file`) VALUES ('".$title."','".$description."','".$fileName."')";
    //     $run = mysqli_query($conn,$sql);
    

    // echo "Your image has been sucessfully uploaded";
    
    // }}
    
    $conn->close();
}
?>