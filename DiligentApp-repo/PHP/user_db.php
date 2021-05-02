<?php

$sname = "localhost";
$unme = "root";
$password = "CYBEr152512$";

$db_name = "diligentapp";

$conn = mysqli_connect($sname, $unme, $password, $db_name);

if (!$conn) {
  echo "<br><br>Connection failed!";
}
