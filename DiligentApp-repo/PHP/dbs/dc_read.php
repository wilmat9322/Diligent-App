<?php

include "user_db.php";

$sql = "SELECT * FROM documents ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
