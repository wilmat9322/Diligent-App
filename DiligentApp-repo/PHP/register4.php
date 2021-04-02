<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register: Step 4 of 7</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon">

  </head>
  <body>

    <style>
      <?php include 'CSS/register4.css';?>
    </style>
    <!----- Comienza el LoginBox ----->
    <div>
        <img src="images/Fondo.jpg" class="Fondo"> <!-- Fondo del loginbox -->
      <div class="login-box">
        <!-- Caja de Login -->

        <!----- Información del usuario ----->
        <form>

          <p><b>Step 4 of 7:</b> Choose three security questions that you can easily remember. This will help us verify your identity in the future.</p>
          <p class="selectors-p"> Question 1:</p>
          <select class="selectors">
            <option value="0">Choose:</option>
            <option value="1">What was the model of your first car?</option>
            <option value="2">What was the name of your first pet?</option>
            <option value="3">What was your nickname as a child?</option>
          </select>

            <input type="text" name="username" placeholder="Enter Company Code">

            <p class="selectors-p"> Question 2: </p>
            <select class="selectors">
              <option value="0">Choose:</option>
              <option value="1">What was your favorite place to visit as a kid?</option>
              <option value="2">What is your favorite movie?</option>
              <option value="3">What is your grandmother's first name?</option>
            </select>

            <input type="text" name="username" placeholder="Enter Company Code">

              <p class="selectors-p"> Question 3:</p>
              <select class="selectors">
                <option value="0">Choose:</option>
                <option value="1">What is your favorite music genre?</option>
                <option value="2">Who was your first love?</option>
                <option value="3">What is the name of your best friend?</option>
              </select>

              <input type="text" name="username" placeholder="Enter Company Code">

              <input style="margin-left: 135px; background-color:#ec4646; " type="button" name="submit" value="Go back" onclick="location.href='register3.php';">
              <input type="button" name="submit" value="Continue" onclick="location.href='create_password.php';">

        </form>
      </div>

  </body>
</html>
