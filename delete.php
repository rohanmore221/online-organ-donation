<?php


include('connect.php');
if(isset($_POST['donadharno'])){
    if(isset($_POST['radharno'])){
        $adharno = mysqli_real_escape_string($db, $_POST['donadharno']);    
        $radharno = mysqli_real_escape_string($db, $_POST['radharno']);
        $organ= mysqli_real_escape_string($db, $_POST['organ']);
        $sql1 = "select * from receiver where adharno='".$radharno."';";
        $query = mysqli_query($db,$sql1);
        $row= mysqli_fetch_array($query);
        $waiting   = $row['wno'] ;

                $sql2 = "select * from status where organ = '".$organ."';";
                $query2 = mysqli_query($db,$sql2);
                $row2= mysqli_fetch_array($query2);
                $waiting2   = $row2['wno'] ;
                $waiting2 = $waiting2-1;
                $sql3 = "update status set wno=$waiting2 where organ = '".$organ."';";
                $query3 = mysqli_query($db,$sql3);


                $sql4 = "select * from receiver where organ = '".$organ."' and wno > $waiting;";

                $query4 = mysqli_query($db,$sql4);
                while($row4=mysqli_fetch_array($query4))
                {

                       $waiting4 = $row4['wno'];
                       $waiting4 = $waiting4-1;
                       $xadharno = $row4['adharno'];
                     $sql5 = "update receiver set wno = $waiting4 where adharno = '".$xadharno."';";
                    $query5 = mysqli_query($db,$sql5);
                }
           
      $sql6  ="delete from donreport where donadhar = '".$adharno."';";

     $query6 = mysqli_query($db,$sql6);
     $sql7  ="delete from rreport where radhar = '".$radharno."';";

     $query7 = mysqli_query($db,$sql7);
     $sql8 ="delete from donor where adharno = '".$adharno."';";

     $query8 = mysqli_query($db,$sql8);
     $sql9  ="delete from receiver where adharno = '".$radharno."';";

     $query9 = mysqli_query($db,$sql9);










    
    }    
    

}  
else{
    header('location:docfront.php');
    }  






?>