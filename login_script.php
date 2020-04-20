<?php
session_start();
?>
<?php
require 'connection.php';
if(isset($_POST['username']) && isset($_POST['password']))
  {
$email= mysqli_real_escape_string($conn,$_POST['username']);
   
   $pass=mysqli_real_escape_string($conn,$_POST['password']);
  
   //$pass=md5($pass);
   
   
   
  $sql1="select * from users where email_id='".$email."'AND pass='".md5($pass)."'";
   $value=mysqli_query($conn,$sql1);
   $row = mysqli_num_rows($value);
   
if($row >0)
{
    $data=mysqli_fetch_array($value);
   // header('location:signup.php');	
    $_SESSION["email"]=$data["email_id"];
    $_SESSION["name"]=$data["name"];
    echo $data["email_id"];
  
}
 else {
    
}

  }
?>