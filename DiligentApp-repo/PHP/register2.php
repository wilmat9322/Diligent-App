<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register: Step 2</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon">

  </head>
  <body>

    <style>
      <?php include 'CSS/register.css';?>
    </style>
    <!----- Comienza el LoginBox ----->
    <div>
        <img src="images/Fondo.jpg" class="Fondo"> <!-- Fondo del loginbox -->
      <div class="login-box">
        <!-- Caja de Login -->

        <!----- Información del usuario ----->
        <form>

          <p><b>Step 2:</b> Input the following information to proceed.</p>
          <p>Enter your employee code</p>
          <input type="text" name="username" placeholder="Enter Company Code">
          <p>Last four digits of your social security number</p>
          <input type="text" name="username" placeholder="Enter your last four digits of your SSN">
          <input type="button" name="submit" value="Continue" onclick="location.href='register3.php';">
          <input type="button" name="submit" value="Go back" onclick="location.href='register.php';">
        </form>
      </div>

  </body>
</html>
