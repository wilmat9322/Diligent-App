
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

	$sql = "DELETE FROM documents
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../dc_admin.php?success=Document was Successfully Deleted");
   }else {
      header("Location: ../dc_admin.php?error=unknown error occurred&$user_data");
   }

}else {
	header("Location: ../dc_admin.php");
}
