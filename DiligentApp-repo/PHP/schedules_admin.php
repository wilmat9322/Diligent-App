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
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Diligent App es una aplicación de manejo de manejo de empelados y nóminas desarrollada
                                      por Diligent Technologies. Diligent Technologies ha sido una empresa con más de 10 años
                                      de experiencia, encargada de proveer soluciones a grandes negocios a nivel de Puerto Rico.
                                      Es destacada por hacer aplicaciones para computadoras que ayudan... " />
  <meta name="keywords" content="DiligentApp, Employee Management, Payroll" />
  <meta name="author" content="Diligent Technologies" />

  <title>Schedules</title>

  <!----- Fonts y Símbolos que utilicé para la aplicación ----->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" type="image/png" href="images/favicon">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>

  <!----- Referencia al file del diseño de la app ----->
  <style>
    <?php include 'CSS/schedules_admin.css';
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
    <img src="images/Admin.png" class="Logo-DiligentApp" alt="">

    <h4><?php echo $_SESSION['name']; ?></h4>

    <!----- Lista de las herramientas con sus símbolos en el menú ----->
    <a href="myprofile_admin.php"><i class="far fa-address-card"></i><span>My profile</span></a>
    <a href="dashboard_admin.php"><i class="far fa-window-maximize"></i><span>Dashboard</span></a>
    <a href="manage_admin.php"><i class="fas fa-users"></i><span>Manage Employees</span></a>
    <a href="payrolls_admin.php"><i class="fas fa-file-invoice-dollar"></i><span>Payrolls</span></a>
    <a href="w2_admin.php"><i class="fas fa-landmark"></i><span>W-2 Tax Forms</span></a>
    <a href="schedules_admin.php"><i class="far fa-calendar-alt"></i></i><span>Schedules</span></a>
    <a href="leaves_admin.php"><i class="fas fa-bed"></i><span>Leave</span></a>
    <a href="dc_admin.php"><i class="far fa-file-alt"></i><span>Documents and Policies</span></a>
    <footer>
      <h6>Powered by Diligent Technologies</h6>
    </footer>
  </div>
  <!----- Aquí termina el menú ----->

  <div class="contenido">
    <main>
      <form action="schedules_admin.php" method="post">
      <div class="top-user">

        <h3 style="margin-left:10px;">Schedules</h3>
        <p class="selectors-p"> Search employees by their code:</p>

        <input class="search-container" type"submit" name="search" placeholder="Search employee">
        <button class="search-btn" type="submit" value="Search"><span><i class="fas fa-search"></i></span></button>

      </form>

        <label class="payroll-btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span><i class="far fa-calendar-plus"></i></span>  Add Schedule</label>

        <button class="print-btn" type="button"><span><i class="fas fa-print"></i></span> Print Schedules</button>

        <?php if (isset($_GET['error'])) { ?>

      <center>
        <p class="error"><?php echo $_GET['error']; ?></p>
      </center>

      <?php } ?>

        <div id="id01" class="modal">

            <div class="txtcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

        </div>

        <div class="container">

          <form class="modal-content animate" action="dbs/schedule_create.php" method="post">

            <center><h3 style="font-size: 24px;"> Complete the following information to add a schedule </h3></center>

            <label class="labcol" for="name"><b>Employee Name</b></label>
                <input type="text" id="name" name="name" value="<?php if(isset($_GET['name']))
                                           echo($_GET['name']); ?>" placeholder="Enter the name of the employee">

                <label class="labcol" for="user_name"><b>Employee Code</b></label>
                <input type="text" id="user_name" name="user_name" value="<?php if(isset($_GET['user_name']))
                                           echo($_GET['user_name']); ?>" placeholder="Enter employee code">

                <label class="labcol" for="monday"><b>Monday</b></label>
                <input type="text" id="monday" name="monday" value="<?php if(isset($_GET['monday']))
                           echo($_GET['monday']); ?>" placeholder="Enter schedule for monday">

                <label class="labcol" for="tuesday"><b>Tuesday</b></label>
                <input type="text" id="tuesday" name="tuesday" value="<?php if(isset($_GET['tuesday']))
                                                 echo($_GET['tuesday']); ?>" placeholder="Enter schedule for tuesday">

                <label class="labcol" for="wednesday"><b>Wednesday</b></label>
                <input type="text" id="wednesday" name="wednesday" value="<?php if(isset($_GET['wednesday']))
                                                       echo($_GET['wednesday']); ?>" placeholder="Enter schedule for wednesday">

                <label class="labcol" for="thursday"><b>Thursday</b></label>
                <input type="text" id="thursday" name="thursday" value="<?php if(isset($_GET['thursday']))
                                                             echo($_GET['thursday']); ?>" placeholder="Enter schedule for thursday">

                <label class="labcol" for="friday"><b>Friday</b></label>
                <input type="text" id="friday" name="friday" value="<?php if(isset($_GET['friday']))
                                                                   echo($_GET['friday']); ?>" placeholder="Enter schedule for friday">

                <label class="labcol" for="saturday"><b>Saturday</b></label>
                <input type="text" id="saturday" name="saturday" value="<?php if(isset($_GET['saturday']))
                                                                  echo($_GET['saturday']); ?>" placeholder="Enter schedule for saturday">

                <label class="labcol" for="sunday"><b>Sunday</b></label>
                <input type="text" id="sunday" name="sunday" value="<?php if(isset($_GET['sunday']))
                                                                  echo($_GET['sunday']); ?>" placeholder="Enter schedule for sunday">

                <label class="labcol" for="total_hours"><b>Total Hours</b></label>
                <input type="text" id="total_hours" name="total_hours" value="<?php if(isset($_GET['total_hours']))
                                                                  echo($_GET['total_hours']); ?>" placeholder="Enter total of hours">

                <center>
                <button class="cancel-btn" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button class="add-btn" type="submit" name="create_schedule">Create</button>
              </center>

              </form>
            </div>
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

        <?php include "dbs/schedule_read.php"; ?>

        <?php if (isset($_GET['success'])) { ?>
        <center>
          <p class="success"><?php echo $_GET['success']; ?></p>
        </center>
        <?php } ?>

        <section class="List">
          <div class="empleados-grid">
            <div class="empleados-card">

            <div>
            <h3><span><i class="fas fa-calendar-alt"></i></i></span>Schedules</h3>
            </div>
            <?php if (mysqli_num_rows($result)) { ?>

            <table>
              <thead>
                <tr>
                 <th>Employee Name</th>
                 <th>Employee Code</th>
                 <th>Monday</th>
                 <th>Tuesday</th>
                 <th>Wednesday</th>
                 <th>Thursday</th>
                 <th>Friday</th>
                 <th>Saturday</th>
                 <th>Sunday</th>
                 <th>Total Hours</th>
                 <th>Manage</th>
                </tr>
            </thead>
            <tbody>

              <?php
                       $i = 0;
                       while($rows = mysqli_fetch_assoc($result)){
                       $i++;
                     ?>

              <tr>

                <td><?=$rows['name']?></td>
                <td><?php echo $rows['user_name']; ?></td>
                <td><?php echo $rows['monday']; ?></td>
                <td><?php echo $rows['tuesday']; ?></td>
                <td><?php echo $rows['wednesday']; ?></td>
                <td><?php echo $rows['thursday']; ?></td>
                <td><?php echo $rows['friday']; ?></td>
                <td><?php echo $rows['saturday']; ?></td>
                <td><?php echo $rows['sunday']; ?></td>
                <td><?php echo $rows['total_hours']; ?></td>

                <td><a href="schedule_update.php?id=<?=$rows['id']?>" class="up-btn"><span><i class="fas fa-calendar-minus"></i></span><b> Edit</b></a>

                  <a href="dbs/schedule_delete.php?id=<?=$rows['id']?>" class="rm-btn"><span><i class="fas fa-calendar-times"></i></span><b>Delete</b></a>


              </tr>
              <?php } ?>
              </div>
            </tbody>
          </table>
          <?php } ?>
          </div>

  </div>
</main>
</section>
</body>
</html>
<?php
}else{
  header("Location: index.php");
  exit();
}
?>
