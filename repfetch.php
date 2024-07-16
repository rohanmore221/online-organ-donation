<?php
session_start();


$errors= array();

$db = mysqli_connect("localhost","root","","akrosh");
if(isset($_POST['donadharno'])){
    $donadharno = mysqli_real_escape_string($db, $_POST['donadharno']);
    $query = "select * from donreport where donadhar = '".$donadharno."' ; ";
    $result = mysqli_query($db,$query);
     
    if(mysqli_num_rows($result)!=0)
    {  $_SESSION['donadhar']= $donadharno;
       header("location:donrep.php");
       exit();
   }
   else{
       header("location:docfront.php");
   }

}
if(isset($_POST['radharno'])){
    $radharno = mysqli_real_escape_string($db, $_POST['radharno']);
    $query1 = "select * from rreport where radhar = '".$radharno."' ; ";
    $result1 = mysqli_query($db,$query1);
     
    if(mysqli_num_rows($result1)!=0)
    {  $_SESSION['radhar']= $radharno;
       header("location:rrep.php");
       exit();
   }
   else{
    header("location:docfront.php");
}
    }


?>
