<?php
session_start();
$db = mysqli_connect("localhost","root","","akrosh");
if (isset($_POST['username'])) {
    $pass1 = $_POST['pass1'];
    $username = $_POST['username'];
    $query = "select * from donor where username = '".$username."' AND password = '".$pass1."' limit 1; ";
    $result = mysqli_query($db,$query);
    $query1 = "select * from receiver where username = '".$username."' AND password = '".$pass1."' limit 1; ";
    $result1 = mysqli_query($db,$query1);
    $query2 = "select * from doctor where username = '".$username."' AND password = '".$pass1."' limit 1; ";
    $result2 = mysqli_query($db,$query2);


    
    if(mysqli_num_rows($result)==1)
    {  $_SESSION['username']= $username;
        $_SESSION['password']= $pass1; 
       header("location:donfront.php");
       exit();
   }

    if(mysqli_num_rows($result1)==1)
    {
        $_SESSION['username']= $username;
        $_SESSION['password']= $pass1; 
       header("location:rfront.php");
       exit();
   }

    if(mysqli_num_rows($result2)==1)
    {
        $_SESSION['username']= $username;
        $_SESSION['password']= $pass1; 
       header("location:docfront.php");
       exit();
   }

   if($username=="admin" )
   {
    if($pass1=="admin@123")
    {
        header("location:admin.php");
     exit();  
    }
   }


    else
    {
        header("location:login.php");
    exit();
    }
    

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="l.css" rel="stylesheet">
    <link href="home.css" rel="stylesheet">
 
</head>

<body>

<div class="logo">
<p id="logo"> <img src="LOGO.jpeg" alt="logo">AKROSH COMPANY
<p style=" text-align:center "> the organisation of ARA Foundation for Charity</p>
</p>
</div>
<div class="nav">
<nav class="nav-collapse" role="navigation">
<ul class="tabs primary-nav">
<li class="tabs__item">
<a href="home.html" target="_self" class="tabs__link">HOME</a>
</li>
<li class="tabs__item">
<a href="donreg.php" target="_self" class="tabs__link">REGISTER</a>
</li>
<li class="tabs__item">
<a href="news.html" class="tabs__link" target="_self">NEWS</a>
</li>
<li class="tabs__item">
<a href="storyho.html" class="tabs__link" target="_self">STORIES</a>
</li>
<li class="tabs__item">
<a href="about.html" class="tabs__link" target="_self">ABOUT US</a>
</li>
</ul>
</nav>
</div>
<div class="login-form" >
    
        <div class="form">

            <form class="login" method="POST" action="login.php">
           
                <input type="text" placeholder="Username" name="username" /><br>
                <input type="password" placeholder="Password" name="pass1" />
                <br>
                <button name="login" value="login_btn">LOGIN</button>
                <p class="message" style="margin-left:13%;padding:20px;font-size:20px">Not yet registered? <a href="donreg.php">Signup</a></p>

            </form>
        </div>
    </div>
</body>

</html>
