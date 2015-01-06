<?php
$myfile = fopen("about_us.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
   echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>