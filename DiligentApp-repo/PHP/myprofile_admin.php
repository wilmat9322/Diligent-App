<!----- Programa hecho por: William S. Matos Díaz
     Número de estudiante: B00539322
     Curso: COMP 4400 Desarrollo e Implementación de Sistemas
     Profesor: Ing. Rafael Muñoz ----->

     <?php
          session_start();

          if (isset($_SESSION['id']) && isset($_SESSION['user_name'])  && isset($_SESSION['name'])) {

          ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <!----- Lista de Metas que considero importantes ----->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Diligent App es una aplicación de manejo de manejo de empelados y nóminas desarrollada
                                      por Diligent Technologies. Diligent Technologies ha sido una empresa con más de 10 años
                                      de experiencia, encargada de proveer soluciones a grandes negocios a nivel de Puerto Rico.
                                      Es destacada por hacer aplicaciones para computadoras que ayudan... " />
  <meta name="keywords" content="DiligentApp, Employee Management, Payroll" />
  <meta name="author" content="Diligent Technologies" />

  <title>My profile</title>

  <!----- Fonts y Símbolos que utilicé para la aplicación ----->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" type="image/png" href="images/favicon">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>

  <!----- Referencia al file del diseño de la app ----->
  <style>
    <?php include 'CSS/myprofile_admin.css';
    ?>
  </style>

  <!----- Utilicé un input tipo checkbox para el botón de menú.
              Se utilizó para funcionalidad y se desapareció con un display: none ----->
  <input type="checkbox" id="check">

  <!----- Aquí empieza el header de la aplicación ----->
  <header>

    <div>
      <label for="check">
        <i class="fas fa-bars" id="menu_btn"></i>
      </label>
      <a href="loggingout.php" class="logout">Logout</a>
      <a href="myprofile_admin.php" class="show_profile">My profile</a>
      <img src="images/profilepic.png" class="profile_image" alt"">
      <img src="images/Negocio.png" class="negocio" alt="">
      <a class="bienvenido"> Administrator: <?php echo $_SESSION['name']; ?></a>
    </div>
  </header>
  <!----- Aquí termina el header ----->

  <!----- Aquí empieza el menu ----->
  <div class="menu-slide">
    <img src="images/Admin.png" class="Logo-DiligentApp" alt="DiligentApp-Logo">
    <h4><?php echo $_SESSION['name']; ?></h4>


    <!----- Lista de las herramientas con sus símbolos en el menú ----->
    <a href="myprofile_admin.php"><i class="far fa-address-card"></i><span>My profile</span></a>
    <a href="dashboard_admin.php"><i class="far fa-window-maximize"></i><span>Dashboard</span></a>
    <a href="manage_admin.php"><i class="fas fa-users"></i><span>Manage Employees</span></a>
    <a href="payrolls_admin.php"><i class="fas fa-file-invoice-dollar"></i><span>Payrolls</span></a>
    <a href="w2_admin.php"><i class="fas fa-landmark"></i><span>W-2 Tax Forms</span></a>
    <a href="schedules_admin.php"><i class="far fa-calendar-alt"></i><span>Schedules</span></a>
    <a href="dc_admin.php"><i class="far fa-file-alt"></i><span>Documents and Policies</span></a>
    <footer>
      <h6>Powered by Diligent Technologies</h6>
    </footer>
  </div>
  <!----- Aquí termina el menú ----->

  <div class="contenido">

    <main>

      <div class="user_profile">
      <img src="images/profilepic.png" class="profile_img" alt="">
      <h2 style="font-size: 2rem;" class="admin_name"><?php echo $_SESSION['name']; ?></h2>
      </div>

      <?php
      include "dbs/profile.php"; ?>
      <section class="tablas">
        <div class="tabla-grid">
          <div class="contenido-card">

          <div>
          <h3><span><i class="far fa-address-card"></i></span>Personal Information</h3>
          </div>
          <?php if (mysqli_num_rows($result)) { ?>

          <table>
          <tbody>


                  <?php
                     if($rows = mysqli_fetch_assoc($result)){
                   ?>

            <tr>
              <td><b>Name: <?=$_SESSION['name']?></td>
              <td><b>Gender: <?php echo $rows['gender']; ?></td>
            </tr>
            <tr>
              <td><b>Birthday: <?php echo $rows['bday']; ?></td>
              <td><b>Citizenship: <?php echo $rows['citi']; ?></td>
            </tr>
              <?php } ?>
            </div>
          </tbody>
        </table>
          <?php } ?>
      </div>
      </section>

        <section class="tablas">
          <div class="tabla-grid">
            <div class="contenido-card">
              <div>
              <h3><span><i class="fas fa-briefcase"></i></span>Labor Information</h3>
              </div>

              <table>
              <tbody>
                <tr>
                  <td><b>Employee Code: <?php echo $_SESSION['user_name']; ?></td>
                  <td><b>Position: <?php echo $rows['position']; ?></td>
                </tr>
                <tr>
                  <td><b>Type: <?php echo $rows['type_employee']; ?></td>
                  <td><b>Earning Rate: $<?php echo $rows['earn_rate']; ?></td>
                </tr>
              <tr>

                <td><b>Working Since: <?php echo $rows['work_time']; ?></td>
                <td><b>Status: Active</td>

                </div>
              </tbody>
            </table>
          </div>
          </section>
  </div>
  </main>
  </body>
  </html>
  <?php
      }else{
        header("Location: index.php");
        exit();
      }
      ?>
