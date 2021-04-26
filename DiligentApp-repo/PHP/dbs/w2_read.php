<?php

include "user_db.php";

$sql = "SELECT * FROM forms ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
