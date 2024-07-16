<?php

include('connect.php');

if(isset($_POST['readyx'])){
    $readyx = mysqli_real_escape_string($db, $_POST['readyx']);
    $adharno = mysqli_real_escape_string($db, $_POST['adharno']);


    $sql = "update donor set readyx = '".$readyx."' where adharno='".$adharno."' ;  ";
    $query = mysqli_query($db,$sql);
    header('location:donfront.php');
}
?>