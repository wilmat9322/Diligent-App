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
	        WHERE id=$id AND id <> '1'";
   $result = mysqli_query($conn, $sql);
   if ($id <> '1') {
   	  header("Location: ../manage_admin.php?success=Employee was successfully deleted");

   }else if ($result == '1'){
      header("Location: ../manage_admin.php?error=You cannot delete this account&$user_data");
   }else{
       header("Location: ../manage_admin.php?error=Unknown error occurred&$user_data");

}
}else {
	header("Location: ../manage_admin.php");
}
