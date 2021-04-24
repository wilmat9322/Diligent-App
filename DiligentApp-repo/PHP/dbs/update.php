<?php
session_start();
if (isset($_GET['id'])) {
	include "user_db.php";

	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "SELECT * FROM users_table WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);

    }else {
    	header("Location: read.php");
    }

}else if(isset($_POST['update'])){
    include "../user_db.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

  $comp_code= validate($_POST['comp_code']);
  $name = validate($_POST['name']);
	$user_name = validate($_POST['user_name']);
  $position = validate($_POST['position']);
  $type_employee = validate($_POST['type_employee']);
  $work_time = validate($_POST['work_time']);
  $hours_work = validate($_POST['hours_work']);
  $earn_rate = validate($_POST['earn_rate']);
  $gender = validate($_POST['gender']);
  $bday = validate($_POST['bday']);
  $citi = validate($_POST['citi']);
  $pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);
	$id = validate($_POST['id']);

  if (empty($comp_code)) {
		header("Location: ../manage_admin.php?error=Company code is required&$user_data");
  }else if (empty($name)) {
      header("Location: ../manage_admin.php?error=Name is required&$user_data");
	}else if (empty($user_name)) {
		header("Location: ../manage_admin.php?error=Employee code is required&$user_data");
  }else if (empty($position)) {
    header("Location: ../manage_admin.php?error=Position is required&$user_data");
  }else if (empty($type_employee)) {
    header("Location: ../manage_admin.php?error=Employee type is required&$user_data");
  }else if (empty($work_time)) {
    header("Location: ../manage_admin.php?error=Working time is required&$user_data");
  }else if (empty($hours_work)) {
    header("Location: ../manage_admin.php?error=Hours worked is required&$user_data");
  }else if (empty($earn_rate)) {
    header("Location: ../manage_admin.php?error=Earning rate is required&$user_data");
  }else if (empty($gender)) {
    header("Location: ../manage_admin.php?error=Gender is required&$user_data");
  }else if (empty($bday)) {
    header("Location: ../manage_admin.php?error=Birthday is required&$user_data");
  }else if (empty($citi)) {
    header("Location: ../manage_admin.php?error=Citizenship is required&$user_data");
  }else if (empty($pass)) {
    header("Location: ../manage_admin.php?error=Password is required&$user_data");
  }else if (empty($re_pass)) {
    header("Location: ../manage_admin.php?error=Repeated password is required&$user_data");
  }else if($pass !== $re_pass){
          header("Location: ../manage_admin.php?error=The confirmation password  does not match&$user_data");
        }else if($comp_code !== "1234"){
                header("Location: ../manage_admin.php?error=The company code does not match&$user_data");
              }else if (mysqli_num_rows($result) > 0) {
                header("Location: ../manage_admin.php?error=The username is taken try another&$user_data");
  }else {

       $sql = "UPDATE users_table
               SET comp_code='$comp_code', name='$name', user_name='$user_name', position='$position', type_employee='$type_employee', work_time='$work_time', hours_work='$hours_work', earn_rate='$earn_rate', password='$pass', gender='$gender', bday='$bday', citi='$citi'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../manage_admin.php?success=Employee was successfully updated");
       }else {
          header("Location: ../manage_admin.php?id=$id&error=unknown error occurred&$user_data");
       }
	}

}else{
	header("Location: read.php");
}
