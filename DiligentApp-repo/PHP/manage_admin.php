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

  <title>Employee Management</title>

  <!----- Fonts y Símbolos que utilicé para la aplicación ----->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" type="image/png" href="images/favicon">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>

  <!----- Referencia al file del diseño de la app ----->
  <style>
    <?php include 'CSS/manage_admin.css';
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
          <form action="manage_admin.php" method="post">
        <div class="top-user">

          <h3 style="margin-left:10px;">Manage Employees</h3>
          <p class="selectors-p"> Range Employees Working Since:</p>

          <select class="selectors">
            <option value="0">Select Day:</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>

          <select class="selectors">
            <option value="0">Select Month:</option>
            <option value="1">January</option>
            <option value="2">February</option>
            <option value="3">March</option>
            <option value="4">April</option>
            <option value="5">May</option>
            <option value="6">June</option>
            <option value="7">July</option>
            <option value="8">August</option>
            <option value="9">September</option>
            <option value="10">October</option>
            <option value="11">November</option>
            <option value="12">December</option>
          </select>
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


          <input class="search-container" type"text" name="search" placeholder="Search Employee"></input>
          <button class="search-btn" type="submit" name="submit" value="Search"><span><i class="fas fa-search"></i></span></button>
        </form>

  <label class="add1-btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><span><i class="fas fa-user-plus"></i></span> Add Employee</label>

  <?php if (isset($_GET['error'])) { ?>

  <center>
    <p class="error"><?php echo $_GET['error']; ?></p>
  </center>

  <?php } ?>

  <div id="id01" class="modal">

    <div class="txtcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <h3> Complete the following information to add an Employee </h3>
    </div>

    <div class="container">

      <form class="modal-content animate" action="dbs/create.php" method="post">

        <h3 style="margin-left: 30px;"> Complete the following information to add an Employee </h3><br>

        <label for="comp_code"><b>Company Code</b></label>
        <input type="text" id="comp_code" name="comp_code" value="<?php if(isset($_GET['']))
                        echo($_GET['comp_code']); ?>" placeholder="Enter the Company Code"><br>

        <label for="name"><b>Name</b></label>
        <input type="text" id="name" name="name" value="<?php if(isset($_GET['name']))
    		                           echo($_GET['name']); ?>" placeholder="Enter the name of the employee"><br>

        <label for="user_name"><b>Username</b></label>
        <input type="text" id="user_name" name="user_name" value="<?php if(isset($_GET['user_name']))
    		                           echo($_GET['user_name']); ?>" placeholder="Enter a username for the employee"><br>

        <label for="position"><b>Position</b></label>
        <input type="text" id="position" name="position" value="<?php if(isset($_GET['position']))
                   echo($_GET['position']); ?>" placeholder="Enter the position of the employee"><br>

        <label for="employee type"><b>Employee type</b></label>
        <input type="text" id="type_employee" name="type_employee" value="<?php if(isset($_GET['type_employee']))
          		                           echo($_GET['type_employee']); ?>" placeholder="Enter the employee type"><br>

        <label for="work_time"><b>Working Since</b></label>
        <input type="text" id="work_time" name="work_time" value="<?php if(isset($_GET['work_time']))
                		                           echo($_GET['work_time']); ?>" placeholder="Enter the date the employee started working"><br>

        <label for="hours_work"><b>Hours Work</b></label>
        <input type="text" id="hours_work" name="hours_work" value="<?php if(isset($_GET['hours_work']))
                      		                           echo($_GET['hours_work']); ?>" placeholder="Enter hours worked"><br>

        <label for="earn_rate"><b>Earning rate</b></label>
        <input type="text" id="earn_rate" name="earn_rate" value="<?php if(isset($_GET['earn_rate']))
                            		                           echo($_GET['earn_rate']); ?>" placeholder="Enter hours worked">

        <label for="password"><b>Password</b></label>
        <input type="password" id="password" name="password" value="<?php if(isset($_GET['password']))
                                   		                           echo($_GET['password']); ?>" placeholder="Password"><br>

        <label><b>Re Password</b></label>
        <input type="password" id="re_password" name="re_password" value="<?php if(isset($_GET['re_password']))
                                      		                           echo($_GET['re_password']); ?>" placeholder="Re_Password"><br>


        <button class="cancel-btn" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

        <button class="add-btn" type="submit" name="create">Create</button>

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
          $con = new PDO("mysql:host=localhost;dbname=diligentapp",'root','admin1');

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
            <td>$<?php echo $row->earn_rate;?></td>


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

    <br>
    <?php
            }

          else{
                echo "Invalid Entry";
              }
          }

          ?>

    <?php if (isset($_GET['success'])) { ?>
    <center>
      <p class="success"><?php echo $_GET['success']; ?></p>
    </center>
    <?php } ?>
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
                <td>$<?php echo $rows['earn_rate']; ?></td>

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
