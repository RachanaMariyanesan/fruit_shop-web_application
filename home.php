<?php
include "db.php";
$sql="SELECT * FROM fruit";
$result=$con->query($sql);
?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fruitshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h1>Welcome </h1>
    <a class="btn btn-outline-success" href="signout.php">Sign out</a>
    <br><br><div class="container">
    <form action="fruit.php" method="post">
        <div class="row">
        <div class="col-3 mr-2">
         <input class="form-control" type="text" name="name" placeholder="Name">
        </div>
        <div class="col-3 mr-2">
        <input class="form-control" type="text" name="weight" placeholder="Weight">
        </div>
        <div class="col-3 mr-2">
        <input class="form-control" type="text" name="price" placeholder="Price">
        </div>
        <div class="col mr-2">
        <input class="btn btn-success" type="submit">
        </div>
        </div>
    </form>
</div>


            <table class="table table-hover table-dark" style="margin-top:80px;">
                
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    
                    <th scope="col">Name</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Price</th>
                    <th></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    
                        if ($result->num_rows > 0) {
                            // output data of each row
                           
                            $index = 1;
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>".$index."</td>";
                              
                                echo "<td>".$row["name"]."</td>";
                                echo "<td>".$row["weight"]."</td>";
                                echo "<td>".$row["price"]."</td>";
                                echo "<td>".'<a href="update.php?fid='.$row["fid"].'" class="btn btn-success btn-sm">Edit</a> <a href="delete.php?fid='.$row["fid"].'" class="btn btn-danger btn-sm">Delete</a>'."</td>";
                                echo "</tr>";

                                $index++;
                            }
                        } 

                    ?>
                </tbody>
            </table>
        

            </div>
        </div>
<script src="https://kit.fontawesome.com/ab02c285ab.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>