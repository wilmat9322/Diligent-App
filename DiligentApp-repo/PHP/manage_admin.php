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
  <meta charset="utf_unicode_ci">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Diligent App es una aplicación de manejo de manejo de empelados y nóminas desarrollada
                                      por Diligent Technologies. Diligent Technologies ha sido una empresa con más de 10 años
                                      de experiencia, encargada de proveer soluciones a grandes negocios a nivel de Puerto Rico.
                                      Es destacada por hacer aplicaciones para computadoras que ayudan... " />
  <meta name="keywords" content="DiligentApp, Employee Management, Payroll" />
  <meta name="author" content="Diligent Technologies" />

  <title>Employee Management</title>

  <!----- Fonts y Símbolos que utilicé para la aplicación ----->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" type="image/png" href="images/favicon">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,300&display=swap" rel="stylesheet">
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
</head>

<body>

  <!----- Referencia al file del diseño de la app ----->
  <style>
    <?php include 'CSS/manage_admin.css';
          include 'CSS/print.css';
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
    <a href="schedules_admin.php"><i class="far fa-calendar-alt"></i><span>Schedules</span></a>
    <a href="dc_admin.php"><i class="far fa-file-alt"></i><span>Documents and Policies</span></a>
    <footer>
      <h6>Powered by Diligent Technologies</h6>
    </footer>
  </div>
  <!----- Aquí termina el menú ----->

    <div class="contenido">
      <main>
