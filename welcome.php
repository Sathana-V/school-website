<?php

if(!isset($age)){
    $age='';
$email='';
}
if(!isset($username))
{   
    $username='';
    $nameerror='';
    
}
if(!isset($password))
{   
    $password='';
    $passworderror='';
    
}
if(!isset($repassword))
{   
    $repassword='';
    $repasserror='';
    
}
?>
<html>

<head>
<title>Home page</title>
    <link rel="stylesheet" type="text/css" href="welcomecss.css">
    <link rel="shortcut icon" type="image/jpg" href="logo.jpg">
</head>
<body style="">

    
    
 <div class="body1">
        <form action="sql.php" method="post"<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>
        <div class="heading1">
        <h1>
            <h1>REGISTER</h1>
        </h1>
    </div> <br>
    <br>
            <label>USERNAME</label>
            <br><input type="text"  placeholder="username" name="name" value="<?php echo $username?>">
            <br><p style="color:red;">
            <?php 
               
                echo $nameerror;
            ?></p>
            <br>
            <label>EMAIL ID</label>
            <br>
            <input name="email" type="email" value="<?php echo $email ?>" required>
            <br><br>
            <label>PASSWORD</label>
            <br><input type="password" name="password">
            <br>
            <br><p style="color:red;">
            <?php 
               
                echo $passworderror;
            ?></p><br>
            <label>RE-ENTER PASSWORD</label>
            <br><input type="password" name="repassword">
            <br>
            <br><p style="color:red;">
            <?php 
               
                echo $repasserror;
            ?></p>
            <br>
            <label>AGE</label>
            <br><input type="text" name="age" value="<?php echo $age ?>" required>
            <br>
            
             <br><br>
        
            <button type="submit" >SUBMIT</button>
            
        </form>
        </div>

</body>

</html>