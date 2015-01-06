<?php


date_default_timezone_set("America/New_York");
$cookie_name = "user";
$cookie_value = date("Y-m-d h:i:sa");

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
echo "Last Visit: " . $_COOKIE[$cookie_name];









?>