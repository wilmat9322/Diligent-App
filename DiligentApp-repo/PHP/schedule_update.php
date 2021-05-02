<?php include 'dbs/schedule_update.php'; ?>
<!----- Programa hecho por: William S. Matos Díaz
     Número de estudiante: B00539322
     Curso: COMP 4400 Desarrollo e Implementación de Sistemas
     Profesor: Ing. Rafael Muñoz ----->

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

  <title>Edit Schedule</title>

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

    <h3><b>Complete the following information to edit a Schedule</b></h3>

  </div>

    <form action="dbs/schedule_update.php" method="post">


      <?php if (isset($_GET['error'])) { ?>

      <?php echo $_GET['error']; ?>

      <?php } ?>

      <div class="update">

      <label for="name"><b>Employee name</label></center>
      <input type="text" id="name" name="name" value="<?=$row['name'] ?>">

      <label for="monday">Monday</label>
      <center><input style="width: 10.8%; display: inline-block;" type="date" id="monday" name="monday" value="<?=$row['monday'] ?>">
      <input style="width: 8.9%; display: inline-block;" type="time" id="from_monday" name="from_monday" value="<?=$row['from_monday'] ?>">
    - <input style="width: 8.9%; display: inline-block;" type="time" id="to_monday" name="to_monday" value="<?=$row['to_monday'] ?>"></center>

      <label for="tuesday">Tuesday</label>
      <center><input style="width: 10.8%; display: inline-block;" type="date" id="tuesday" name="tuesday" value="<?=$row['tuesday'] ?>">
      <input style="width: 8.9%; display: inline-block;"  type="time" id="from_tuesday" name="from_tuesday" value="<?=$row['from_tuesday'] ?>">
    - <input style="width: 8.9%; display: inline-block;"  type="time" id="to_tuesday" name="to_tuesday" value="<?=$row['to_tuesday'] ?>"></center>

      <label for="wednesday">Wednesday</label>
      <center><input style="width: 10.8%; display: inline-block;" type="date" id="wednesday" name="wednesday" value="<?=$row['wednesday'] ?>">
      <input style="width: 8.9%; display: inline-block;" type="time" id="from_wednesday" name="from_wednesday" value="<?=$row['from_wednesday'] ?>">
    - <input style="width: 8.9%; display: inline-block;" type="time" id="to_wednesday" name="to_wednesday" value="<?=$row['to_wednesday'] ?>"></center>

      <label for="thursday">Thursday</label>
      <center><input style="width: 10.8%; display: inline-block;" type="date" id="thursday" name="thursday" value="<?=$row['thursday'] ?>">
      <input style="width: 8.9%; display: inline-block;" type="time" id="from_thursday" name="from_thursday" value="<?=$row['from_thursday'] ?>">
    - <input style="width: 8.9%; display: inline-block;" type="time" id="to_thursday" name="to_thursday" value="<?=$row['to_thursday'] ?>"></center>

      <label for="friday">Friday</label>
      <center><input style="width: 10.8%; display: inline-block;" type="date" id="friday" name="friday" value="<?=$row['friday'] ?>">
      <input style="width: 8.9%; display: inline-block;" type="time" id="from_friday" name="from_friday" value="<?=$row['from_friday'] ?>">
    - <input style="width: 8.9%; display: inline-block;" type="time" id="to_friday" name="to_friday" value="<?=$row['to_friday'] ?>"></center>

      <label for="saturday">Saturday</label>
      <center><input style="width: 10.8%; display: inline-block;" type="date" id="saturday" name="saturday" value="<?=$row['saturday'] ?>">
      <input style="width: 8.9%; display: inline-block;" type="time" id="from_saturday" name="from_saturday" value="<?=$row['from_saturday'] ?>">
    - <input style="width: 8.9%; display: inline-block;" type="time" id="to_saturday" name="to_saturday" value="<?=$row['to_saturday'] ?>"></center>

      <label for="sunday">Sunday</label>
      <center><input style="width: 10.8%; display: inline-block;" type="date" id="sunday" name="sunday" value="<?=$row['sunday'] ?>">
      <input style="width: 8.9%; display: inline-block;" type="time" id="from_sunday" name="from_sunday" value="<?=$row['from_sunday'] ?>">
    - <input style="width: 8.9%; display: inline-block;" type="time" id="to_sunday" name="to_sunday" value="<?=$row['to_sunday'] ?>"></center>

    </div>

      <input type="text" name="id" value="<?=$row['id']?>" hidden>

      <center>
      <a href="schedules_admin.php" class="cancel-btn" type="button" class="cancelbtn">Cancel</a>
      <button class="add-btn" type="submit" name="update"><b>Update</b></button>
    </center>

    </form>
</body>

</html>
