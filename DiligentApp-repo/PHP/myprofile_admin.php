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
    </div>
  </header>
  <!----- Aquí termina el header ----->

  <!----- Aquí empieza el menu ----->
  <div class="menu-slide">
    <img src="images/Admin.png" class="Logo-DiligentApp" alt="">

    <h4>Administrator</h4>

    <!----- Lista de las herramientas con sus símbolos en el menú ----->
    <a href="myprofile_admin.php"><i class="far fa-address-card"></i><span>My profile</span></a>
    <a href="dashboard_admin.php"><i class="far fa-window-maximize"></i><span>Dashboard</span></a>
    <a href="manage_admin.php"><i class="fas fa-users"></i><span>Manage Employees</span></a>
    <a href="payrolls_admin.php"><i class="fas fa-file-invoice-dollar"></i><span>Payrolls</span></a>
    <a href="w2_admin.php"><i class="fas fa-landmark"></i><span>W-2 Tax Forms</span></a>
    <a href="schedules_admin.php"><i class="far fa-calendar-alt"></i><span>Schedules</span></a>
    <a href="messages_admin.php"><i class="fas fa-envelope"></i><span>Messages</span></a>
    <a href="leaves_admin.php"><i class="fas fa-bed"></i><span>Leave</span></a>
    <a href="attendance_admin.php"><i class="fas fa-user-clock"></i><span>Attendance</span></a>
    <a href="dc_admin.php"><i class="far fa-file-alt"></i><span>Documents and Policies</span></a>
    <footer>
      <h6>Powered by Diligent Technologies</h6>
    </footer>
  </div>
  <!----- Aquí termina el menú ----->

  <!-- Div para añadir la función de buscador
    <div>
      <span class = "ti-search o nombre del simbolo de serach"></span>
      <input type ="search" placeholder="Seach">
    </div>
  -->
  <div class="contenido">

    <main>

      <div class="user_profile">
      <img src="images/profilepic.png" class="profile_img" alt="">
      <h2 style="font-size: 2rem;" class="admin_name">William S. Matos Díaz</h2>
      <button class="edit-btn" type="button"><span><i class="far fa-window-maximize"></i></span> Edit Profile</button>
      </div>




      <section class="tablas">
        <div class="tabla-grid">
          <div class="contenido-card">

          <div>
          <h3><span><i class="far fa-address-card"></i></span>Personal Information</h3>
          </div>

          <table>
          <tbody>
            <tr>
              <td>Name: William S. Matos Díaz</td>
              <td>Birthday: 12/15/1999</td>
            </tr>
            <tr>
              <td>Gender: Male</td>
              <td>Age: 21 years old</td>
            </tr>
            <tr>
              <td>Race: Hispanic</td>
              <td>Citizenship: United States Citizen</td>
            </tr>
            </div>
          </tbody>
        </table>
      </div>
      </section>

      <section class="tablas">
        <div class="tabla-grid">
          <div class="contenido-card">
            <div>
            <h3><span><i class="fas fa-graduation-cap"></i></span>Education</h3>
            </div>

            <table>
            <tbody>

              <tr>
                <td>Highschool: Escuela Superior Luis Muñoz Marín</td>
                <td>Graduation: May, 2017</Yes</td>
              </tr>
              <tr>
                <td>Degree to obtain: B.S. Computer Science</td>
                <td>Expected Graduation Day: December, 2021
              </tr>

              </div>
            </tbody>
          </table>
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
                  <td>Employee Code: 008015</td>
                  <td>Position: Manager</td>
                </tr>
                <tr>
                  <td>Type: Admin</td>
                  <td>Earning Rate: $14.25 per hour</td>
                </tr>
              <tr>
                <td>Status: Active</td>
                <td>Working Since: February, 19 2019</td>

                </div>
              </tbody>
            </table>
          </div>
          </section>
  </div>
  </main>
  </body>
  </html>