<form action="manage_admin.php" method="post">
        <div class="top-user">

          <h3 style="margin-left:10px;">Manage Employees</h3>
          <p class="selectors-p"> Search Employees by their Code:</p>

          <input class="search-container" type"text" name="search" placeholder="Search Employee"></input>
          <button class="search-btn" type="submit" name="submit" value="Search"><span><i class="fas fa-search"></i></span></button>
          <button class="search-btn" type="submit" name="cancel" value="Search"><span><i class="fas fa-times-circle"></i></span> Cancel Search</button>
        </form>

  <label class="add1-btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span><i class="fas fa-user-plus"></i></span> Add Employee</label>

  <label class="print-btn" type="button" onclick="window.print();"><span><i class="fas fa-print"></i></span> Print Employee Sheet</label>
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

      <form class="modal-content animate" action="dbs/create.php" method="post">

        <center><h3 style="margin-left: 30px; font-size: 24px;"> Complete the following information to add an Employee </h3></center><br>

        <label class="labcol" for="comp_code"><b>Company code</b></label>
        <input type="text" id="comp_code" name="comp_code" value="<?php if(isset($_GET['comp_code']))
                        echo($_GET['comp_code']); ?>" placeholder="Escribe admin en este campo">

        <label class="labcol" for="name"><b>Employee name</b></label>
        <input type="text" id="name" name="name" value="<?php if(isset($_GET['name']))
    		                           echo($_GET['name']); ?>" placeholder="Enter the name of the employee">

        <label class="labcol" for="user_name"><b>Employee code</b></label>
        <input type="text" id="user_name" name="user_name" value="<?php if(isset($_GET['user_name']))
    		                           echo($_GET['user_name']); ?>" placeholder="Enter a username for the employee">

        <label class="labcol" for="position"><b>Select a Position for this employee</b></label>
        <select class="options" id="position" name="position">

          <option></option>
          <option> Manager</option>
          <option> Front End Superviser</option>
          <option> Cashier</option>
          <option> Bagger</option>
          <option> Stocker</option>
          <option> Butcher</option>
          <option> Maintenance and Cleaning</option>

          </select>

          <label class="labcol" for="type_employee"><b>Select Employee Type</b></label>
          <select class="options" id="type_employee" name="type_employee">

            <option></option>
            <option>Administrator</option>
            <option>Employee</option>

          </select>

        <label class="labcol" for="work_time"><b>Working since</b></label>
        <input type="date" id="work_time" name="work_time" value="<?php if(isset($_GET['work_time']))
                		                           echo($_GET['work_time']); ?>" placeholder="Enter the date the employee started working">

        <label class="labcol" for="hours_work"><b>Hours Worked</b></label>
        <input type="text" id="hours_work" name="hours_work" value="<?php if(isset($_GET['hours_work']))
                      		                           echo($_GET['hours_work']); ?>" placeholder="Enter hours worked">

        <label class="labcol" for="earn_rate"><b>Select the Earning Rate for this Employee</b></label>
        <select class="options" id="earn_rate" name="earn_rate">

          <option></option>
          <option> $8.75</option>
          <option> $18.75</option>

          </select>

  <label class="labcol" for="earn_rate"><b>Select a Gender</b></label>
  <select class="options" id="gender" name="gender">

    <option></option>
    <option>Male</option>
    <option>Female</option>
    <option>Other</option>

  </select>

       <label class="labcol" for="bday"><b>Enter Employee's Birthday</b></label>
       <input type="date" id="bday" name="bday" value="<?php if(isset($_GET['bday']))
             echo($_GET['bday']); ?>" placeholder="Enter employee birthday">

       <label class="labcol" for="citi"><b>Citizenship</b></label>
       <input type="text" id="citi" name="citi" value="<?php if(isset($_GET['citi']))
                   echo($_GET['citi']); ?>" placeholder="Enter employee citizenship">

        <label class="labcol" for="password"><b>Password</b></label>
        <input type="password" id="password" name="password" value="<?php if(isset($_GET['password']))
                                                            echo($_GET['password']); ?>" placeholder="Enter a password">

        <label class="labcol"><b>Repeat password</b></label>
        <input type="password" id="re_password" name="re_password" value="<?php if(isset($_GET['re_password']))
                                                                echo($_GET['re_password']); ?>" placeholder="Repeat the password">

        <center>
        <button class="cancel-btn" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

        <button class="add-btn" type="submit" name="create">Create</button>
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

  <?php include "dbs/read.php"; ?>

  <?php
          $con = new PDO("mysql:host=localhost;dbname=diligentapp",'root','CYBEr152512$');

           if (isset($_POST["submit"])) {
            $str = $_POST["search"];
            $sth = $con->prepare("SELECT * FROM `users_table` WHERE user_name = '$str'");

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
        <center><b>Results of Employee Search</b></center>
      </p>
      <?php if (mysqli_num_rows($result)) { ?>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Employee Code</th>
            <th>Position</th>
            <th>Type</th>
            <th>Working Since</th>
            <th>Hours Worked</th>
            <th>Earning Rate (ph)</th>
            <th>Manage</th>

          </tr>
        </thead>
        <tbody>
          <?php

                   if($rows = mysqli_fetch_assoc($result)){

                 ?>
                 <tr>

            <td><?php echo $row->name;?></td>
            <td><?php echo $row->user_name;?></td>
            <td><?php echo $row->position;?></td>
            <td><?php echo $row->type_employee;?></td>
            <td><?php echo $row->work_time;?></td>
            <td><?php echo $row->hours_work;?>hrs</td>
            <td><?php echo $row->earn_rate;?></td>

                <center>
          <td><a href="update.php?id=<?=$rows['id']?>" class="up-btn"><span><i class="fas fa-user-edit"></i></span><b>Update</b></a>

            <a href="dbs/delete.php?id=<?=$rows['id']?>" class="rm-btn"><span><i class="fas fa-user-minus"></i></span><b>Delete</b></a>
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
                echo "User not found";
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
            <h3><span><i class="fas fa-users"></i></span>List of Employees</h3>

          </div>
          <?php if (mysqli_num_rows($result)) { ?>

          <table>
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Employee Code</th>
                <th>Position</th>
                <th>Type</th>
                <th>Working Since</th>
                <th>Hours Worked</th>
                <th>Earning Rate (ph)</th>
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

                <th scope="row"><?=$i?></th>
                <td><?=$rows['name']?></td>
                <td><?php echo $rows['user_name']; ?></td>
                <td><?php echo $rows['position']; ?></td>
                <td><?php echo $rows['type_employee']; ?></td>
                <td><?php echo $rows['work_time']; ?></td>
                <td><?php echo $rows['hours_work']; ?>hrs</td>
                <td><?php echo $rows['earn_rate']; ?></td>

                <td><a href="update.php?id=<?=$rows['id']?>" class="up-btn"><span><i class="fas fa-user-edit"></i></span><b>Update</b></a>

                  <a href="dbs/delete.php?id=<?=$rows['id']?>" class="rm-btn"><span><i class="fas fa-user-minus"></i></span><b>Delete</b></a>

                </td>

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

    </div>
</body>

</html>
<?php
    }else{
      header("Location: index.php");
      exit();
    }
    ?>
