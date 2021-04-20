<?php

$sname = "localhost";
$unme = "root";
$password = "admin1";

$db_name = "diligentapp";

$conn = mysqli_connect($sname, $unme, $password, $db_name);

if (!$conn) {
  echo "<br><br>Connection failed!";
}
