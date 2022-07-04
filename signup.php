<!DOCTYPE html>
<head>
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-success"><br><br>
    <div class="container bg-dark text-white">
<form action="insert.php" method="post">
<br><br><h1 class="text-center">Sign Up</h1>
<hr>
<div class="form-group" style="margin-bottom:20px">
<input type="text" class="form-control" name="name" placeholder="Name" aria-describedby="emailHelp" placeholder="Enter name">
<label for="exampleInputEmail1">Name</label>
</div>
<div class="form-group" style="margin-bottom:20px">
<input type="text" class="form-control" name="gender" placeholder="Gender" aria-describedby="emailHelp" placeholder="Enter gender">
<label for="exampleInputEmail1">Gender</label>
</div>
<div class="form-group" style="margin-bottom:20px">
<input type="email" class="form-control" name="email" placeholder="Email" aria-describedby="emailHelp" placeholder="Enter email">
<label for="exampleInputEmail1">Email</label>
</div>
<div class="form-group" style="margin-bottom:20px">
<input type="text" class="form-control" name="phonenumber" placeholder="Phone Number" aria-describedby="emailHelp" placeholder="Enter phone number">
<label for="exampleInputEmail1">Phone Number</label>
</div>
 <div class="form-group" style="margin-bottom:20px">   
<input type="password" class="form-control" name="password" placeholder="Password" aria-describedby="emailHelp" placeholder="Enter Password">
<label>Password</label>
</div>
<button type="submit" class="btn btn-success">Signup</button>
<br><br>

</div><br><br>
<script src="https://kit.fontawesome.com/ab02c285ab.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>