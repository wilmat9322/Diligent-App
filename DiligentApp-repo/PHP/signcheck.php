<?php
session_start();
include "user_db.php";
if (isset($_POST['code'])) {

    function validate($data){
      return $data;
    }

    $code = validate($_POST['code']);

    if(empty($code)) {
      header("Location: register.php?error=Company Code is required");
      exit();
    }else {
  $sql = "SELECT * FROM comp_code WHERE comp_code='$code'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['comp_code'] === $code) {
      $_SESSION['comp_code'] = $row['comp_code'];
      $_SESSION['id'] = $row['id'];
      header("Location: register2.php");
      exit();
    }else{
      header("Location: register.php?error=Incorrect Code");
      exit();
    }
  }else{
    header("Location: register.php?error=Incorrect Code");
    exit();
  }
}
}else{
  header("Location: register.php");
  exit();
}
