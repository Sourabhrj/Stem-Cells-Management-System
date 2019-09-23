<!DOCTYPE html>
<html>

<head>

  <title>
    Donor
    Donee</title>

  <div id="mySidenav" class="sidenav">
    <!-- <a href="indexscb.php" id="about">&nbsp; &nbsp;Stem Cells bank Information</a> -->
    <a href="index2.php" id="projects">&nbsp; &nbsp;Donee&nbsp; &nbsp; Information</a>
    <!-- <a href="indexdepe.php" id="contact">&nbsp; &nbsp;&nbsp; &nbsp;Dependent </a> -->
    <a href="index.php" id="blog">&nbsp; &nbsp; &nbsp;Donor&nbsp; &nbsp; Information</a>
  </div>


  <div>
    <a href="index.php"></a>
    <!-- <link href="reset.css" rel="stylesheet"/> -->
    <link href="donorstyle.css" rel="stylesheet" />

    <link href="cstyles.css" rel="stylesheet" />

    <link href="menu.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="loginstyle.css">
    <link type="text/css" rel="stylesheet" href="normalize.css" />


    <nav class='header-nav'>
      <ul>
        <li>
          <a href='home.html'>
            Home
          </a>
        </li>
        <li>
          <a href=''>
            Donors
          </a>
        </li>
        <li class='active'>
          <a href='try.php'>
            Sign Up
          </a>
        </li>

        <li>
          <a href='home.html'>
            Log_Out
          </a>
        </li>
        <div class='marker'></div>
      </ul>
    </nav>
  </div>
  <style>
    body{
    background-image: url("assets/img26.jpg");
   
	height: 100%;
  background-position: absolute;
  background-repeat: no-repeat;
  background-size: cover;
}
input[type=text] {
  
  /* padding: 12px 20px;
  margin: 8px 0; */
  box-sizing: border-box;
  border: 2px solid beige;
  border-radius: 4px;
}
.button {
  box-shadow: 0 1px 2px 0 rgba(60,64,67,0.302), 0 1px 3px 1px rgba(60,64,67,0.149);
  border-radius: 10px;
  border-radius: 10px;
    background-color: #fff;
    padding: 10px;
    padding-right: 26px;
    
}
.button1{
  box-shadow: 0 1px 2px 0 rgba(60,64,67,0.302), 0 1px 3px 1px rgba(60,64,67,0.149);
  border-radius: 10px;
  border-radius: 10px;
    background-color: #fff;
    padding: 10px;
    padding-right: 26px;
}

.go-next{
  margin:10px 0;
}

.form1 input{
  margin:10px 0;
  display:block;
}

.form2 input{
  margin:10px 0;
  display:block;
}

.donor-donee-wrap{
  display:flex;
  justify-content:space-between;
}
</style>

</head>

<body>
  <br>

