<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
die("connection feild". mysqli_connect_error());
}
// echo "Connect successfully !";

