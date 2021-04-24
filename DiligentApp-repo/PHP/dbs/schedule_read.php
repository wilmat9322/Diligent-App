<?php

include "user_db.php";

$sql = "SELECT * FROM schedules ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
