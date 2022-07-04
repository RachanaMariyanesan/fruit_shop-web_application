<?php
include "db.php";
if(isset($_POST['update'])){
  $fid=$_POST['fid'];
$name=$_POST['name'];
$weight=$_POST['weight'];
$price=$_POST['price'];
  

  $sql="UPDATE `fruit` SET  name='$name', weight='$weight', price='$price' WHERE fid='$fid' ";
  $result=$con->query($sql);

  if($result==True){
    echo "Record updated successfully";
  }
  else{
    echo "Error:".$sql."<br>".$con->error;

  }

}

if(isset($_GET['fid'])){
$fid=$_GET['fid'];
$sql="SELECT * FROM `fruit` WHERE fid='$fid'";
$result=$con->query($sql);

if($result->num_rows > 0){
   while($row = $result->fetch_assoc()){
    $name=$row['name'];
    $weight=$row['weight'];
    $price=$row['price'];
    $fid=$row['fid'];
   }
   ?>
<div class="container">
   <form action="" method="post">
       <div class="row">
       <div class="col-3 mr-2">
        <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
       </div>
       <input type="hidden" name="fid" value="<?php echo $fid; ?>">
       <div class="col-3 mr-2">
       <input class="form-control" type="text" name="weight" value="<?php echo $weight; ?>">
       </div>
       <div class="col-3 mr-2">
       <input class="form-control" type="text" name="price" value="<?php echo $price; ?>">
       </div>
       <div class="col mr-2">
       <input class="btn btn-primary" type="submit" value="update" name="update">
       </div>
       </div>
       <a href="home.php">Home</a>
   </form>
</div>
<?php
}
}
else{
    header('location:index.php');
}
?>