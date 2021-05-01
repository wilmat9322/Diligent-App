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
  $monday = validate($_POST['monday']);
  $from_monday = validate($_POST['from_monday']);
  $to_monday = validate($_POST['to_monday']);
  $tuesday = validate($_POST['tuesday']);
  $from_tuesday = validate($_POST['from_tuesday']);
  $to_tuesday = validate($_POST['to_tuesday']);
  $wednesday = validate($_POST['wednesday']);
  $from_wednesday = validate($_POST['from_wednesday']);
  $to_wednesday = validate($_POST['to_wednesday']);
	$thursday = validate($_POST['thursday']);
  $from_thursday = validate($_POST['from_thursday']);
  $to_thursday = validate($_POST['to_thursday']);
  $friday = validate($_POST['friday']);
  $from_friday = validate($_POST['from_friday']);
  $to_friday = validate($_POST['to_friday']);
  $saturday = validate($_POST['saturday']);
  $from_saturday = validate($_POST['from_saturday']);
  $to_saturday = validate($_POST['to_saturday']);
  $sunday = validate($_POST['sunday']);
  $from_sunday = validate($_POST['from_sunday']);
  $to_sunday = validate($_POST['to_sunday']);

	$user_data = 'name='.$name;

	if (empty($name)) {
		header("Location: ../schedules_admin.php?error=Employee name is required&$user_data");

   }else {

       $sql = "INSERT INTO schedules(name, monday, from_monday, to_monday, tuesday, from_tuesday, to_tuesday, wednesday, from_wednesday, to_wednesday, thursday, from_thursday, to_thursday, friday, from_friday, to_friday, saturday, from_saturday, to_saturday, sunday, from_sunday, to_sunday)
               VALUES('$name', '$monday', '$from_monday', '$to_monday', '$tuesday', '$from_tuesday', '$to_tuesday', '$wednesday', '$from_wednesday', '$to_wednesday', '$thursday', '$from_thursday', '$to_thursday', '$friday', '$from_friday', '$to_friday',
                      '$saturday', '$from_saturday', '$to_saturday', '$sunday', '$from_sunday', '$to_sunday')";
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
