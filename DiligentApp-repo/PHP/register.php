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

  <title> Register: Step 1 of 7</title>

  <link rel="shortcut icon" type="image/png" href="images/favicon">


</head>

<body>
  <!----- Referencia al file del diseño de la página de Login ----->
  <style>
    <?php include 'CSS/register.css';?>
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
      <form action="signcheck.php" method="post">

        <?php if (isset($_GET['error'])) { ?>
          <br><center><label class="error"><?php echo $_GET['error']; ?></label></center> 
        <?php } ?>

        <p style="padding-top: 50px;"><b>Step 1 of 7:</b> Enter the Company Code to continue. This code was provided by Diligent Technologies or by Supermercados Buena Vida.</p><br>

        <p>Company Code</p>
        <input type="number" name="code" placeholder="Enter Company Code"/>

        <input style="margin-left: 135px; background-color:#ec4646; " type="button" name="back" value="Go back" onclick="location.href='authenticate.php';" />
          <input type="submit" name="submit" value="Continue" />


</div>
      </form>
    </div>
  </div>
</body>

</html>
