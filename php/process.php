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
    //<div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">


    /*
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="donateModalLabel">Thank you</h4>
        </div>
        <div class="modal-body">

              <table class="form-donation">

                      <h3 class="title-style-1 text-center">For contacting us <span class="title-under"></span>  </h3>

                    //   <div class="row">

                    //       <div class="form-group col-md-12 ">
                    //           <input type="text" class="form-control" id="amount" placeholder="AMOUNT">
                    //       </div>

                    //   </div>


                    //   <div class="row">
                    //       <div class="form-group col-md-6">
                    //           <input type="text" class="form-control" name="firstName" placeholder="First name*">
                    //       </div>

                    //       <div class="form-group col-md-6">
                    //           <input type="text" class="form-control" name="lastName" placeholder="Last name*">
                    //       </div>
                    //   </div>


                    //   <div class="row">

                    //       <div class="form-group col-md-6">
                    //           <input type="text" class="form-control" name="email" placeholder="Email*">
                    //       </div>

                    //       <div class="form-group col-md-6">
                    //           <input type="text" class="form-control" name="phone" placeholder="Phone">
                    //       </div>

                    //   </div>

                    //   <div class="row">

                    //       <div class="form-group col-md-12">
                    //           <input type="text" class="form-control" name="address" placeholder="Address">
                    //       </div>

                    //   </div>


                    //   <div class="row">

                    //       <div class="form-group col-md-12">
                    //           <textarea cols="30" rows="4" class="form-control" name="note" placeholder="Additional note"></textarea>
                    //       </div>

                    //   </div>

                    //   <div class="row">

                    //       <div class="form-group col-md-12">
                    //           <button type="submit" class="btn btn-primary pull-right" name="donateNow" >DONATE NOW</button>
                    //       </div>

                      </div>
            </form>         
                    

                     
                  
              
          
        </div>
      </div>
    </div>

  </div> <!-- /.modal -->

  */
  
    if (empty($name)||(empty($email))||(empty($message))) {
        echo "Please fill all details";
    } else {
        $sql = "INSERT INTO `contact-data` (`name`,`email`,`message`) VALUES ('".$name."','".$email."','".$message."')";
        $run = mysqli_query($conn,$sql);
    

    echo "Thank You For Contacting Us ";
    }
}
    $conn->close();

    
        
    



?>