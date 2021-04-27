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

  <title>Documents and Policies</title>

  <!----- Fonts y Símbolos que utilicé para la aplicación ----->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" type="image/png" href="images/favicon">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,300&display=swap" rel="stylesheet">
</head>

<body>

  <!----- Referencia al file del diseño de la app ----->
  <style>
    <?php include 'CSS/dc_admin.css';
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

<form action="dc_admin.php" method="post">
  <div class="top-user">

  <h3 style="margin-left:10px;">Documents and Policies</h3>
  <p class="selectors-p"> Search documents by their Name:</p>

  <input class="search-container" type"submit" name="search" placeholder="Search Document">
  <button class="search-btn" type="submit" value="Search"><span><i class="fas fa-search"></i></span></button>
  </form>

        <label class="payroll-btn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">+ <span><i class="far fa-file-alt"></i></span> Add Document</label>

        <?php if (isset($_GET['error'])) { ?>

        <center>
        <p class="error"><?php echo $_GET['error']; ?></p>
        </center>

        <?php } ?>

        <div id="id01" class="modal">

        <form class="modal-content animate" action="dbs/dc_create.php" method="post" enctype="multipart/form-data">

          <?php if (isset($_GET['error'])): ?>
            <p><?php echo $_GET['error']; ?></p>
          <?php endif ?>

          <div class="txtcontainer">
          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          </div>

          <div class="container">

            <form class="modal-content animate" action="dbs/dc_create.php" method="post">

          <center><h3 style="font-size: 24px; margin-top: 0;"> Complete the following information to add a document </h3></center>

          <label class="labcol" for="dc_name"><b>Document Name</b></label>
            <input type="text" id="dc_name" name="dc_name" value="<?php if(isset($_GET['dc_name']))
                                             echo($_GET['dc_name']); ?>" placeholder="Enter the name of the document">

            <label class="labcol" for="dc_add"><b>Add Document</b></label>
            <input type="text" id="dc_add" name="dc_add" value="<?php if(isset($_GET['dc_add']))
                                                   echo($_GET['dc_add']); ?>" placeholder="Select a document">

            <label class="labcol" for="dc_desc"><b>Brief Description of the Document</b></label>
            <input type="text" id="dc_desc" name="dc_desc" value="<?php if(isset($_GET['dc_desc']))
                                                         echo($_GET['dc_desc']); ?>" placeholder="Enter a brief description for the document">

            <label class="labcol" for="dc_date"><b>Date</b></label>
            <input type="text" id="dc_date" name="dc_date" value="<?php if(isset($_GET['dc_date']))
                                                               echo($_GET['dc_date']); ?>" placeholder="Enter a date for the document">

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

        <?php include "dbs/dc_read.php"; ?>

        <?php if (isset($_GET['success'])) { ?>
        <center>
          <p class="success"><?php echo $_GET['success']; ?></p>
        </center>
        <?php } ?>

        <section class="List">
          <div class="empleados-grid">
            <div class="empleados-card">

              <div>

                <h3><span><i class="far fa-file-alt"></i></span>Documents and Policies</h3>

              </div>
              <?php if (mysqli_num_rows($result)) { ?>

              <table>
                <thead>
                  <tr>

                    <th>Name</th>
                    <th>Document</th>
                    <th>Description</th>
                    <th>Date</th>
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

                    <td><?=$rows['dc_name']?></td>
                    <td><?php echo $rows['dc_add']; ?></td>
                    <td><?php echo $rows['dc_desc']; ?></td>
                    <td><?php echo $rows['dc_date']; ?></td>

                    <td style="width: 10%;"><a href="dc_update.php?id=<?=$rows['id']?>" class="up-btn"><span><i class="far fa-file-alt"></i></span><b>Update</b></a>

                      <a href="dbs/dc_delete.php?id=<?=$rows['id']?>" class="rm-btn"><span><i class="far fa-file-alt"></i></span><b>Delete</b></a>

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
