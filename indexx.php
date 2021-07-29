<?php
$insert = false;
//if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname = "uni";
    
    // Create a database connection
    $con = mysqli_connect($server, $username, $password, $dbname);
    
    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";
    
    // Collect post variables
    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
     $sql = "INSERT INTO `uni` (`Name`, `Email`, `phone`, `other`) VALUES ( '$Name', '$Email', '$phone', '$desc')"; 
   
     //echo $sql;

     if (mysqli_query($con, $sql)) {
       echo "<h2>You have Succesfully Submitted Your form! </h2>";
       echo"<h4>Thanks for Contactig Us</h4>";
     
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }

    // Close the database connection
    $con->close();
//}
?>
