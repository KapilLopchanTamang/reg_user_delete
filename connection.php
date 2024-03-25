<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";
$con = mysqli_connect($servername, $username, $password, $dbname); 

if($con){
    echo "Connected to Database";
}
else{
    echo "Connection failed: ". mysqli_connect_error();
}
?>