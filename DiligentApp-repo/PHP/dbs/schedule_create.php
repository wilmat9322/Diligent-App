<?php
session_start();
if (isset($_POST['create_schedule'])) {
	include "../user_db.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

  $name = validate($_POST['name']);
	$user_name = validate($_POST['user_name']);
  $monday = validate($_POST['monday']);
  $tuesday = validate($_POST['tuesday']);
  $wednesday = validate($_POST['wednesday']);
	$thursday = validate($_POST['thursday']);
  $friday = validate($_POST['friday']);
  $saturday = validate($_POST['saturday']);
  $sunday = validate($_POST['sunday']);
  $total_hours = validate($_POST['total_hours']);

	$user_data = 'name='.$name. '&user_name='.$user_name. '&monday='.$monday. '&tuesday='.$tuesday. '&wednesday='.$wednesday. '&thursday='.$thursday. '&friday='.$friday. '&saturday='.$saturday. '&sunday='.$sunday. '&total_hours='.$total_hours;

	if (empty($name)) {
		header("Location: ../schedules_admin.php?error=Employee name is required&$user_data");
  }else if (empty($user_name)) {
      header("Location: ../schedules_admin.php?error=Employee code is required&$user_data");
	}else if (empty($monday)) {
		header("Location: ../schedules_admin.php?error=Schedule for monday is required&$user_data");
  }else if (empty($tuesday)) {
    header("Location: ../schedules_admin.php?error=Schedule for tuesday is required&$user_data");
  }else if (empty($wednesday)) {
    header("Location: ../schedules_admin.php?error=Schedule for wednesday is required&$user_data");
  }else if (empty($thursday)) {
    header("Location: ../schedules_admin.php?error=Schedule for thursday is required&$user_data");
  }else if (empty($friday)) {
    header("Location: ../schedules_admin.php?error=Schedule for friday is required&$user_data");
  }else if (empty($saturday)) {
    header("Location: ../schedules_admin.php?error=Schedule for saturday is required&$user_data");
  }else if (empty($sunday)) {
    header("Location: ../schedules_admin.php?error=Schedule for sunday is required&$user_data");
  }else if (empty($total_hours)) {
    header("Location: ../schedules_admin.php?error=Total of hours is required&$user_data");

   }else {

       $sql = "INSERT INTO schedules(name, user_name, monday, tuesday, wednesday, thursday, friday, saturday, sunday, total_hours)
               VALUES('$name', '$user_name', '$monday', '$tuesday', '$wednesday', '$thursday', '$friday', '$saturday', '$sunday', '$total_hours')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../schedules_admin.php?success=Schedule was successfully added");
       }else {
          header("Location: ../schedules_admin.php?error=Unknown error occurred&$user_data");
       }
	}
}
else{
	header("Location: ../schedules_admin.php");
	exit();
}
