
 <html>
  <head>
  <title> Thank YOU</title>
</head>
<style>
  h1{
     color:red;
  }
  body{
    background-image: url('box.jpg');
    background-repeat: no-repeat;
   
 
    background-size: cover;
  }
  h1{
    text-align:center;
    margin-top:20%;
    font-size:60px;
  }
  button{
    background-color:black;
  color:white;
border-radius:30px;
height:90px;
align-content:center;
text-align:center;
margin-left:40%;  }
  </style>
<body>
<h1>WELCOME 
  <?php 
  if(isset($_SESSION['name']) && isset($_SESSION['user']) )
  {
    echo  $_SESSION['user'];
  }else
   if(isset($_SESSION['name']))
   {
     echo  $_SESSION['name'] ;
   }else
   if(isset($_SESSION['user']))
   {
    echo  $_SESSION['user'];
   }
   ?></h1>
    <h1 style=" margin-top:0%;">THANK YOU FOR REGISTERING</h1>
    <a href="home.php"><button>RETURN HOME</button></a>
</body>
</html>
