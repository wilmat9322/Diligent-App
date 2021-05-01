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
	$dc_desc = validate($_POST['dc_desc']);
  $dc_date= validate($_POST['dc_date']);


	$user_data = 'dc_name='.$dc_name. '&dc_desc='.$dc_desc. '&dc_date='.$dc_date;

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

       $sql="INSERT INTO documents(file_name,type,size,dc_name,dc_desc,dc_date)
             VALUES('$final_file','$file_type','$new_size','$dc_name','$dc_desc','$dc_date')";

       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../dc_admin.php?success=Document was successfully added");
       }else {
          header("Location: ../dc_admin.php?error=Unknown error occurred&$user_data");
       }
	}
}
}
else{
	header("Location: ../dc_admin.php");
	exit();
}
