<?php
  include 'connection.php';
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    
    $sql = "INSERT INTO crud (name, email, phone, password) values ('$name', '$email', '$phone', '$password')";
    $result = mysqli_query($con, $sql);

    if($result){
      echo "data inserted successfully";
    }else{
      die (mysqli_error($conn));
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="conatiner m-5">
    <form method="post">
    <div class="mb-3">
    <label for="exampleInputName1" class="form-label">Name</label>
    <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Enter your name">
</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter your email">
</div>
  <div class="mb-3">
    <label for="exampleInputMobile1" class="form-label">Mobile</label>
    <input type="number" class="form-control" id="exampleInputMobile1" name="phone" placeholder="Enter your number">
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Enter your password">
</div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
    </div>
</body>
</html>