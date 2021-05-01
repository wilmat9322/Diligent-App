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
	$date_tax = validate($_POST['date_tax']);
	$id = validate($_POST['id']);

  if (empty($name)) {
		header("Location: ../w2_admin.php?error=Name is required&$user_data");
  }else if (empty($user_name)) {
    header("Location: ../w2_admin.php?error=Employee code is required&$user_data");
}else if (empty($date_tax)) {
    header("Location: ../w2_admin.php?error=Date is required&$user_data");

  }else {

    $file = rand(1000,100000)."-".$_FILES['file']['name'];
      $file_loc = $_FILES['file']['tmp_name'];
   $file_size = $_FILES['file']['size'];
   $file_type = $_FILES['file']['type'];
   $folder="../upload/";

   /* new file size in KB */
   $new_size = $file_size/1024;
   /* new file size in KB */

   /* make file name in lower case */
   $new_file_name = strtolower($file);
   /* make file name in lower case */

   $final_file=str_replace(' ','-',$new_file_name);

   if(move_uploaded_file($file_loc,$folder.$final_file))
   {

       $sql = "UPDATE forms
               SET file_name='$final_file', type='$file_type', size='$new_size', name='$name', user_name='$user_name', date_tax='$date_tax'
               WHERE id=$id ";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../w2_admin.php?success=Tax form was successfully updated");
       }else {
          header("Location: ../w2_admin.php?id=$id&error=Unknown error occurred&$user_data");
       }
	}
}
}
else{
	header("Location: w2_read.php");
}
