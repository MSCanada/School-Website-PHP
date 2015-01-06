<?php
$name=$_POST["name"];
$pass_word=$_POST["password"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$mobile_number=$_POST["mobile_number"];
$address=$_POST["address"];




$servername = "mysql.1freehosting.com";
$username = "u452418890_test";
$password = "cricket_123";
$dbname = "u452418890_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO university_record(UserName, Pass_Word, email, gender, mobile_number, address)
VALUES ('$name', '$pass_word', '$email','$gender',$mobile_number,'$address')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();















?>