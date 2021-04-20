<?php include 'dbs/update.php'; ?>
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

  <title>Update Employee Profile</title>

  <!----- Fonts y Símbolos que utilicé para la aplicación ----->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="shortcut icon" type="image/png" href="images/favicon">
  <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:ital,wght@1,300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

  <style>
    <?php include 'CSS/update.css';
    ?>
  </style>

  <div class="txtcontainer">

    <h3><b>Complete the following information to update an Employee</b></h3>

  </div>

    <form action="dbs/update.php" method="post">


      <?php if (isset($_GET['error'])) { ?>

      <?php echo $_GET['error']; ?>

      <?php } ?>

      <div class="update">


      <label for="comp_code"><b>Company Code</label></center>
      <input type="text" id="comp_code" name="comp_code" value="<?=$row['comp_code'] ?>">


      <label for="name">Employee's Name</label>
      <input type="text" id="name" name="name" value="<?=$row['name'] ?>">


      <label for="user_name">Username</label>
      <input type="text" id="user_name" name="user_name" value="<?=$row['user_name'] ?>">


      <label for="position">Employee's Position</label>
      <input type="text" id="position" name="position" value="<?=$row['position'] ?>">


      <label for="type_employee">Type of Employee</label>
      <input type="text" id="type_employee" name="type_employee" value="<?=$row['type_employee'] ?>">


      <label for="work_time">Working Since</label>
      <input type="text" id="work_time" name="work_time" value="<?=$row['work_time'] ?>">


      <label for="hours_work">Hours Worked</label>
      <input type="text" id="hours_work" name="hours_work" value="<?=$row['hours_work'] ?>">


      <label for="earn_rate">Earn Rate</label>
      <input type="text" id="earn_rate" name="earn_rate" value="<?=$row['earn_rate'] ?>">


      <label for="password">Password</label>
      <input type="password" id="password" name="password" value="<?=$row['password'] ?>">


      <label for="re_password">Repeat Password</b></label>
      <input type="password" id="re_password" name="re_password" value="<?=$row['password'] ?>">

    </div>

      <input type="text" name="id" value="<?=$row['id']?>" hidden>


      <center>
      <a href="manage_admin.php" class="cancel-btn" type="button" class="cancelbtn">Cancel</a>
      <button class="add-btn" type="submit" name="update">Update</button>
    </center>

    </form>
</body>

</html>
