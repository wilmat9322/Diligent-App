<?php include 'dbs/dc_update.php'; ?>
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

  <title>Update Document</title>

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

    <h3><b>Complete the following information to update a Document</b></h3>

  </div>

    <form action="dbs/dc_update.php" method="post" enctype="multipart/form-data">


      <?php if (isset($_GET['error'])) { ?>

      <?php echo $_GET['error']; ?>

      <?php } ?>

      <div class="update">

      <label for="dc_name">Document Name</label>
      <input type="text" id="dc_name" name="dc_name" value="<?=$row['dc_name'] ?>">

      <label for="dc_desc">Brief Description of the Document</label>
      <input rows="2" cols="50" type="text" id="dc_desc" name="dc_desc" value="<?=$row['dc_desc'] ?>"/>


      <label for="dc_date">Date</b></label>
      <input type="date" id="dc_date" name="dc_date" value="<?=$row['dc_date'] ?>">

      <label class="labcol" for="file"><b>Select a File to Upload</b></label>
      <input type="file" id="file" name="file" /required>

    </div>

      <input type="text" name="id" value="<?=$row['id']?>" hidden>

      <center>
      <a href="dc_admin.php" class="cancel-btn" type="button" class="cancelbtn">Cancel</a>
      <button class="add-btn" type="submit" name="update">Update</button>
    </center>

    </form>
</body>
</html>
