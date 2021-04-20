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

  <title> Login </title>

  <link rel="shortcut icon" type="image/png" href="images/favicon">

</head>

<body>
  <!----- Referencia al file del diseño de la página de Login ----->
  <style>
    <?php
    include 'CSS/Login.css';
    ?>
  </style>

  <!----- Comienza el LoginBox ----->
  <div>

      <img src="images/Fondo.jpg" class="Fondo"> <!-- Fondo del loginbox -->

    <div class="login-box">

      <!-- Caja de Login -->
      <img src="images/Admin.png" class="Logo"> <!-- Logo de DiligentApp -->
      <h1>Welcome to DiligentApp</h1>

      <!----- Información del usuario ----->
      <form action="login.php" method="post" >

        <?php if (isset($_GET['error'])) { ?>
          <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label>Company Code</label>
        <input type="text" name="code" placeholder="Enter Company Code"/>
        <label>Employee Code</label>
        <input type="text" name="uname" placeholder="Enter Employee Code"/>
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter Password"/>
        <input type="submit" name="submit" value="Login">

        <!----- Termina el LoginBox ----->
      </form>
    </div>
  </div>
</body>

</html>
