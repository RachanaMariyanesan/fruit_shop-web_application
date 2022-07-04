<?php
$con=mysqli_connect("localhost","root","","fruit_shop");
if($con){
    echo "Connected";
}
else{
    echo "Check your connection";
}
?>