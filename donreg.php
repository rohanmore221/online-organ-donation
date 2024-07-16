<?php
include('donserver.php');

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


<div class="topnav">
<a class="active" href="donreg.php">DONOR</a>

<a href="rreg.php">RECEVIER</a>
<a href="docreg.php">DOCTOR</a>
</div>
    
    <div class="login-form">
        <div class="form">

            
        <form class="login" method="POST" action="donserver.php" name="myform" onsubmit="func2()">

           
                <input type="text" placeholder="Donor-name" name="username" id="username"/>
                <input type="tel" placeholder="Aadhar-no" name="adharno" id="adharno" />
                <input type="text" placeholder="Mobile-no" name="contactno" id="mobileno" />
                <input type="text" placeholder="Address" name="address" id="address" />
                <input type="text" placeholder="Organ u would like to donate" name="organ" id="organ" />
                <input type="password" placeholder="password" name="pass1" id="pass1" />
                <input type="password" placeholder="Confirm-password" name="pass2" id="pass2"/>
                <br>
                <button name="signup" value="signup">SIGNUP</button>
                
                <p class="message" style="margin-left:13%;padding:20px;font-size:20px">Already registered? <a href="login.php">SIGN IN</a></p>

            </form>

        </div>
    </div>
    <script>
        function func2(){
               var username=document.myform.username.value;  
               var adharno=document.myform.adharno.value;
               var mobileno=document.myform.contactno.value; 
               var address=document.myform.address.value;
               var organ=document.myform.organ.value;       
               var pass1=document.myform.pass1.value;
               var pass2=document.myform.pass2.value;  

  
                if (username==null || username==""){  
                            alert("Name can't be blank");  
                            return false;  
                }
                if (adharno==null || adharno==""){  
                            alert("contact can't be blank");  
                            return false;  
                }
                if (mobileno==null || mobileno==""){  
                            alert("adhar can't be blank");  
                            return false;  
                }            
                if (address==null || address==""){  
                            alert("enter address");  
                            return false;  
                }                      
                if (organ==null || organ==""){  
                            alert("enter organ you want to donate");  
                            return false;  
                }             
                if (pass1!=pas2){  
                            alert("check password");  
                            return false;  
                }            
                if(pass1.length<6){  
                            alert("Password must be at least 6 characters long.");  
                            return false;  
                }  
                if(adharno.length!=12){  
                            alert("enter correct aadhar no number");  
                            return false;  
                }  
                if(mobileno.length!=10){  
                            alert("enter correct contact number");  
                            return false;  
                }   
        }  
 </script>
</body>

</html>
