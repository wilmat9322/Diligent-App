<?php

if(isset($_GET['id'])){
   include "../user_db.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM users_table
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../manage_admin.php?success=Employee was Successfully Deleted");
   }else {
      header("Location: ../manage_admin.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ../manage_admin.php");
}
