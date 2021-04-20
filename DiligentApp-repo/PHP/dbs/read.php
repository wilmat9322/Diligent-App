<?php

include "user_db.php";

$sql = "SELECT * FROM users_table ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
