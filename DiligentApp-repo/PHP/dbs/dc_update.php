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

	$sql = "SELECT * FROM documents WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    	$row = mysqli_fetch_assoc($result);

    }else {
    	header("Location: dc_read.php");
    }

}else if(isset($_POST['update'])){
    include "../user_db.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

  $dc_name= validate($_POST['dc_name']);
  $dc_desc = validate($_POST['dc_desc']);
  $dc_date= validate($_POST['dc_date']);
	$id = validate($_POST['id']);

  if (empty($dc_name)) {
    header("Location: ../dc_admin.php?error=Name of document is required&$user_data");
  }else if (empty($dc_desc)) {
    header("Location: ../dc_admin.php?error=Description of document is required&$user_data");
  }else if (empty($dc_date)) {
    header("Location: ../dc_admin.php?error=Date of document is required&$user_data");
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

       $sql = "UPDATE documents
               SET file_name='$final_file', type='$file_type', size='$new_size', dc_name='$dc_name', dc_desc='$dc_desc', dc_date='$dc_date'
               WHERE id=$id ";

       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../dc_admin.php?success=Document was successfully updated");
       }else {
          header("Location: ../dc_admin.php?id=$id&error=Unknown error occurred&$user_data");
       }
	}
}

}else{
	header("Location: dc_read.php");
}
