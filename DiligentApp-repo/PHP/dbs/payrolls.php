<?php

include "user_db.php";

$sql = "SELECT * FROM payrolls where id = '1' ";
$result = mysqli_query($conn, $sql);
