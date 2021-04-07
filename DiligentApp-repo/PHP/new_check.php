<?php
session_start();
include "user_db.php";
if (isset($_POST['submit'])){

    $newpassword = ($_POST['newpassword']);
    $reppassword = ($_POST['reppasword']);

    if(empty($newpassword)) {
      header("Location: newpassword.php?error=Company Code is required");
      exit();

    }else if(empty($reppassword)) {
      header("Location: newpassword.php?error=Employee Code is required");
      exit();
  }else{
    $sql = "SELECT * FROM users_table WHERE password='$pass'";
    $result = mysqli_query($conn, $sql);

    $num = mysqli_fetch_array($result);

    if($num>0){

      $con = mysqli_query($conn, "UPDATE users_table set password= '$newpassword'");{

      header("Location: newuser.php");
      exit();
    }
}
}
}
