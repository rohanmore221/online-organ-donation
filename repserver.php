<?php
session_start();


$errors= array();

$db = mysqli_connect("localhost","root","","akrosh");
if(isset($_POST['donadharno'])){
    $donadharno = mysqli_real_escape_string($db, $_POST['donadharno']);
    $docadharno= mysqli_real_escape_string($db, $_POST['docadharno']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $stat= mysqli_real_escape_string($db, $_POST['stat']);
    $dat = mysqli_real_escape_string($db, $_POST['dat']);
    $suggestion = mysqli_real_escape_string($db, $_POST['suggestion']);
    if(empty($docadharno)){
        array_push($errors,"doctor aadhar number  is required");

    }

    if(empty($type)){
        array_push($errors,"type is required");

    }
    if(empty($stat)){
        array_push($errors,"status is required");

    }
    if(empty($dat)){
        array_push($errors,"date is required");

    }
   
   if(count($errors)==0){
       
        $sql = "INSERT INTO donreport(docadhar,donadhar,type,stat,dat,suggestion) 
    
        VALUES ('".$docadharno."','".$donadharno."','".$type."','".$stat."','".$dat."','".$suggestion."');";
    mysqli_query($db,$sql);
    header('location: docfront.php');

    }
}
if(isset($_POST['radharno'])){
    $docadharno= mysqli_real_escape_string($db, $_POST['docadharno']);
    $radharno= mysqli_real_escape_string($db, $_POST['radharno']);
    $type = mysqli_real_escape_string($db, $_POST['type']);
    $stat= mysqli_real_escape_string($db, $_POST['stat']);
    $dat = mysqli_real_escape_string($db, $_POST['dat']);
    $suggestion = mysqli_real_escape_string($db, $_POST['suggestion']);
    if(empty($docadharno)){
        array_push($errors,"doctor aadhar number  is required");

    }

    if(empty($type)){
        array_push($errors,"type is required");

    }
    if(empty($stat)){
        array_push($errors,"status is required");

    }
    if(empty($dat)){
        array_push($errors,"date is required");

    }
   
   if(count($errors)==0){
       
        $sql = "INSERT INTO rreport(docadhar,radhar,type,stat,dat,suggestion) 
    
        VALUES ('".$docadharno."','".$radharno."','".$type."','".$stat."','".$dat."','".$suggestion."');";
    mysqli_query($db,$sql);
    header('location: docfront.php');

    }
}


?>
