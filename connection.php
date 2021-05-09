<?php
//development crendtials
//$servername = "localhost";
//$username = "root";
//$password = "root";
//$dbpass="formdb";
//remote sql credentials
$servername = "remotemysql.com";
$username = "6016Mh2s15";
$password = "A4LWbiN4cm";
$dbpass="6016Mh2s15";


// Create connection
$conn =new mysqli($servername ,$username, $password);


if($conn->connect_error){
die("connection Failed : ".$conn->connect_error);
}
echo "connected sucessfully";
?>