<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <title>Register: Step 3 of 7</title>
  <link rel="shortcut icon" type="image/png" href="images/favicon">

</head>

<body>

  <style>
    <?php include 'CSS/register3.css';
    ?>
  </style>

  <style>
  /* Chrome, Safari, Edge, Opera arrows in number boxes*/
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }

  /* Firefox */
  input[type=number] {
    -moz-appearance: textfield;
  }
  </style>


  <!----- Comienza el LoginBox ----->
  <div>
    <img src="images/Fondo.jpg" class="Fondo"> <!-- Fondo del loginbox -->
    <div class="login-box">
      <!-- Caja de Login -->

      <!----- Información del usuario ----->
      <form action="signcheck3.php" method="post">

        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?> <br>

           <p style = "margin-top: 0;"><b>Step 3 of 4:</b> Input your personal information to register.</p>

           <label>Company Code</label>
           <?php if (isset($_GET['code'])) { ?>
                <input type="text"
                       name="comp_code"
                       placeholder="Company Code"
                       value="<?php echo $_GET['code']; ?>"><br>
           <?php }else{ ?>
                <input type="text"
                       name="code"
                       placeholder="Company Code"><br>
           <?php }?>

           <label>Name</label>
           <?php if (isset($_GET['name'])) { ?>
                <input type="text"
                       name="name"
                       placeholder="Name"
                       value="<?php echo $_GET['name']; ?>"><br>
           <?php }else{ ?>
                <input type="text"
                       name="name"
                       placeholder="Name"><br>
           <?php }?>

           <label>User Name</label>
           <?php if (isset($_GET['uname'])) { ?>
                <input type="text"
                       name="uname"
                       placeholder="User Name"
                       value="<?php echo $_GET['uname']; ?>"><br>
           <?php }else{ ?>
                <input type="text"
                       name="uname"
                       placeholder="User Name"><br>
           <?php }?>

           <label>Gender</label>
           <?php if (isset($_GET['gender'])) { ?>
                <input type="text"
                       name="gender"
                       placeholder="Gender"
                       value="<?php echo $_GET['gender']; ?>"><br>
           <?php }else{ ?>
                <input type="text"
                       name="gender"
                       placeholder="Gender"><br>
           <?php }?>

           <label>Birthday</label>
           <?php if (isset($_GET['bday'])) { ?>
                <input type="text"
                       name="bday"
                       placeholder="Birthday"
                       value="<?php echo $_GET['bday']; ?>"><br>
           <?php }else{ ?>
                <input type="text"
                       name="bday"
                       placeholder="Birthday"><br>
           <?php }?>

           <label>Race</label>
           <?php if (isset($_GET['race'])) { ?>
                <input type="text"
                       name="race"
                       placeholder="Race"
                       value="<?php echo $_GET['race']; ?>"><br>
           <?php }else{ ?>
                <input type="text"
                       name="race"
                       placeholder="Race"><br>
           <?php }?>

           <label>Citizenship</label>
           <?php if (isset($_GET['citi_zen'])) { ?>
                <input type="text"
                       name="citi_zen"
                       placeholder="Citizenship"
                       value="<?php echo $_GET['citi_zen']; ?>"><br>
           <?php }else{ ?>
                <input type="text"
                       name="citi_zen"
                       placeholder="Citizenship"><br>
           <?php }?>

           <label>Highschool</label>
           <?php if (isset($_GET['highschool'])) { ?>
                <input type="text"
                       name="highschool"
                       placeholder="Highschool"
                       value="<?php echo $_GET['highschool']; ?>"><br>
           <?php }else{ ?>
                <input type="text"
                       name="highschool"
                       placeholder="Highschool"><br>
           <?php }?>

           <label>Graduation</label>
           <?php if (isset($_GET['graduation'])) { ?>
                <input type="text"
                       name="graduation"
                       placeholder="Graduation"
                       value="<?php echo $_GET['graduation']; ?>"><br>
           <?php }else{ ?>
                <input type="text"
                       name="graduation"
                       placeholder="Graduation"><br>
           <?php }?>

           <label>Degree</label>
           <?php if (isset($_GET['degree'])) { ?>
                <input type="text"
                       name="degree"
                       placeholder="Degree"
                       value="<?php echo $_GET['degree']; ?>"><br>
           <?php }else{ ?>
                <input type="text"
                       name="degree"
                       placeholder="Degree"><br>
           <?php }?>

           <label>Expected Graduation Day</label>
           <?php if (isset($_GET['expday'])) { ?>
                <input type="text"
                       name="expday"
                       placeholder="Expected Graduation Day"
                       value="<?php echo $_GET['expday']; ?>"><br>
           <?php }else{ ?>
                <input type="text"
                       name="expday"
                       placeholder="Expected Graduation Day"><br>
           <?php }?>

      	<label>Password</label>
      	<input type="password"
                  name="password"
                  placeholder="Password"><br>

           <label>Re Password</label>
           <input type="password"
                  name="re_password"
                  placeholder="Re_Password"><br>

        <input style="margin-left: 135px; background-color:#ec4646; " type="button" name="submit" value="Go back" onclick="location.href='register2.php';">
        <input type="submit" name="submit" value="Continue">

    </div>
    </form>

  </div>
</body>

</html>
