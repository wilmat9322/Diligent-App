
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

	$sql = "DELETE FROM forms
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../w2_admin.php?success=Tax form was successfully deleted");
   }else {
      header("Location: ../w2_admin.php?error=Unknown error occurred&$user_data");
   }

}else {
	header("Location: ../w2_admin.php");
}
