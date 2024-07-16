<?php
session_start();
include('connect.php');
if($_SESSION['radhar'])
{
?><!DOCTYPE html>
<html >
<head>
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
<link rel="stylesheet" href="home.css">
<meta charset="UTF-8">
<title>ARA</title>
</head>
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
                    <a href="news.html" target="_self" class="tabs__link">NEWS</a>
                </li>
                <li class="tabs__item">
                    <a href="storyho.html" target="_self" class="tabs__link">STORIES</a>
                </li>
                <li class="tabs__item">
                    <a href="about.html" class="tabs__link">ABOUT US</a>
                </li>
            </ul>
        </nav>
    </div>

<body>
    <br><br><br><br>
<table >
<tr>
<th>Sno.</th>
<th>type</th>
<th>status</th>
<th>date</th>
<th>suggestion</th>

</tr>
<?php $query=mysqli_query($db,"select * from rreport where radhar='".$_SESSION['radhar']."'  ;");
$cnt=1;
while($row=mysqli_fetch_array($query))
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
</body>
</html>
<?php
} else{
header('location:login.php');
}
?>