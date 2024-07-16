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
if(isset($_POST['signup'])){
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
       
       $sql1 = "select * from status where organ='".$organ."'; ";
       $waiting = mysqli_query($db,$sql1);
       $row = mysqli_fetch_array($waiting);
       $wno = $row['wno'];
       if($wno==0)
     {
        $wno=1;
        $sql = "INSERT INTO receiver (adharno,username,contactno,address,organ,password,wno) 
    
        VALUES ('".$adharno."','".$username."','".$contactno."','".$address."','".$organ."','".$pass1."',$wno);";
    mysqli_query($db,$sql);

    $sql2 = "update status set wno = $wno where organ= '".$organ."' ;";
    mysqli_query($db,$sql2);
     }
     else{
         $wno=$wno+1;
        

        $sql = "INSERT INTO receiver (adharno,username,contactno,address,organ,password,wno) 
    
        VALUES ('".$adharno."','".$username."','".$contactno."','".$address."','".$organ."','".$pass1."',$wno);";
    mysqli_query($db,$sql);
 
    $sql2 = "update status set wno = $wno where organ= '".$organ."' ;";
    mysqli_query($db,$sql2);
     }
   $_SESSION['username']= $username;
    $_SESSION['success']= "you are successfully logged in";
    header('location: login.php');

}

}


?>
