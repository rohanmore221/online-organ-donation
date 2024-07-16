<?php

include('donserver.php');


include('connect.php');

if($_SESSION['username'])
{
   $query=mysqli_query($db,"select * from receiver where username='".$_SESSION['username']."' AND password='".$_SESSION['password']."' ;");
    $ct=1;
while($row=mysqli_fetch_array($query))
   {
?>
<!DOCTYPE html>
<html >
<head>
   <meta charset="UTF-8">
   <title>ARA</title>

    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="donfront.css" rel="stylesheet">
    <link href="register.css" rel="stylesheet">
    <link href="d.css" rel="stylesheet">
    <style>


table
{
  border-collapse:collapse;
  width:50%;
  margin:auto;
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
	<div >

<h1>Welcome : <?php echo $_SESSION['username'];?> </h1>

<div class="dprofile" style="position:relative;">
<img src="icon.png" style="position:absolute;width:100px;height:100px;margin-top:-8%;margin-left:-8%"> 
 <br><br><br><br>
<h2>Receiver Name: <?php echo $row['username'];?> </h2>
<h2>Aadhar no: <?php echo $row['adharno'];?> </h2>
<h2>Address:<?php echo $row['address'];?></h2>
<h2>Organ Needed:<?php echo $row['organ'];?></h2>
<h2>Waiting Number:<?php echo $row['wno'];?></h2>
</div>
<br><br>

<div id="details">
<table>
<tr>
<th>Sno.</th>
<th>type</th>
<th>status</th>
<th>date</th>
<th>suggestion</th>

</tr>
<?php $query1=mysqli_query($db,"select * from rreport where radhar='".$row['adharno']."';")?> </h2>

<?php
$cnt=1;
while($row=mysqli_fetch_array($query1))
{
?>
<tr>
<td><?php echo $cnt;?></td>

<td><?php echo $row['type'];?></td>
<td><?php echo $row['stat'];?></td>
<td><?php echo $row['dat'];?></td>
<td><?php echo $row['suggestion'];?></td>
</tr>
<?php $cnt=$cnt+1;
} ?>
</table>
</div>

<?php $ct=$ct+1;
} ?>
</div>


   </body>

</html>
<?php
} else{
header('location:login.php');
}

?>