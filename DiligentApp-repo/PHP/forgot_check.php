<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

    include "user_db.php";

if (isset($_POST['oldpassword']) && isset($_POST['newpassword'])
    && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$oldpassword = validate($_POST['oldpassword']);
	$newpassword = validate($_POST['newpassword']);
	$re_password = validate($_POST['re_password']);

    if(empty($oldpassword)){
      header("Location: forgot.php?error=Old Password is required");
	  exit();
  }else if(empty($newpassword)){
      header("Location: forgot.php?error=New Password is required");
	  exit();
  }else if($newpassword !== $re_password){
      header("Location: forgot.php?error=The confirmation password  does not match");
	  exit();
    }else {

        $id = $_SESSION['id'];

        $sql = "SELECT password
                FROM users_table WHERE
                id='$id' AND password='$oldpassword'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){

        	$sql_2 = "UPDATE users_table
        	          SET password='$newpassword'
        	          WHERE id='$id'";
        	mysqli_query($conn, $sql_2);
        	header("Location: newuser.php?success=Your password has been changed successfully");
	        exit();

        }else {
        	header("Location: forgot.php?error=Incorrect password");
	        exit();
        }

    }


}else{
	header("Location: forgot.php");
	exit();
}

}else{
     header("Location: authenticate.php");
     exit();
}
