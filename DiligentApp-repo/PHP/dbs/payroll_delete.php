
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

	$sql = "DELETE FROM payrolls
	        WHERE id=$id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../payrolls_admin.php?success=Payroll was sucessfully deleted");
   }else {
      header("Location: ../payrolls_admin.php?error=Unknown error occurred&$user_data");
   }

}else {
	header("Location: ../payrolls_admin .php");
}
