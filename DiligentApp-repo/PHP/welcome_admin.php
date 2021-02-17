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
                                      Es destacada por hacer aplicaciones para computadoras que ayudan... "/>
    <meta name="keywords" content="DiligentApp, Employee Management, Payroll"/>
    <meta name="author" content="Diligent Technologies"/>

    <title>Welcome to DiligentApp!</title>

      <!----- Fonts y Símbolos que utilicé para la aplicación ----->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,300&display=swap" rel="stylesheet">
  </head>

  <body>

      <!----- Referencia al file del diseño de la app ----->
    <style>
    <?php include 'CSS/admin.css'; ?>
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
          <a href="#" class="logout">Logout</a>
          <a href="#" class="show_profile">My profile</a>
          <img src="images/Hombre.png" class="profile_image" alt"">
          <img src="images/Negocio.png" class="negocio" alt="">
          <center>
          <h1>Employee Management  |  Automatic Payrolls </h1>
        </center>
        </div>
      </header>
      <!----- Aquí termina el header ----->

      <!----- Aquí empieza el menu ----->
        <div class="menu-slide">
          <img src="images/Admin.png" class="Logo-DiligentApp" alt="">

          <h4>Administrator</h4>

      <!----- Lista de las herramientas con sus símbolos en el menú ----->
          <a href="#"><i class="far fa-address-card"></i><span>My profile</span></a>
          <a href="#"><i class="far fa-window-maximize"></i><span>Dashboard</span></a>
          <a href="#"><i class="fas fa-users"></i><span>Manage Employees</span></a>
          <a href="#"><i class="fas fa-file-invoice-dollar"></i><span>Payrolls</span></a>
          <a href="#"><i class="fas fa-landmark"></i><span>W-2 Forms</span></a>
          <a href="#"><i class="far fa-calendar-plus"></i><span>Schedules</span></a>
          <a href="#"><i class="fas fa-inbox"></i><span>Inbox</span></a>
          <a href="#"><i class="fas fa-bed"></i><span>Leave</span></a>
          <a href="#"><i class="fas fa-user-clock"></i><span>Attendance</span></a>
          <a href="#"><i class="far fa-file-alt"></i><span>Documents and Policies</span></a>
          <footer>
          <h6>Powered by Diligent Technologies</h6>
        </footer>
        </div>
      <!----- Aquí termina el menú ----->

      <!----- Futuro contenido de cada herramienta ----->
      <div class="contenido"></div>

  </body>
</html>
