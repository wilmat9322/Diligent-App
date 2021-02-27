<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register: Step 3</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon">

  </head>
  <body>

    <style>
      <?php include 'CSS/register3.css';?>
    </style>
    <!----- Comienza el LoginBox ----->
    <div>
        <img src="images/Fondo.jpg" class="Fondo"> <!-- Fondo del loginbox -->
      <div class="login-box">
        <!-- Caja de Login -->

        <!----- Información del usuario ----->
        <form>
          <p><b>Step 3:</b> Input your personal information to register.</p>

          <p>First Name</p>
          <input type="text" name="username" placeholder="Enter your first name">

          <p>Last Name</p>
          <input type="text" name="username" placeholder="Enter your last name">


          <p class="selectors-p"> Birthday</p>
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

          <p class="selectors-p"> Gender</p>
          <select class="selectors">
            <option value="0">Select Gender:</option>
            <option value="1">Male</option>
            <option value="2">Female</option>
            <option value="2">Other</option>
          </select>


          <p>Age</p>
          <input type="text" name="username" placeholder="Enter your age">

          <p>Race</p>
          <input type="text" name="username" placeholder="Enter your race">

          <p>Citizenship</p>
          <input type="text" name="username" placeholder="Enter your citizenship">

          <p>Highschool
          <input type="text" name="username" placeholder="Enter the highschool where you studied">

          <p>Highschool Graduation</p>
          <input type="text" name="username" placeholder="Enter your highschool graduation date">

          <p class="selectors-p"> Are your currently studying?</p>
          <select class="selectors">
            <option value="0">Choose:</option>
            <option value="1">Yes</option>
            <option value="2">No</option>
          </select>

          <p>Enter the degree to obtain</p>
          <input type="text" name="username" placeholder="Enter your degree to obtain">

          <p>Expected Graduation</p>
          <input type="text" name="username" placeholder="Enter expected graduation date">


          <input type="button" name="submit" value="Go back" onclick="location.href='register2.php';" style="margin-left: 130px;">
          <input type="button" name="submit" value="Continue" onclick="location.href='register4.php';">
        </form>
      </div>
</div>
  </body>
</html>
