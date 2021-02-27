<!----- Programa hecho por: William S. Matos Díaz
     Número de estudiante: B00539322
     Curso: COMP 4400 Desarrollo e Implementación de Sistemas
     Profesor: Ing. Rafael Muñoz ----->

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

  <title> Password Recovery Complete!</title>

  <link rel="shortcut icon" type="image/png" href="images/favicon">

</head>

<body>
  <!----- Referencia al file del diseño de la página de Login ----->
  <style>
    <?php include 'CSS/recovery_complete.css';?>
  </style>

  <!----- Comienza el LoginBox ----->
  <div>
      <img src="images/Fondo.jpg" class="Fondo"> <!-- Fondo del loginbox -->
    <div class="login-box">
      <!-- Caja de Login -->

      <!----- Información del usuario ----->
      <form>
        <p style="text-align: center;">You have succesfully changed your password!</p>

        <input type="button" name="submit" value="Go back" onclick="location.href='newpassword.php';" style="margin-left: 110px;">
        <input type="button" name="submit" value="Continue" onclick="location.href='authenticate.php';">

      </form>
    </div>
  </div>
</body>

</html>
