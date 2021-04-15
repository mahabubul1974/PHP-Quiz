
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" 
    integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" 
    crossorigin="anonymous">
    <title>Register</title>
</head>

<?php

include_once('database.php');
session_start();
if(isset($_POST['submit'])){
    $fname = $_POST['Fname'];
    $lname = $_POST['Lname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if($pass1 == $pass2){
        $sql = "INSERT INTO labfinal (Fname,Lname,Username,Email,Password) values('$fname','$lname','$username','$email','$pass2')";
        if($conn->query($sql)===TRUE){
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $pass1;
            header("Location: information.php");
        }
        else{
            echo "No inserted";
        }
    }
    else{
        echo "Password wrong";
    }

}

?>




<body>

<div class="container mt-5 bg-light">
    <h3 class="display-3">Register Page</h3>
    <form method="POST" action="">
        <div class="form-group">
            <label for="exampleInputEmail1">First name</label>
            <input name="Fname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter First Name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Last name</label>
            <input name="Lname" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Last Name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">User name</label>
            <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name" required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="pass1" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Confirm Password</label>
            <input name="pass2" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
        </div>
        <button name="submit" type="submit" class="btn btn-primary mt-2">Save</button>
    </form>
</div>
</body>
</html>