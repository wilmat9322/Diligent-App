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

  $name = validate($_POST['name']);
	$user_name = validate($_POST['user_name']);
  $earn_rate = validate($_POST['earn_rate']);
  $gross = validate($_POST['gross']);
  $dedu = validate($_POST['dedu']);
  $net_pay= validate($_POST['net_pay']);
  $date_pay = validate($_POST['date_pay']);

	$user_data = '&name='.$name. '&user_name='.$user_name. '&earn_rate='.$earn_rate. '&gross='.$gross. '&dedu='.$dedu. '&net_pay='.$net_pay. '&date_pay='.$date_pay;

	if (empty($name)) {
		header("Location: ../payrolls_admin.php?error=Employee Name is required&$user_data");
  }else if (empty($user_name)) {
      header("Location: ../payrolls_admin.php?error=Employee Code is required&$user_data");
  }else if (empty($earn_rate)) {
    header("Location: ../payrolls_admin.php?error=Employee Earning Rate is required&$user_data");
  }else if (empty($gross)) {
    header("Location: ../payrolls_admin.php?error=Employee Gross Earnings is required&$user_data");
  }else if (empty($dedu)) {
    header("Location: ../payrolls_admin.php?error=Employee Deductions are required&$user_data");
  }else if (empty($net_pay)) {
    header("Location: ../payrolls_admin.php?error=Employee Net Payment is required&$user_data");
  }else if (empty($date_pay)) {
    header("Location: ../payrolls_admin.php?error=Date is required&$user_data");

   }else {

       $sql = "INSERT INTO payrolls(name, user_name, earn_rate, gross, dedu, net_pay, date_pay)
               VALUES('$name', '$user_name', '$earn_rate', '$gross', '$dedu', '$net_pay', '$date_pay')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../payrolls_admin.php?success=Payroll was successfully added");
       }else {
          header("Location: ../payrolls_admin.php?error=Unknown error occurred&$user_data");
       }
	}
}
else{
	header("Location: ../payrolls_admin.php");
	exit();
}
