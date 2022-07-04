<?php
include "db.php";

if(isset($_GET['fid'])){
    $fid=$_GET['fid'];
    $sql="DELETE FROM `fruit`  WHERE fid='$fid'";
    $result=$con->query($sql);
    if($result==TRUE){
        echo "Record deleted successfully.";
 ?>       
        <a href="home.php">Home</a>
        <?php
    }
    else{
        echo "Error:".$sql."<br>".$con->error;
    }
}
?>
