<?php

include('repserver.php');

include('connect.php');
if($_SESSION['username'])
{
   $query=mysqli_query($db,"select * from doctor where username='".$_SESSION['username']."' AND password='".$_SESSION['password']."' ;");
    $cnt=1;
while($row=mysqli_fetch_array($query))
   {
?>
<!DOCTYPE html>
<html >
<head>
   <meta charset="UTF-8">
   <title>welcome</title>

    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="donfront.css" rel="stylesheet">
   
    <link href="register.css" rel="stylesheet">
   <style>
   table
{
  border-collapse:collapse;
  width:100%;
  height:15%;
}
td
{
  height:40px;
 text-align:center;
}
tr
{
  background-color:khaki;
  color:black;
}
th
{
  background-color:skyblue;
  color:black;
}
       input[type=tel] {
  text-align: center;
background-image: url('rep.jpg');
background-size: 50px;
background-repeat: no-repeat;
width: 50%;
padding: 15px 22px;
margin: 10px 5px;
box-sizing: border-box;
border: 4px solid #8842d5;
border-radius: 5px;  }

input[type=date] {
  text-align: center;
background-image: url('rep.jpg');
background-size: 50px;
background-repeat: no-repeat;
width: 50%;
padding: 15px 22px;
margin: 10px 5px;
box-sizing: border-box;
border: 4px solid #8842d5;
border-radius: 5px;  }
       </style>

</head>
<body >

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
<a href="logout.php" target="_self" class="tabs__link">LOGOUT</a>
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

	
<h1>Welcome - Dr:<?php echo $_SESSION['username'];?> </h1>
<div class="dprofile">
<h2>Aadhar no: <?php echo $row['adharno'];?> </h2>
<h2>License ID:<?php echo $row['licenseid'];?></h2>
<h2>Organ Specialized:<?php echo $row['organ'];?></h2>

</div>

<?php $cnt=$cnt+1;
} ?>
<br>


<form action="avail2.php" method="POST" >
  <input type="text" placeholder="enter organ" name="organ">
  <input type="submit" value="submit">
</form>  






<div id="details">
<table align="center">
<tr>
<th>Sno.</th>
<th>Name</th>
<th>Adhar no</th>
<th>Contact</th>
<th>Address</th>

</tr>
<?php 

if (isset($_POST['organ'])) {
    $organ = $_POST['organ'];
    $readyx="yes";

$query1=mysqli_query($db,"select * from donor where organ='".$organ."' and readyx='".$readyx."';");
$cnta=1;
while($rowa=mysqli_fetch_array($query1))
   {



?> </h2>

<tr>
<td><?php echo $cnta;?></td>

<td><?php echo $rowa['username'];?></td>
<td><?php echo $rowa['adharno'];?></td>
<td><?php echo $rowa['contactno'];?></td>
<td><?php echo $rowa['address'];?></td>
</tr>

<?php $cnta=$cnta+1;
} ?>
</table>


</div>




<?php $cnt=$cnt+1;
} ?>



   

</body>

</html>
<?php
} else{
header('location:login.php');
}
?>