<?php

include "user_db.php";

$sql = "SELECT * FROM users_table where id = '1' ";
$result = mysqli_query($conn, $sql);
