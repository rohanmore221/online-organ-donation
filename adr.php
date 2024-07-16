<?php
include('connect.php');
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
    <link href="d.css" rel="stylesheet">
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
<a href="home.html" target="_blank" class="tabs__link">HOME</a>
</li>
<li class="tabs__item">
<a href="login.php" target="_blank" class="tabs__link">LOGOUT</a>
</li>
<li class="tabs__item">
<a href="news.html" class="tabs__link" target="_blank">NEWS</a>
</li>
<li class="tabs__item">
<a href="storyho.html" class="tabs__link" target="_blank">STORIES</a>
</li>
<li class="tabs__item">
<a href="about.html" class="tabs__link" target="_blank">ABOUT US</a>
</li>
</ul>
</nav>
</div>

<h1>WELCOME ADMIN</h1>
   <button onclick="window.location.href='addon.php';">DONOR</button>
    <button onclick="window.location.href='addoc.php';">DOCTOR</button>
     <button onclick="window.location.href='adr.php';">RECEIVER</button>
     <button onclick="window.location.href='feedback.php';">FEEDBACK</button>
<div id="details">
<table >
<tr>
<th>Sno.</th>
<th>user name</th>
<th>adhar no</th>
<th>mobile no</th>
<th>Address</th>
<th>organ</th>
<th>password</th>


</tr>
<?php $query1=mysqli_query($db,"select * from receiver;")?> </h2>

<?php
$cnt=1;
while($row=mysqli_fetch_array($query1))
{
?>
<tr>
<td><?php echo $cnt;?></td>

<td><?php echo $row['username'];?></td>
<td><?php echo $row['adharno'];?></td>
<td><?php echo $row['contactno'];?></td>
<td><?php echo $row['address'];?></td>
<td><?php echo $row['organ'];?></td>
<td><?php echo $row['password'];?></td>
</tr>
<?php $cnt=$cnt+1;
} ?>
</table>
</div>

