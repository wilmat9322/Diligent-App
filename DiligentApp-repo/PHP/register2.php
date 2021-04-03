<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register: Step 2 of 7</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon">

  </head>
  <body>

    <style>
      <?php include 'CSS/register2.css';?>
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
        <form action="signcheck2.php" method="post">

          <?php if (isset($_GET['error'])) { ?>
            <br><center><label class="error"><?php echo $_GET['error']; ?></label></center>
          <?php } ?>

          <p style="padding-top: 40px;"><b>Step 2 of 7:</b> Input the following information to proceed.</p><br>

          <p>Enter your employee code</p>
          <input type="text" name="uname" placeholder="Enter Employe Code" >

          <p style="margin-top: 20px;" >Last four digits of your social security number</p>
          <input type="number" name="sec_num" placeholder="Enter the last four digits of your SSN" >

          <input style="margin-left: 135px; background-color:#ec4646;"type="button" name="submit" value="Go back" onclick="location.href='register.php';">
          <input type="submit" name="submit" value="Continue">

        </form>
      </div>

  </body>
</html>
