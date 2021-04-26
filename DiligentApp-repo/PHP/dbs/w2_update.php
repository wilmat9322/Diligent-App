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

	$sql = "SELECT * FROM forms WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);

    }else {
    	header("Location: w2_read.php");
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
	$user_name = validate($_POST['user_name']);
  $add_tax = validate($_POST['add_tax']);
	$date_tax = validate($_POST['date_tax']);
	$id = validate($_POST['id']);

  if (empty($name)) {
		header("Location: ../w2_admin.php?error=Name is required&$user_data");
  }else if (empty($user_name)) {
    header("Location: ../w2_admin.php?error=Employee code is required&$user_data");
}else if (empty($add_tax)) {
    header("Location: ../w2_admin.php?error=Tax form is required&$user_data");
}else if (empty($date_tax)) {
    header("Location: ../w2_admin.php?error=Date is required&$user_data");
  }else {

       $sql = "UPDATE forms
               SET name='$name', user_name='$user_name', add_tax='$add_tax', date_tax='$date_tax'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../w2_admin.php?success=Tax form was successfully updated");
       }else {
          header("Location: ../w2_admin.php?id=$id&error=Unknown error occurred&$user_data");
       }
	}

}else{
	header("Location: w2_read.php");
}
