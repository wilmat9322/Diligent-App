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

  $name = validate($_POST['name']);
	$user_name = validate($_POST['user_name']);
  $add_tax = validate($_POST['add_tax']);
	$date_tax = validate($_POST['date_tax']);

	$user_data = 'name='.$name. '&user_name='.$user_name. '&add_tax='.$add_tax. '&date_tax='.$date_tax;

	if (empty($name)) {
		header("Location: ../w2_admin.php?error=Name is required&$user_data");
  }else if (empty($user_name)) {
    header("Location: ../w2_admin.php?error=Employee code is required&$user_data");
}else if (empty($add_tax)) {
    header("Location: ../w2_admin.php?error=Tax form is required&$user_data");
}else if (empty($date_tax)) {
    header("Location: ../w2_admin.php?error=Date is required&$user_data");
   }else {

       $sql = "INSERT INTO forms(name, user_name, add_tax, date_tax)
               VALUES('$name', '$user_name', '$add_tax', '$date_tax')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../w2_admin.php?success=Tax Form was successfully added");
       }else {
          header("Location: ../w2_admin.php?error=Unknown error occurred&$user_data");
       }
	}
}

else{
	header("Location: ../w2_admin.php");
	exit();
}
