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

  $dc_name= validate($_POST['dc_name']);
  $dc_add = validate($_POST['dc_add']);
	$dc_desc = validate($_POST['dc_desc']);
  $dc_date= validate($_POST['dc_date']);


	$user_data = 'dc_name='.$dc_name. '&dc_add='.$dc_add. '&dc_desc='.$dc_desc. '&dc_date='.$dc_date;

	if (empty($dc_name)) {
		header("Location: ../dc_admin.php?error=Name of document is required&$user_data");
  }else if (empty($dc_add)) {
    header("Location: ../dc_admin.php?error=Document is required&$user_data");
  }else if (empty($dc_desc)) {
    header("Location: ../dc_admin.php?error=Description of document is required&$user_data");
  }else if (empty($dc_date)) {
    header("Location: ../dc_admin.php?error=Date of document is required&$user_data");

   }else {

       $sql = "INSERT INTO documents(dc_name, dc_add, dc_desc, dc_date)
               VALUES('$dc_name','$dc_add', '$dc_desc', '$dc_date')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../dc_admin.php?success=Document was successfully added");
       }else {
          header("Location: ../dc_admin.php?error=Unknown error occurred&$user_data");
       }
	}
}

else{
	header("Location: ../dc_admin.php");
	exit();
}
