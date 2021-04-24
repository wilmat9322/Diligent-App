<?php

include "user_db.php";

$sql = "SELECT * FROM payrolls ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
