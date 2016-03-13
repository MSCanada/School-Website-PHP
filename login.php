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
		session_start();
		$_SESSION['Mobile_number']=$Mobile_number;
	
	echo "You are logged In...!"."<br>";
	echo $Email."<br>";
	echo $Gender."<br>";
	echo $Mobile_number."<br>";
	echo $address."<br>";
	
	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php?option=dashboard">';//This causes the browser to open the new page after 0 seconds, i.e immediately.



exit();  ?>
	
	<?php
	echo '<script type="text/javascript">
			  document.location.href = "http://www.example.com/index.php";  
		  </script>';
	}



else 
	echo "Wrong Password";
} 

else {
    echo "No Record Exists, Pleease Register First";
}
$conn->close();













?>
