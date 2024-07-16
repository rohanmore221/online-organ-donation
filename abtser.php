<?php

$username="";
$emailid="";
$message="";

$db = mysqli_connect("localhost","root","","akrosh");
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$sql = "INSERT INTO aboutus(name,emailid,message)  VALUES (?, ?, ?)";
if($stmt = mysqli_prepare($db, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sss", $username, $emailid, $message);
     // Set parameters
     $username = $_REQUEST['username'];
     $emailid = $_REQUEST['emailid'];
     $message = $_REQUEST['message'];
     
     

     
     if(mysqli_stmt_execute($stmt)){
        header("location:about.html");
    } else{
        echo "ERROR: Could not execute query: $sql. " . mysqli_error($db);
    }
} else{
    echo "ERROR: Could not prepare query: $sql. " . mysqli_error($db);
}
 
// Close statement
mysqli_stmt_close($stmt);
 
// Close connection
mysqli_close($db);
?> 
     
     