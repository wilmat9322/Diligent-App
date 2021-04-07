<!----- Programa hecho por: William S. Matos Díaz
     Número de estudiante: B00539322
     Curso: COMP 4400 Desarrollo e Implementación de Sistemas
     Profesor: Ing. Rafael Muñoz ----->
     <?php
     session_start();

     if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

      ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <!----- Lista de Metas que considero importantes ----->
  <meta charset="utf-8">
  <meta name="description" content="Diligent App es una aplicación de manejo de manejo de empelados y nóminas desarrollada
                                      por Diligent Technologies. Diligent Technologies ha sido una empresa con más de 10 años
                                      de experiencia, encargada de proveer soluciones a grandes negocios a nivel de Puerto Rico.
                                      Es destacada por hacer aplicaciones para computadoras que ayudan... " />
  <meta name="keywords" content="DiligentApp, Employee Management, Payroll" />
  <meta name="author" content="Diligent Technologies" />

  <title> Password Recovery</title>

  <link rel="shortcut icon" type="image/png" href="images/favicon">

</head>

<body>
  <!----- Referencia al file del diseño de la página de Login ----->
  <style>
    <?php include 'CSS/forgot.css';?>
  </style>

  <!----- Comienza el LoginBox ----->
  <div>
      <img src="images/Fondo.jpg" class="Fondo"> <!-- Fondo del loginbox -->
    <div class="login-box">
      <!-- Caja de Login -->

      <!----- Información del usuario ----->
      <form action="forgot_check.php" method="post">

        <?php if (isset($_GET['error'])) { ?>
          <br><center><label class="error"><?php echo $_GET['error']; ?></label></center>
        <?php } ?>

        <p style="padding-top: 40px;">Enter your employee code and the last four digits of your social security number to change your password.</p><br>

        <p style="margin-top: 20px;">Old Password</p>
        <input type="password" name="oldpassword" placeholder="Enter your old password">

        <p style="margin-top: 20px;">New Password</p>
        <input type="password" name="newpassword" placeholder="Enter your new password">

        <p style="margin-top: 20px;">Repeat New password</p>
        <input type="password" name="re_password" placeholder="Enter your new password">


        <input type="submit" name="submit" value="Continue">
        <input type="button" name="submit" value="Go back" onclick="location.href='authenticate.php';">

      </form>
    </div>
  </div>
</body>

</html>

<?php
}else{
     header("Location: authenticate.php");
     exit();
}
 ?>
