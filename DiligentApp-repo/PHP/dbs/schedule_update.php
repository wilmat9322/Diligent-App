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

	$sql = "SELECT * FROM schedules WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);

    }else {
    	header("Location: schedule_read.php");
    }

}else if(isset($_POST['update'])){
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
	$id = validate($_POST['id']);

  if (empty($name)) {
		header("Location: ../payrolls_admin.php?error=Employee Name is required&$user_data");

  }else {

       $sql = "UPDATE schedules
               SET name='$name', monday='$monday', from_monday='$from_monday', to_monday='$to_monday', tuesday='$tuesday', from_tuesday='$from_tuesday', to_tuesday='$to_tuesday', wednesday='$wednesday', from_wednesday='$from_wednesday', to_wednesday='$to_wednesday', thursday='$thursday', from_thursday='$from_thursday', to_thursday='$to_thursday',
                   friday='$friday', from_friday='$from_friday', to_friday='$to_friday', saturday='$saturday', from_saturday='$from_saturday', to_saturday='$to_saturday', sunday='$sunday', from_sunday='$from_sunday', to_sunday='$to_sunday'
               WHERE id=$id ";

       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../schedules_admin.php?success=Schedule was successfully edited");
       }else {
          header("Location: ../schedules_admin.php?id=$id&error=Unknown error occurred&$user_data");
       }
	}

}else{
	header("Location: payrolls_read.php");
}
