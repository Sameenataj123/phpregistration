<?php
   // $Servername = "localhost";
   // $username = "root";
   // $password_for_database = "root";
   // $databaseName = "formdb";
$servername = "remotemysql.com";
$username = "6016Mh2s15";
$password_for_database = "A4LWbiN4cm";
$dbpass="6016Mh2s15";
    

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $Address = $_POST['Address'];
    $age = $_POST['age'];
    $gender=$_POST['gender'];
    $marital_status=$_POST['marital_status'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $confirm_password= $_POST['confirm_password'];
    $connect = new  mysqli($servername, $username, $password_for_database, $dbpass);
    $query = "INSERT INTO formtable VALUES ('".$fname."','".$lname."','".$Address."','".$age."','".$gender."','".$marital_status."','".$email."','".$password."','".$confirm_password."')";

    if($connect->query($query)===TRUE)
        $res=$connect->query("select * from formtable where Email='".$email."'");
	if($res->num_rows>0){
	while($row=$res->fetch_assoc())
	echo $row['FirstName']." ".$row['LastName']."<br>".$row['Address']."<br> ".$row['DOB']."<br> ".$row['Gender']."<br> ".$row['Martial Status']."<br> ".$row['Email']."<br> ".$row['PassWord']."<br> ".$row['Confrim Password'];
}
    else{
        echo 'registration failed';
	echo connect->error;
	}
    $connect->close();

?>

