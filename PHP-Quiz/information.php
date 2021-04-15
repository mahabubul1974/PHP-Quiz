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
    <title>Information</title>
</head>
<body>

<?php
include_once('session.php');
check_login_user();
include_once('database.php');
$sql = "SELECT * from labfinal";
$result = $conn->query($sql);

?>

<div>
<h3>Information</h3>
<table class="table">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">User name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  <?php
    if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            echo "<tr>
                    <td>".$row["Fname"]."</td>".
                    "<td>".$row["Lname"]."</td>".
                    "<td>".$row["Username"]."</td>".
                    "<td>".$row["Email"]."</td>".
                "</tr>";
        }
    }
    ?>
  </tbody>
</table>
</div>

</body>
</html>