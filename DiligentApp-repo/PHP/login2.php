<?php
session_start();
include "user_db.php";
if (isset($_POST['code']) && isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

    $code = validate($_POST['code']);
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if(empty($code)) {
      header("Location: authenticate2.php?error=Company Code is required");
      exit();

    }else if(empty($uname)) {
      header("Location: authenticate2.php?error=Employee Code is required");
      exit();

    }else if(empty($pass)) {
      header("Location: authenticate2.php?error=Password is required");
      exit();
    }else{
  $sql = "SELECT * FROM admins_table WHERE comp_code='$code' AND user_name='$uname' AND password='$pass'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['comp_code'] === $code && $row['user_name'] === $uname && $row['password'] === $pass) {
      $_SESSION['comp_code'] = $row['comp_code'];
      $_SESSION['user_name'] = $row['user_name'];
      $_SESSION['name'] = $row['name'];
      $_SESSION['id'] = $row['id'];
      header("Location: dashboard_employee.php");
      exit();
    }else{
      header("Location: authenticate2.php?error=Incorrect information");
      exit();
    }
  }else{
    header("Location: authenticate2.php?error=Incorrect Code or password");
    exit();
  }
}
}else{
  header("Location: authenticate2.php");
  exit();
}
