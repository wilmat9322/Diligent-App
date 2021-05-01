<?php include 'dbs/payrolls_update.php'; ?>
<!----- Programa hecho por: William S. Matos Díaz
     Número de estudiante: B00539322
     Curso: COMP 4400 Desarrollo e Implementación de Sistemas
     Profesor: Ing. Rafael Muñoz ----->

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

  <title>Edit Payroll Information</title>

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

    <h3><b>Complete the following information to edit a Payroll</b></h3>

  </div>

    <form action="dbs/payrolls_update.php" method="post">


      <?php if (isset($_GET['error'])) { ?>

      <?php echo $_GET['error']; ?>

      <?php } ?>

      <div class="update">


      <label for="name">Employee name<b></label></center>
      <input type="text" id="name" name="name" value="<?=$row['name'] ?>">


      <label for="user_name">Employee Code</label>
      <input type="text" id="user_name" name="user_name" value="<?=$row['user_name'] ?>">

      <label for="earn_rate">Select the Earning Rate for this Employee</label>
      <select id="earn_rate" name="earn_rate">

        <option><?=$row['earn_rate'] ?></option>
        <option></option></option>
        <option> $8.75</option>
        <option> $18.75</option>

        </select>

      <label for="=gross">Gross Earnings</label>
      <input type="text" id="gross" name="gross" value="<?=$row['gross'] ?>">


      <label for="dedu">Deductions</label>
      <input type="text" id="dedu" name="dedu" value="<?=$row['dedu'] ?>">


      <label for="net_pay">Net Pay</label>
      <input type="text" id="net_pay" name="net_pay" value="<?=$row['net_pay'] ?>">


      <label for="date_pay">Date</label>
      <input type="date" id="date_pay" name="date_pay" value="<?=$row['date_pay'] ?>">

    </div>

      <input type="text" name="id" value="<?=$row['id']?>" hidden>

      <center>
      <a href="payrolls_admin.php" class="cancel-btn" type="button" class="cancelbtn">Cancel</a>
      <button class="add-btn" type="submit" name="update">Update</button>
    </center>

    </form>
</body>

</html>
