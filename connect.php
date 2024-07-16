<?php

 

$db = mysqli_connect("localhost","root","","akrosh");
if($db){
    echo "Successfully connected";

}
else{

    echo "Not connected";
}
?>
