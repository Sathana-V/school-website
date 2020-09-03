<?php


if(!isset($age)){
    $age='';
}if(!isset($fname)){
    $fname='';
}if(!isset($mname)){
    $mname='';}
    if(!isset($dob)){
        $dob='';}
    if(!isset($email)){
        $email='';}
        if(!isset($grade)){
            $grade='';}
            if(!isset($city)){
                $city='';}
                if(!isset($name)){
                    $name='';}
if(!isset($phone))
{   
    $phone='';
    $phoneerror='';
    
}

 ?><html><head>
    <title>
        home page
</title>
<link rel="stylesheet" type="text/css" href="homecss.css">
    <link rel="shortcut icon" type="image/jpg" href="logo.jpg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    .but{
        width:300px;
        color:yellow;
        border-radius:50px;
        height:40px;
        text-align:center;
        background:none;
        content-align:center;
    }
    button
    {
        border-radius:50px;
        height:40px;
        width:300px;
        color:yellow;
        text-align:center;
        background-color:black;
        margin-left:40%;
    }
    </style>
<body style="background-repeat: no-repeat;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url('bg.jpg');" >
<div class=".container-fluid">
<div class="heading1">
        <center>
            <h1>SVMH SCHOOL</h1>
        </center>
    </div>
    <nav id="navbar">

        <ul>
            <li><img src="logo.jpg" height="30"class="img-circle" width="60" </li>
          
            <li><a href="home.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="gallery.php">GALLERY</a></li>
                <li><a href="admis.php">ADMISSION</a></li>
                <li><a href="logout.php">LOGOUT</a></li>
                <li><a href="contact.php">CONTACT US</a></li>
                 


        </ul>
    </nav>
    
   
        
    <form action="register.php" method="post"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
        <div class="about">
        
            <h1 style="text-align:center; font-size:60px;">ADMISSION&nbspFORM</h1>
        
        </div>
        <div class="formi">
        <label>NAME</label>
        <br/>
                <input class="but"type="text" placeholder="" name="name" pattern="[a-z]{1,15}"value="<?php echo $name?>" required><br/>
                <label>AGE</label><br/>
                <input class="but" type="number"  name="age"value="<?php echo $age?>" required><br/>
                <br>
                <label for="birthday">DOB</label><br/>
  <input  class="but" type="date" name="dob" name="birthday" value="<?php echo $dob?>"required><br>
                <label>FATHER NAME</label><br/>
                <input class="but" type="text" placeholder=""value="<?php echo $fname?>" name="fname" pattern="[a-z]{1,15}" required><br/>
                <label>MOTHER NAME</label><br/>
                <input class="but" type="text" placeholder="" name="mname"value="<?php echo $mname?>" pattern="[a-z]{1,15}" required><br/>
                <label>CITY</label><br/>
                <input class="but" type="text" placeholder="" name="city"value="<?php echo $city?>" pattern="[a-z]{1,15}" required><br/>
                <label>GRADE</label><br/>
                <input class="but" type="number" class="box" value="<?php echo $grade?>"name="grade" required><br>
                <label for="email">EMAIL</label><br/>
<input class="but" type="email" id="email" name="email"value="<?php echo $email?>"required><br>

  <label for="phone">PHONE NUMBER</label><br/>
<input class="but" type="tel" id="phone" name="phone" required>
<br>
<p style="color:red;">
            <?php 
               
                echo $phoneerror;
            ?></p>
<br>
 </div>
 <button type="submit" >SUBMIT</button>
    </form>
</body>
<div class="footer">
        <div class="copyright">
            © Copyright 2016 All Rights Reserved
             <br>For More Details &nbsp
             CONTACT:987678987
    </div>
 </html>