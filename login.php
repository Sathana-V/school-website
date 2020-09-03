
<?php
include("loginphp.php"); 
?>
<html>

<head>
<title>SVMH Student detail</title>
    <link rel="stylesheet" type="text/css" href="welcomecss.css">
    <link rel="shortcut icon" type="image/jpg" href="logo.jpg">
</head>
<body style="background-repeat: no-repeat;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url('box.jpg');">

    
    
 <div class="body1">
        <form action="" method="post">
        <div class="heading1">
        <center>
            <h1>LOGIN HERE</h1>
        </center>
    </div> <br><br><br><br>
           <div class="login">
            <label>USERNAME</label>
            <br><input type="text" placeholder="username" name="name" >
            <br><br>
            <label>PASSWORD</label>
            <br><input type="password" name="password">
            <br>
            <p style="margin-top:45px; color:white;">DON'T HAVE ACCOUNT?<br><a href="welcome.php" > SIGN-UP</p></a>

            <span style="color:red;"><?php echo $error; ?></span>
</div>
        
<button type="submit" name="submit" value="login" style="margin-top:85px;">LOGIN</button>
            
        </form>
        </div>

</body>

</html>