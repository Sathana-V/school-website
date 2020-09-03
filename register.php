<?php

session_start();
$con =  mysqli_connect('localhost','root','');
$name=filter_input(INPUT_POST,'name');
$phone=filter_input(INPUT_POST,'phone');
$age=filter_input(INPUT_POST,'age');
$email=filter_input(INPUT_POST,'email');
$fname=filter_input(INPUT_POST,'fname');
$mname=filter_input(INPUT_POST,'mname');
$city=filter_input(INPUT_POST,'city');
$dob=filter_input(INPUT_POST,'dob');
$grade=filter_input(INPUT_POST,'grade');
$_SESSION['name']=$name;
if(empty($phone))
{
    $phoneerror='please enter it';
}
else if(strlen($phone)<10)
{
    $phoneerror='invalid mobile number';
}
else
{
    $phoneerrorr='';
}

if(empty($phoneerror))
{
  if($con===false)
  {
      die("my sql is not connected");
  }
  else{
    mysqli_select_db($con,'student');
    $reg ="insert into admins(name,dob,age,grade,father,mother,phone,city,email) values('$name','$dob','$age','$grade','$fname','$mname','$phone','$city','$email')";
    mysqli_query($con,$reg);
    include('thank.php');
  }
}
else
{
    include('admis.php');
}

?>
