<?php
include('rserver.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>ARA</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="register.css" rel="stylesheet">
    <link href="d.css" rel="stylesheet">
  
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
<a href="login.php" target="_self" class="tabs__link">LOGIN</a>
</li>
<li class="tabs__item">
<a href="#" class="tabs__link" target="_self">NEWS</a>
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


<div class="topnav">
<a href="donreg.php">DONOR</a>

<a class="active" href="rreg.php">RECEVIER</a>
<a href="docreg.php">DOCTOR</a>
</div>
    
    <div class="login-form">
        <div class="form">

            
        <form class="login-form" method="POST" action="rreg.php">
            <?php include('errors.php');
            ?>
                <input type="text" placeholder="Receiver-name" name="username" />
                <input type="tel" placeholder="Aadhar-no" name="adharno" />
                <input type="text" placeholder="Mobile-no" name="contactno" />
                <input type="text" placeholder="Address" name="address" />
                <input type="text" placeholder="Organ u need" name="organ" />
                <input type="password" placeholder="password" name="pass1" />
                <input type="password" placeholder="Confirm-password" name="pass2" /><br>
                <button name="signup" value="signup">SIGNUP</button>
                <p class="message" style="margin-left:13%;padding:20px;font-size:20px">Already registered? <a href="login.php">SIGN IN</a></p>

            </form>
        </div>
    </div>
</body>

</html>
