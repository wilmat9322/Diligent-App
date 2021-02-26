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
  <link rel="shortcut icon" type="image/png" href="images/favicon2">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>

  <!----- Referencia al file del diseño de la app ----->
  <style>
    <?php include 'CSS/w2_employee.css';
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
      <a href="myprofile_employee.php" class="show_profile">My profile</a>
      <img src="images/profilepic.png" class="profile_image" alt"">
      <img src="images/Negocio.png" class="negocio" alt="">
    </div>
  </header>
  <!----- Aquí termina el header ----->

  <!----- Aquí empieza el menu ----->
  <div class="menu-slide">
    <img src="images/Employee.png" class="Logo-DiligentApp" alt="DiligentApp">

    <h4>Employee</h4>

    <!----- Lista de las herramientas con sus símbolos en el menú ----->
    <a href="myprofile_employee.php"><i class="far fa-address-card"></i><span>My profile</span></a>
    <a href="dashboard_employee.php"><i class="far fa-window-maximize"></i><span>Dashboard</span></a>
    <a href="payrolls_employee.php"><i class="fas fa-file-invoice-dollar"></i><span>Payrolls</span></a>
    <a href="w2_employee.php"><i class="fas fa-landmark"></i><span>W-2 Tax Forms</span></a>
    <a href="schedules_employee.php"><i class="far fa-calendar-alt"></i><span>Schedules</span></a>
    <a href="messages_employee.php"><i class="fas fa-envelope"></i><span>Messages</span></a>
    <a href="leave_employee.php"><i class="fas fa-bed"></i><span>Leave</span></a>
    <a href="attendance_employee.php"><i class="fas fa-user-clock"></i><span>Attendance</span></a>
    <a href="dc_employee.php"><i class="far fa-file-alt"></i><span>Documents and Policies</span></a>
    <footer>
      <h6>Powered by Diligent Technologies</h6>
    </footer>
  </div>
  <!----- Aquí termina el menú ----->

  <div class="contenido">

    <main>
      <div class="top-user">

        <h3 style="margin-left:10px;">W-2 Tax Forms</h3>
        <p class="selectors-p"> Select Year:</p>

        <select class="selectors">
          <option value="0">Select Year:</option>
          <option value="1">2010</option>
          <option value="2">2011</option>
          <option value="3">2012</option>
          <option value="4">2013</option>
          <option value="5">2014</option>
          <option value="6">2015</option>
          <option value="7">2016</option>
          <option value="8">2018</option>
          <option value="9">2017</option>
          <option value="10">2018</option>
          <option value="11">2019</option>
          <option value="12">2021</option>
        </select>

        <button class="submit-btn" type="button"> Submit</button>
        <input class="search-container" type"submit" name="search" placeholder="Search Tax Form">
        <button class="search-btn" type="submit" value="Search"><span><i class="fas fa-search"></i></span></button>

        <button class="print-btn" type="button"><span><i class="fas fa-print"></i></span> Print Tax Form</button>

      </div>

      <section class="List">
        <div class="empleados-grid">
          <div class="empleados-card">

          <div>
          <h3><span><i class="fas fa-landmark"></i></span>List of Tax Forms</h3>
          </div>

          <table>
            <thead>
              <tr>
                  <th>Tax Form Code</th>
                  <th>Employee Name</th>
                  <th>Employee Code</th>
                  <th>Date</th>
              </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>

            </div>
          </tbody>
        </table>
      </div>

  </div>
</main>
</section>
</body>
</html>
