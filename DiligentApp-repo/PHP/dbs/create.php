<?php
session_start();
if (isset($_POST['create'])) {
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
  $pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);

	$user_data = 'comp_code='.$comp_code. '&name='.$name. '&user_name='.$user_name. '&position='.$position. '&type_employee='.$type_employee. '&work_time='.$work_time.
              '&hours_work='.$hours_work. '&earn_rate='.$earn_rate. '&password='.$pass. '&re_password='.$re_pass;

	if (empty($comp_code)) {
		header("Location: ../manage_admin.php?error=Company Code is required&$user_data");
  }else if (empty($name)) {
      header("Location: ../manage_admin.php?error=Name is required&$user_data");
	}else if (empty($user_name)) {
		header("Location: ../manage_admin.php?error=Username is required&$user_data");
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
  }else if($pass !== $re_pass){
          header("Location: ../manage_admin.php?error=The Confirmation Password  does not match&$user_data");
        }else if($comp_code !== "1234"){
                header("Location: ../manage_admin.php?error=The Company Code does not match&$user_data");


    }else {
      $sql = "SELECT * FROM users_table WHERE comp_code='$comp_code' AND user_name='$user_name' ";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0) {
     header("Location: ../manage_admin.php?error=The Username is taken try another&$user_data");
         exit();
   }else {

       $sql2 = "INSERT INTO users_table(comp_code, name, user_name, password, position, type_employee, work_time, hours_work, earn_rate)
               VALUES('$comp_code','$name', '$user_name', '$pass', '$position', '$type_employee', '$work_time', '$hours_work', '$earn_rate')";
       $result2 = mysqli_query($conn, $sql2);
       if ($result2) {
       	  header("Location: ../manage_admin.php?success=Employee Successfully Added");
       }else {
          header("Location: ../manage_admin.php?error=unknown error occurred&$user_data");
       }
	}
}
}
else{
	header("Location: ../manage_admin.php");
	exit();
}
