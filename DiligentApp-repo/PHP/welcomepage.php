<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome to DiligentApp!</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

  </head>
  <body>

    <style>
    <?php include 'CSS/home.css'; ?>
    </style>

      <!--Aquí empieza el header de la aplicación-->
      <header>
        <div>
          <a href="#" class="logout">Logout</a>
          <a href="#" class="show_profile">My profile</a>
          <img src="images/Hombre.png" class="profile_image" alt"">
          <center>
          <img src="" class="Logo-Supermercados" alt="" width="20px" height="20px">
          </center>
        </div>
      </header>
      <!--Aquí termina el header-->

      <!-- Aquí empieza el menu-->
        <div class="menu-slide">
          <center>
          <img src="AppLogo3.png" class="Logo-DiligentApp" alt=""> <!-- **Nota** Quiero crear un Div para que el logo del menu y
                                                                        los elementos del menu tengan background colors diferentes -->
          </center>
          <center>
          <h2>Administrator</h2>
        </center>
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
        </div>
      <!--Aquí termina el menu-->

  </body>
</html>
