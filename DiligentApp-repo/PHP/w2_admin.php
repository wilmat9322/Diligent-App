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

  <title>Tax Forms</title>

  <!----- Fonts y Símbolos que utilicé para la aplicación ----->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" type="image/png" href="images/favicon">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>

  <!----- Referencia al file del diseño de la app ----->
  <style>
    <?php include 'CSS/w2_admin.css';
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
      <a class="bienvenido"> Hello, <?php echo $_SESSION['name']; ?></a>

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

        <button class="print-btn" <span><i class="fas fa-print"></i></span> Print Tax Form</button>
        <button class="payroll-btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">+ <span><i class="fas fa-file-invoice-dollar"></i></span> Add Form</button>
        <button class="delete-btn" onclick="document.getElementById('id02').style.display='block'" style="width:auto;">- <span><i class="fas fa-file-invoice-dollar"></i></span> Remove Form</button>
        <button class="save-btn" <span><i class="fas fa-save"></i></span> Save Changes</button>

        <div id="id01" class="modal">

        <form class="modal-content animate" action="" method="post">
            <div class="txtcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <h3> Complete the following information to add a Tax Form</h3>
        </div>

        <div class="container">

          <label for="uname"><b>Add Tax Form</br></label>
          <input type="file" id="myFile" name="filename">

          <label for="uname"><b>Employee Name</br></label>
          <input type="text" placeholder="Enter Employee Name" name="name" required>

          <label for="uname"><b>Employee Code</br></label>
          <input type="text" placeholder="Enter Employee Code" name="name" required>

          <label for="uname"><b>Date</br></label>
          <input type="text" placeholder="Enter Date" name="name" required>

          <button class="add-btn" type="submit">Add</button>
          <button class="cancel-btn" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

        </div>

        <div class="container">

        </div>
        </form>
        </div>

        <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
          }
        }
        </script>

        <div id="id02" class="modal">

        <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="txtcontainer">
            <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
            <h3> To remove a Tax Form, please enter a valid password. </h3>
        </div>

        <div class="container">

          <label for="uname"><br>Tax Form Code</br></label>
          <input type="text" placeholder="Enter Tax Form Code" name="name" required>

          <label for="uname"><br>Password</br></label>
          <input type="password" placeholder="Enter Password" name="name" required>

          <button class="confirm-btn" type="submit">Confirm</button>
          <button class="cancel-btn" type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>

        </div>

        <div class="container">

        </div>
        </form>
        </div>

        <script>
        // Get the modal
        var modal = document.getElementById('id02');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
        if (event.target == modal) {
        modal.style.display = "none";
          }
        }
        </script>

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
              </tr><tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr><tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr><tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr><tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr><tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr><tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr><tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr><tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr><tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
              </tr><tr>
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
  </body>
  </html>
  <?php
  }else{
    header("Location: index.php");
    exit();
  }
  ?>
