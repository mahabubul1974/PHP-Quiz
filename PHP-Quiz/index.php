
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
    <title>Login Page</title>
</head>

<?php
include_once('database.php');
session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $sql = "SELECT Email,Password FROM labfinal WHERE Email='$email' and Password='$pass'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $pass;
        header("Location: information.php");
        
    } else {
        echo "Password Not matched";
    }
}


?>
<body>
    <div class="container mt-5">
        <h3>Sign In</h3>
        <form method="POST" action="">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="pass" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
            </div>
            <button name="submit" type="submit" class="btn btn-primary mt-2">Login</button>
        </form>
    </div>
    <a href="register.php" class="btn btn-secondary ml-5 mt-2">Register</a>
</body>

</html>