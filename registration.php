<?php
$name=$_POST["name"];
$pass_word=$_POST["password"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$mobile_number=$_POST["mobile_number"];
$address=$_POST["address"];



include ('credentials.php');

$sql = "INSERT INTO university_record(UserName, Pass_Word, email, gender, mobile_number, address)
VALUES ('$name', '$pass_word', '$email','$gender',$mobile_number,'$address')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();















?>
