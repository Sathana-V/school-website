<?php
session_start();

$con =  mysqli_connect('localhost','root','');
$username=filter_input(INPUT_POST,'name');
$password=filter_input(INPUT_POST,'password');
$age=filter_input(INPUT_POST,'age');
$email=filter_input(INPUT_POST,'email');
$repassword=filter_input(INPUT_POST,'repassword');
$_SESSION['user']=$username;
if($repassword!=$password)
{
  $repasserror='password does not match';
}else
{
  $repasserror='';
}
if(empty($username))
{
    $nameerror='please enter username';
}
else if(strlen($username)<6)
{
    $nameerror='it needs minimum of 4';
}
else{
  $nameerror='';
}
if(empty($password))
{
    $passworderror='please enter it';
}
else if(strlen($password)<6)
{
    $passworderror='it needs minimum of 4';
}
else
{
  $passworderror='';
}

if(empty($nameerror)&&empty($passworderror)&&empty($repasserror))
{
  if($con===false)
  {
      die("my sql is not connected");
  }
  else{
    mysqli_select_db($con,'example');
    $reg ="insert into userinput(username,email,password,age) values('$username','$email','$password','$age')";
    mysqli_query($con,$reg);
    include('thank.php');
  }
}
else
{
    include('welcome.php');
}
?>
