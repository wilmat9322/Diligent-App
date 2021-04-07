<?php
session_start();
include "user_db.php";
if (isset($_POST['uname']) && isset($_POST['sec_num'])) {

    function validate($data){
      return $data;
    }

    $uname = validate($_POST['uname']);
    $sec_num = validate($_POST['sec_num']);

    if(empty($uname)) {
      header("Location: register2.php?error=Employee Code is required");
      exit();

    }else if(empty($sec_num)) {
      header("Location: register2.php?error=SSN is required");
      exit();

    }else {
  $sql = "SELECT * FROM comp_code WHERE user_name='$uname' AND sec_num='$sec_num'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['user_name'] === $uname && $row['sec_num'] === $sec_num) {
      $_SESSION['comp_code'] = $row['comp_code'];
      $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['sec_num'] = $row['sec_num'];
      $_SESSION['id'] = $row['id'];
      header("Location: register3.php");
      exit();

    }else{
      header("Location: register2.php?error=Incorrect Code or SSN");
      exit();
    }
  }else{
    header("Location: register2.php?error=Incorrect Code or SSN");
    exit();
  }
}
}else{
  header("Location: register2.php");
  exit();
}
