<?php
$name=$_POST["name"];
$pass_word=$_POST["password"];



include ('credentials.php');

$sql = "select * from university_record where UserName=".("'").$name.("'");
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
         $UserName=$row["UserName"];
         $Pass_Word=$row["Pass_Word"];
    $Email=$row["email"];
    $Gender=$row["gender"];
$Mobile_number=$row["mobile_number"];
$address=$row["address"];


    }

    if ($pass_word==$Pass_Word)
    {
	echo "You are logged In"."<br>";
echo $Email."<br>";
echo $Gender."<br>";
echo $Mobile_number."<br>";
echo $address."<br>";



}



else 
	echo "Wrong Password";
} 

else {
    echo "No Record Exists, Pleease Register First";
}
$conn->close();













?>
