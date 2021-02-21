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

  <title>Welcome to DiligentApp!</title>

  <!----- Fonts y Símbolos que utilicé para la aplicación ----->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" type="image/png" href="images/favicon">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>

  <!----- Referencia al file del diseño de la app ----->
  <style>
    <?php include 'CSS/dashboard_admin.css';
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
      <a href="#" class="logout">Logout</a>
      <a href="#" class="show_profile">My profile</a>
      <img src="images/Hombre.png" class="profile_image" alt"">
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
    <a href="w2_admin.php"><i class="fas fa-landmark"></i><span>W-2 Forms</span></a>
    <a href="schedules_admin.php"><i class="far fa-calendar-plus"></i><span>Schedules</span></a>
    <a href="messages_admin.php"><i class="fas fa-inbox"></i><span>Messages</span></a>
    <a href="leaves_admin.php"><i class="fas fa-bed"></i><span>Leave</span></a>
    <a href="attendance_admin.php"><i class="fas fa-user-clock"></i><span>Attendance</span></a>
    <a href="dc_admin.php"><i class="far fa-file-alt"></i><span>Documents and Policies</span></a>
    <footer>
      <h6>Powered by Diligent Technologies</h6>
    </footer>
  </div>
  <!----- Aquí termina el menú ----->

  <div class="contenido">

    <main>
      <h2 class="dash-header">Admin Dashboard</h2>

      <div class="dashboard-cards">

      <!-- Caja de ponches -->
        <div class="ponches-card">
          <div class="ponches-single">
          <div class="ponches-body">
          <span><i class="fas fa-user-clock" style="margin-bottom: 40px;"></i></span>
          <div>
            <h3>Clock in/out</h3>
            <div class="green">
            <h2 style="padding-top: 40px;">Punch Status: <span class="green-status">On-Time</span></div></h2>
          </div>
        </div>
        <div class="ponches-footer" style="margin-top: 90px;">
          <a href="#">View all</a>
        </div>
      </div>
    </div>

      <div class="ponches-card">
        <div class="ponches-single">
        <div class="ponches-body">
        <span><i class="fas fa-file-invoice-dollar" style="margin-bottom: 70px;"></i></span>
        <div>
          <h3>Last Payroll</h3>
          <div class="gray-status">
          <h2>Gross Earnings: <span class="gray">$253.75</h2></span>
          <h2>Deductions: <span class="gray">$20.03</h2></span>
          <h2>Net Payment: <span class="gray">$233.45 </h2></span>
        </div>
        </div>
      </div>
      <div class="ponches-footer" style="margin-top: 60px;">
        <a href="#">View all</a>
      </div>
      </div>
    </div>

      <div class="ponches-card">
        <div class="ponches-single">
        <div class="ponches-body">
        <span><i class="fas fa-business-time" style="margin-bottom: 50px;"></i></span>
        <div>
          <h3>Hours Worked for this payroll</h3>
          <h2 style="padding-top: 40px;">You have worked <span class="gray">35</span> hours for this payroll.</h2>
        </div>
      </div>
      <div class="ponches-footer" style="margin-top: 76px;">
        <a href="#">View all</a>
      </div>
      </div>
      </div>

</div>

  <!----------------------- Tabla de dashboard empleados -------------------->
  <section class="List">
    <div class="empleados-grid">
      <div class="empleados-card">

      <div>
      <h3><span><i class="fas fa-users"></i></span>List of Employees</h3>
      </div>

      <table>
        <thead>
          <tr>
              <th>Name</th>
              <th>Employee number</th>
              <th>Position</th>
              <th>Type</th>
              <th>Working Since</th>
              <th>Hours Worked</th>
              <th>Earning Rate (ph)</th>
          </tr>
      </thead>
      <tbody>
        <tr>
          <td>William S. Matos Díaz</td>
          <td>008015</td>
          <td>Manager</td>
          <td>Admin</td>
          <td>February 19, 2019</td>
          <td>40hrs</td>
          <td>$14.25</td>
        </tr>
        <tr>
          <td>Coral M. Irizarry Cintrón</td>
          <td>008016</td>
          <td>Cashier</td>
          <td>Employee</td>
          <td>March 8, 2019</td>
          <td>28hrs</td>
          <td>$8.75</td>
        </tr>
        <tr>
          <td>Mayra I. Díaz Rodríguez</td>
          <td>008017</td>
          <td>Cashier</td>
          <td>Employee</td>
          <td>December 13, 2020</td>
          <td>36hrs</td>
          <td>$8.75</td>
        </tr>
        <tr>
          <td>William González</td>
          <td>008019</td>
          <td>Bagger</td>
          <td>Employee</td>
          <td>November 8, 2020</td>
          <td>12hrs</td>
          <td>$7.25</td>
        </tr>
        <tr>
          <td>Gerardo Padilla Colón</td>
          <td>008026</td>
          <td>Bagger</td>
          <td>Employee</td>
          <td>July 5, 2020</td>
          <td>14hrs</td>
          <td>$7.25</td>
        </tr>
        <tr>
          <td>Esteban Gonzalez Gonzalez</td>
          <td>008045</td>
          <td>Bagger</td>
          <td>Employee</td>
          <td>April 5, 2020</td>
          <td>14hrs</td>
          <td>$7.25</td>
        </tr>
        <tr>
          <td>Alejandro Del Valle</td>
          <td>008031</td>
          <td>Bagger</td>
          <td>Employee</td>
          <td>July 5, 2020</td>
          <td>14hrs</td>
          <td>$7.25</td>
        </tr>
        <tr>
          <td class="empleados-footer"><a href="#">View all</a></td>
          <td><td><td><td><td><td class="border">
        </tr>
        </div>
      </tbody>
    </table>
  </div>

  <div class="small-cards">
    <div class="turno-card">
      <div class="turno-single">
      <div>
          <h5 <span><i class="far fa-calendar-plus"></i></span>Next Shift</h5>
          <small>Date: March 15, 2021</small><br>
          <small>Time: 8:00 a.m.</small><br>
          <div class="turno-footer">
          <a href="#">View all</a>
        </div>
        </div>
    </div>
  </div>
  <div class="inbox-card">
    <div class="inbox-single">
    <div>
        <h5 <span><i class="fas fa-envelope"></i></span>Messages</h5>
        <small>Recieved: 0</small><br>
        <small>Sent: 0 </small><br>
        <div class="inbox-footer">
        <a href="#">View all</a>
      </div>
      </div>
  </div>
</div>
<div class="leave-card">
  <div class="leave-single">
  <div>
      <h5 <span><i class="fas fa-bed"></i></span>Leaves</h5>
      <small>Number of Leaves: 1</small><br>
      <small>Latest Leave: Medical Appointment</small><br>
      <small>Status:<small class="yellow-status"> Pending</small></small><br>
      <div class="leave-footer">
      <a href="#">View all</a>
    </div>
    </div>
</div>
</div>
</div>
</div>
  </section>
  </main>
</body>
</html>
