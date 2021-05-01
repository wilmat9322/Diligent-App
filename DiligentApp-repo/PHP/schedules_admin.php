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
        <p class="selectors-p"> Search Schedule by Employee name:</p>

        <input class="search-container" type"submit" name="search" placeholder="Search Schedule">
        <button class="search-btn" type="submit" name="submit" value="Search"><span><i class="fas fa-search"></i></span></button>
        <button class="search-btn" type="submit" name="cancel" value="Search"><span><i class="fas fa-times-circle"></i></span> Cancel Search</button>

      </form>

        <label class="payroll-btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span><i class="far fa-calendar-plus"></i></span>  Add Schedule</label>

        <label class="print-btn" type="button" onclick="window.print();"><span><i class="fas fa-print"></i></span> Print Schedules</label>

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

                <label class="labcol" for="monday"><b>Monday</b></label><br>
                <input style="width: 20.8%; display: inline-block;" type="date" format-value="l, d-M-Y H:i:s T" id="monday" name="monday" value="<?php if(isset($_GET['monday']))
                           echo($_GET['monday']); ?>" placeholder="Enter schedule for monday">
                <input style="width: 12.8%; display: inline-block; margin-bottom: 15px;" type="time" format-value="l, d-M-Y H:i:s T" id="from_monday" name="from_monday" value="<?php if(isset($_GET['from_monday']))
                           echo($_GET['from_monday']); ?>" placeholder="Enter schedule for monday"> -
                <input style="width: 12.8%; display: inline-block; margin-bottom: 15px;" type="time" format-value="l, d-M-Y H:i:s T" id="to_monday" name="to_monday" value="<?php if(isset($_GET['to_monday']))
                           echo($_GET['to_monday']); ?>" placeholder="Enter schedule for monday">

                <br><label class="labcol" for="tuesday"><b>Tuesday</b></label><br>
                <input style="width: 20.8%; display: inline-block; "type="date" format-value="Y-m-d\TH:i:s.vP" id="tuesday" name="tuesday" value="<?php if(isset($_GET['tuesday']))
                                                 echo($_GET['tuesday']); ?>" placeholder="Enter schedule for tuesday">
                <input style="width: 12.8%; display: inline-block; margin-bottom: 15px;" type="time" format-value="l, d-M-Y H:i:s T" id="from_tuesday" name="from_tuesday" value="<?php if(isset($_GET['from_tuesday']))
                                            echo($_GET['from_tuesday']); ?>" placeholder="Enter schedule for tuesday"> -
                <input style="width: 12.8%; display: inline-block; margin-bottom: 15px;" type="time" format-value="l, d-M-Y H:i:s T" id="to_tuesday" name="to_tuesday" value="<?php if(isset($_GET['to_tuesday']))
                                   echo($_GET['to_tuesday']); ?>" placeholder="Enter schedule for tuesday">

                <label class="labcol" for="wednesday"><b>Wednesday</b></label><br>
                <input style="width: 20.8%; display: inline-block;" type="date" format-value="yyyy-MM-ddTimeHH:mm" id="wednesday" name="wednesday" value="<?php if(isset($_GET['wednesday']))
                                                       echo($_GET['wednesday']); ?>" placeholder="Enter schedule for wednesday">
                <input style="width: 12.8%; display: inline-block; margin-bottom: 15px;" type="time" format-value="l, d-M-Y H:i:s T" id="from_wednesday" name="from_wednesday" value="<?php if(isset($_GET['from_wednesday']))
                                        echo($_GET['from_wednesday']); ?>" placeholder="Enter schedule for wednesday"> -
                <input style="width: 12.8%; display: inline-block; margin-bottom: 15px;" type="time" format-value="l, d-M-Y H:i:s T" id="to_wednesday" name="to_wednesday" value="<?php if(isset($_GET['to_wednesday']))
                                                   echo($_GET['to_wednesday']); ?>" placeholder="Enter schedule for wednesday">

                <label class="labcol" for="thursday"><b>Thursday</b></label><br>
                <input style="width: 20.8%; display: inline-block;" type="date" format-value="yyyy-MM-ddTHH:mm" id="thursday" name="thursday" value="<?php if(isset($_GET['thursday']))
                                                             echo($_GET['thursday']); ?>" placeholder="Enter schedule for thursday">
                <input  style="width: 12.8%; display: inline-block; margin-bottom: 15px;" type="time" format-value="l, d-M-Y H:i:s T" id="from_thursday" name="from_thursday" value="<?php if(isset($_GET['from_thursday']))
                                                            echo($_GET['from_thursday']); ?>" placeholder="Enter schedule for thursday"> -
                <input style="width: 12.8%; display: inline-block; margin-bottom: 15px;" type="time" format-value="l, d-M-Y H:i:s T" id="to_thursday" name="to_thursday" value="<?php if(isset($_GET['to_thursday']))
                                                                       echo($_GET['to_thursday']); ?>" placeholder="Enter schedule for thursday">

                <label class="labcol" for="friday"><b>Friday</b></label><br>
                <input style="width: 20.8%; display: inline-block;" type="date" format-value="yyyy-MM-ddTHH:mm" id="friday" name="friday" value="<?php if(isset($_GET['friday']))
                                                                   echo($_GET['friday']); ?>" placeholder="Enter schedule for friday">
                <input style="width: 12.8%; display: inline-block; margin-bottom: 15px;" type="time" format-value="l, d-M-Y H:i:s T" id="from_friday" name="from_friday" value="<?php if(isset($_GET['from_friday']))
                                                        echo($_GET['from_friday']); ?>" placeholder="Enter schedule for friday"> -
                <input style="width: 12.8%; display: inline-block; margin-bottom: 15px;" type="time" format-value="l, d-M-Y H:i:s T" id="to_friday" name="to_friday" value="<?php if(isset($_GET['to_friday']))
                                                                   echo($_GET['to_friday']); ?>" placeholder="Enter schedule for friday">

                <label class="labcol" for="saturday"><b>Saturday</b></label><br>
                <input style="width: 20.8%; display: inline-block;" type="date" format-value="yyyy-MM-ddTHH:mm" id="saturday" name="saturday" value="<?php if(isset($_GET['saturday']))
                                                                  echo($_GET['saturday']); ?>" placeholder="Enter schedule for saturday">
                <input style="width: 12.8%; display: inline-block; margin-bottom: 15px;" type="time" format-value="l, d-M-Y H:i:s T" id="from_saturday" name="from_saturday" value="<?php if(isset($_GET['from_saturday']))
                                       echo($_GET['from_saturday']); ?>" placeholder="Enter schedule for saturday"> -
                <input style="width: 12.8%; display: inline-block; margin-bottom: 15px;" type="time" format-value="l, d-M-Y H:i:s T" id="to_saturday" name="to_saturday" value="<?php if(isset($_GET['to_saturday']))
                                                  echo($_GET['to_saturday']); ?>" placeholder="Enter schedule for saturday">

                <label class="labcol" for="sunday"><b>Sunday</b></label><br>
                <input style="width: 20.8%; display: inline-block;" type="date" format-value="yyyy-MM-ddTHH:mm" id="sunday" name="sunday" value="<?php if(isset($_GET['sunday']))
                                                                  echo($_GET['sunday']); ?>" placeholder="Enter schedule for sunday">
                <input style="width: 12.8%; display: inline-block; margin-bottom: 15px;" type="time" format-value="l, d-M-Y H:i:s T" id="from_sunday" name="from_sunday" value="<?php if(isset($_GET['from_sunday']))
                                                    echo($_GET['from_sunday']); ?>" placeholder="Enter schedule for sunday"> -
                <input style="width: 12.8%; display: inline-block; margin-bottom: 15px;" type="time" format-value="l, d-M-Y H:i:s T" id="to_sunday" name="to_sunday" value="<?php if(isset($_GET['to_sunday']))
                                                               echo($_GET['to_sunday']); ?>" placeholder="Enter schedule for sunday">

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

        <?php
                $con = new PDO("mysql:host=localhost;dbname=diligentapp",'root','admin1');

                 if (isset($_POST["submit"])) {
                  $str = $_POST["search"];
                  $sth = $con->prepare("SELECT * FROM `schedules` WHERE name = '$str'");

                  $sth->setFetchMode(PDO:: FETCH_OBJ);
                  $sth -> execute();

                if($row = $sth->fetch())
                  {
                    ?>
        <br>
        <section class="List">
          <div class="empleados-grid">
              <div class="empleados-card">

            <p>
              <center><b>Results of Schedule Search</b></center>
            </p>
            <?php if (mysqli_num_rows($result)) { ?>
            <table>
              <thead>
                <tr>
                 <th>Employee Name</th>
                 <th>Monday</th>
                 <th>Tuesday</th>
                 <th>Wednesday</th>
                 <th>Thursday</th>
                 <th>Friday</th>
                 <th>Saturday</th>
                 <th>Sunday</th>
                 <th>Manage</th>
                </tr>
              </thead>
              <tbody>
                <?php

                         if($rows = mysqli_fetch_assoc($result)){

                       ?>
                       <tr>

                  <td style="width: 12%;"><?php echo $row->name;?></td>

                  <td style="width: 12%;">Date:<?php echo $row->monday;?>
                Clock-in: <?php echo $row->from_monday;?>
                Clock-in: <?php echo $row->to_monday;?></td>

                  <td style="width: 12%;">Date:<?php echo $row->tuesday;?>
                Clock-in: <?php echo $row->from_tuesday;?>
                  Clock-in: <?php echo $row->to_tuesday;?></td>

                  <td style="width: 12%;">Date:<?php echo $row->wednesday;?>
              Clock-in: <?php echo $row->from_wednesday;?>
              Clock-in: <?php echo $row->to_wednesday;?></td>

                  <td style="width: 12%;">Date:<?php echo $row->thursday;?>
              Clock-in: <?php echo $row->from_thursday;?>
                Clock-in: <?php echo $row->to_thursday;?></td>

                  <td style="width: 12%;">Date:<?php echo $row->friday;?>
                Clock-in: <?php echo $row->from_friday;?>
              Clock-in: <?php echo $row->to_friday;?></td>

                  <td style="width: 12%;">Date:<?php echo $row->saturday;?>
            Clock-in: <?php echo $row->from_saturday;?>
              Clock-in: <?php echo $row->to_saturday;?></td>

                  <td style="width: 12%;">Date:<?php echo $row->sunday;?>
              Clock-in: <?php echo $row->from_sunday;?> 
              Clock-in: <?php echo $row->to_sunday;?></td>

                      <center>
                        <td style="width: 10%;"><a href="schedule_update.php?id=<?=$rows['id']?>" class="up-btn"><span><i class="fas fa-calendar-minus"></i></span><b> Edit</b></a>

                          <a href="dbs/schedule_delete.php?id=<?=$rows['id']?>" class="rm-btn"><span><i class="fas fa-calendar-times"></i></span><b>Delete</b></a>
                </center>

                </td>
                </tr>
                <?php } ?>
                </div>
                </tbody>
                </table>
                <?php } ?>
          </div>

          <br>
          <?php
                  }

                else{
                      echo "Schedule not found";
                    }
                }

                ?>


        <?php if (isset($_GET['success'])) { ?>
        <center>
          <p class="success"><?php echo $_GET['success']; ?></p>
        </center>
        <?php } ?>

        <style>
        @media print {
          body * {
            visibility: hidden;
          }
          .print-container, .print-container * {
            visibility: visible;
          }
          .print-container {
            position: absolute;
            left: 0px;
            top: 0px;
          }
        }
        </style>
        <div class = "row print-container">

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
                 <th>Monday</th>
                 <th>Tuesday</th>
                 <th>Wednesday</th>
                 <th>Thursday</th>
                 <th>Friday</th>
                 <th>Saturday</th>
                 <th>Sunday</th>
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

                <td style="width: 15%;"><?=$rows['name']?></td>

                <td style="width: 12%;">Date: <?php echo $rows['monday']; ?>

                    Clock-in: <?php echo $rows['from_monday']; ?>
                    Clock-out: <?php echo $rows['to_monday']; ?></td>

                <td style="width: 12%;">Date: <?php echo $rows['tuesday']; ?>
                    Clock-in: <?php echo $rows['from_tuesday']; ?>
                    Clock-out: <?php echo $rows['to_tuesday']; ?></td>

                <td style="width: 12%;">Date: <?php echo $rows['wednesday']; ?>
                    Clock-in: <?php echo $rows['from_wednesday']; ?>
                    Clock-out: <?php echo $rows['to_wednesday']; ?></td>

                <td style="width: 12%;">Date: <?php echo $rows['thursday']; ?>
                    Clock-in: <?php echo $rows['from_thursday']; ?>
                    Clock-out: <?php echo $rows['to_thursday']; ?></td>

                 <td style="width: 12%;">Date: <?php echo $rows['friday']; ?>
                     Clock-in: <?php echo $rows['from_friday']; ?>
                     Clock-out: <?php echo $rows['to_friday']; ?></td>

                 <td style="width: 12%;">Date: <?php echo $rows['saturday']; ?>
                     Clock-in: <?php echo $rows['from_saturday']; ?>
                     Clock-out: <?php echo $rows['to_saturday']; ?></td>

                  <td style="width: 12%;">Date: <?php echo $rows['sunday']; ?>
                      Clock-in: <?php echo $rows['from_sunday']; ?>
                      Clock-out: <?php echo $rows['to_sunday']; ?></td>

                <td style="width: 10%;"><a href="schedule_update.php?id=<?=$rows['id']?>" class="up-btn"><span><i class="fas fa-calendar-minus"></i></span><b> Edit</b></a>

                  <a href="dbs/schedule_delete.php?id=<?=$rows['id']?>" class="rm-btn"><span><i class="fas fa-calendar-times"></i></span><b>Delete</b></a>

              </tr>
              <?php } ?>
              </div>
            </tbody>
          </table>
          <?php } ?>
          </div>
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
