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

  <title> Register complete!</title>

  <link rel="shortcut icon" type="image/png" href="images/favicon">

</head>

<body>
  <!----- Referencia al file del diseño de la página de Login ----->
  <style>
    <?php include 'CSS/newuser.css';?>
  </style>

  <!----- Comienza el LoginBox ----->
  <div>
      <img src="images/Fondo.jpg" class="Fondo"> <!-- Fondo del loginbox -->
    <div class="login-box">
      <!-- Caja de Login -->

      <!----- Información del usuario ----->
      <form>
        <p>Your registration has been complete ! Click continue to log in to your new account.</p>

        <input type="button" name="submit" value="Continue" onclick="location.href='authenticate.php';">

      </form>
    </div>
  </div>
</body>

</html>
