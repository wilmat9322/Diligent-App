<?php

include "user_db.php";

$sql = "SELECT * FROM users_table ORDER BY id DESC LIMIT 5";
$result = mysqli_query($conn, $sql);
