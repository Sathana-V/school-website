<?php

session_start();
$error='';
 if(isset($_POST['submit'])){
 if(empty($_POST['name']) || empty($_POST['password']))
 {
    $error = 'INVALID';
 }
 else
 {
 $user=$_POST['name'];
 $_SESSION['name']=$user;
 $pass=$_POST['password'];
 $conn = mysqli_connect("localhost", "root", "");
 $db = mysqli_select_db($conn, "example");
 $query = mysqli_query($conn, "SELECT * FROM userinput WHERE password='$pass' AND username='$user'");
 $rows = mysqli_num_rows($query);
 if($rows == 1)
 {
 header("Location: home.php");
 }
 else
 {
    $error = "INVALID USERNAME AND PASSWORD";
    
  }
mysqli_close($conn); 
}
}

?>