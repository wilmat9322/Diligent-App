<?php
session_start();
include "user_db.php";

if (isset($_POST['code']) && isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password']) && isset($_POST['gender']) && isset($_POST['bday'])
    && isset($_POST['race']) && isset($_POST['citi_zen']) && isset($_POST['highschool']) && isset($_POST['graduation'])
    && isset($_POST['degree']) && isset($_POST['expday'])) {

	function validate($data){
    $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}
  $code = validate($_POST['code']);
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);
  $gender = validate($_POST['gender']);
  $bday = validate($_POST['bday']);
  $race = validate($_POST['race']);
  $citi_zen = validate($_POST['citi_zen']);
  $highschool = validate($_POST['highschool']);
  $graduation = validate($_POST['graduation']);
  $degree = validate($_POST['degree']);
  $expday = validate($_POST['expday']);

	$user_data = 'uname='. $uname. '&name='. $name;

  if(empty($code)) {
        header("Location: register3.php?error=Company Code is required");
        exit();
	}else if (empty($uname)) {
		header("Location: register3.php?error=Employee Code is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: register3.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: register3.php?error=Re Password is required&$user_data");
	    exit();
	}
	else if(empty($name)){
        header("Location: register3.php?error=Name is required&$user_data");
	    exit();
	}
  else if(empty($gender)){
        header("Location: register3.php?error=Gender is required&$user_data");
      exit();
  }
  else if(empty($bday)){
        header("Location: register3.php?error=Birthday is required&$user_data");
      exit();
  }
  else if(empty($race)){
        header("Location: register3.php?error=Race is required&$user_data");
      exit();
  }
  else if(empty($citi_zen)){
        header("Location: register3.php?error=Citizenship is required&$user_data");
      exit();
  }
  else if(empty($highschool)){
        header("Location: register3.php?error=Highschool is required&$user_data");
      exit();
  }
  else if(empty($graduation)){
        header("Location: register3.php?error=Graduation is required&$user_data");
      exit();
  }
  else if(empty($degree)){
        header("Location: register3.php?error=Degree is required&$user_data");
      exit();
  }
  else if(empty($expday)){
        header("Location: register3.php?error=Expected Graduation Day is required&$user_data");
      exit();
  }
	else if($pass !== $re_pass){
        header("Location: register3.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

	    $sql = "SELECT * FROM users_table WHERE comp_code='$code' AND user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: register3.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users_table (comp_code, user_name, password, name, gender, bday, race, citi_zen, highschool, graduation, degree, expday) VALUES ('$code', '$uname', '$pass', '$name', '$gender',
             '$bday', '$race', '$citi_zen', '$highschool', '$graduation', '$degree', '$expday')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: newuser.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: register3.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}

}else{
	header("Location: register3.php");
	exit();
}
