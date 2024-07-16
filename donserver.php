<?php
session_start();
$username="";
$aadharno="";
$mobileno="";
$address="";
$organdonation="";
$pass1="";
$pass2="";
$errors= array();
$db = mysqli_connect("localhost","root","","akrosh");
if(isset($_POST['username'])){
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $adharno = mysqli_real_escape_string($db, $_POST['adharno']);
    $contactno = mysqli_real_escape_string($db, $_POST['contactno']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $organ= mysqli_real_escape_string($db, $_POST['organ']);
    $pass1 = mysqli_real_escape_string($db, $_POST['pass1']);
    $pass2 = mysqli_real_escape_string($db, $_POST['pass2']);

    if(empty($username)){
        array_push($errors,"Username  is required");

    }
    if(empty($adharno)){
        array_push($errors,"aadharno  is required");

    }
    if(empty($contactno)){
        array_push($errors,"Mobile no  is required");

    }
    if(empty($address)){
        array_push($errors,"address  is required");

    }
    if(empty($pass1)){
        array_push($errors,"Enter password");

    }
    if($pass1 != $pass2){
        array_push($errors,"Passwords does not match");


    }

    if(count($errors)==0){
       
        $sql = "INSERT INTO donor(adharno,username,contactno,address,organ,password) 
    
        VALUES ('".$adharno."','".$username."','".$contactno."','".$address."','".$organ."','".$pass1."');";
    mysqli_query($db,$sql);
   // $_SESSION['username']= $username;
   // $_SESSION['success']= "you are successfully logged in";
    header('location: login.php');

}

}


?>
