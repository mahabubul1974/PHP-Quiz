<?php
$servername = "localhost";
$databasename = "final";
$username = "root";
$password = "";

$conn = new mysqli($servername,$username,$password,$databasename);

if($conn->connect_errno){
    echo "Connection Fail";
}



?>