<!-- <section class="donor-donee-wrap"> -->
  <div class="form1">
    <h2 style="color:white;">DONOR<br> Information</h2>
    <form action="donor.php" method="post">


      <input type="text" placeholder="Enter Name" name="Name" maxlength="25">


      <input type="text" placeholder="Enter Donor ID" name="Donor_ID" maxlengt="10">


      <input type="date" name="DOB" placeholder="Date of Birth">


      <input type="text" placeholder="Enter Sex" name="Sex" maxlength="6">


      <input type="text" placeholder="Enter Contact number" name="Contact" maxlength="12">

      <h4 style="color:white;">Address</h4>

      <input type="text" placeholder="Enter Door No" name="Door_No" maxlength="5">


      <input type="text" name="Street" placeholder="Enter Street" maxlength="20">


      <input type="text" name="City" placeholder="Enter City" maxlength="20">


      <input type="text" name="PIN" placeholder="Enter PIN" maxlength="6">


      <input class="button" type="submit" name="login" value="Submit">
    </form>

    <!-- <input class="button" type="submit"  name="login" value="Submit"> -->

    <button class="button go-next" style="color:black;" name='login' onclick="location.href='stemcelssbankdonor.php'"> go
      next
    </button>

  </div>

  <!-- This code for connecting DONOR table> -->
  <?php
  include("config.php");  

     if(isset($_POST['login'])) {
    // $name = $_POST['Name'];
    // $donor_id = $_POST['Donor_ID'];
    // $dob = $_POST['DOB'];
    // $sex = $_POST['Sex'];
    // $contact = $_POST['Contact'];
    // $doorno = $_POST['Door_No'];
    // $street = $_POST['Street'];
    // $city = $_POST['City'];
    // $pin = $_POST['PIN'];

      $name = mysqli_real_escape_string($mysqli, $_POST['Name']);
      $donor_id = mysqli_real_escape_string($mysqli, $_POST['Donor_ID']);
      $dob = mysqli_real_escape_string($mysqli, $_POST['DOB']);
      $sex = mysqli_real_escape_string($mysqli, $_POST['Sex']);
      $contact = mysqli_real_escape_string($mysqli, $_POST['Contact']);
      $doorno = mysqli_real_escape_string($mysqli, $_POST['Door_No']);
      $street = mysqli_real_escape_string($mysqli, $_POST['Street']);
      $city = mysqli_real_escape_string($mysqli, $_POST['City']);
      $pin = mysqli_real_escape_string($mysqli, $_POST['PIN']);

    $result = mysqli_query($mysqli, "INSERT INTO DONOR(NAME, DONOR_ID, DOB, SEX, CONTACT, DOOR_NO, STREET, CITY, PIN) 
    VALUES('$name','$donor_id ','$dob','$sex','$contact','$doorno','$street','$city','$pin')");
    // header('Location:stemcellsbank.php');
    // echo "<font color='blue'>Data added successfully.";
		// echo "<br/><a href='index.php'>View Result</a>";


    }
		
  ?>


  <div class="form2">
    <br><br>
    <h2 style="color:white;"><br><br><br> DONEE Information</h2>
    <table align="right">
    <form action="donor.php" method="post">


      <input type="text" placeholder="Enter Name" name="Name" maxlength="25" required>


      <input type="text" placeholder="Enter Donee ID" name="Donee_ID" required>


      <input type="date" name="DOB" required>


      <input type="text" placeholder="Enter Sex" name="Sex" maxlength="6" required>


      <input type="text" placeholder="Enter Contact" name="Contact" maxlength="12" required>

      <h4 style="color:white;">Address</h4>

      <input type="text" placeholder="Enter Door No" name="Door_No" maxlength="5" required>


      <input type="text" placeholder="Enter Street" name="Street" maxlength="20" required>


      <input type="text" name="City" placeholder="Enter City" maxlength="20" required>


      <input type="text" name="PIN" placeholder="Enter PIN" maxlength="6" required>


      <input class="button" type="submit" name="Submit1" value="Submit">
    </form>
    </table>

    <button class="button go-next" style="color:black;" name='Submit1' onclick="location.href='dependent.php'">go next</button>
  </div>
  </div>




  <!-- This code for connecting DONEE table> -->
  <div>
    <a href="index2.php"></a>
    <?php

  
    include("config.php");  
  

    if(isset($_POST['Submit1'])) {
   

    
    $name = mysqli_real_escape_string($mysqli, $_POST['Name']);
    $donee_id = mysqli_real_escape_string($mysqli, $_POST['Donee_ID']);
    $dob = mysqli_real_escape_string($mysqli, $_POST['DOB']);
    $sex = mysqli_real_escape_string($mysqli, $_POST['Sex']);
    $contact = mysqli_real_escape_string($mysqli, $_POST['Contact']);
    $doorno = mysqli_real_escape_string($mysqli, $_POST['Door_No']);
    $street = mysqli_real_escape_string($mysqli, $_POST['Street']);
    $city = mysqli_real_escape_string($mysqli, $_POST['City']);
    $pin = mysqli_real_escape_string($mysqli, $_POST['PIN']);


    $result = mysqli_query($mysqli, "INSERT INTO DONEE(NAME, DONEE_ID, DOB, SEX, CONTACT, DOOR_NO, STREET, CITY, PIN) 
    VALUES('$name','$donee_id','$dob','$sex','$contact','$doorno','$street','$city','$pin')");
    header('Location:dependent.php');



    }
		
    ?>
  </div>
  <!-- </section> -->
</body>

</html>