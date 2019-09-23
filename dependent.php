<!DOCTYPE HTML>
<html>
    <head>
    <link href="donorstyle.css" rel="stylesheet"/>
    <link href="dependentstyles.css" rel="stylesheet"/>
    <link href="cstyles.css" rel="stylesheet"/>
    <link href="depe.css" rel="stylesheet"/>
<!-- <link href="menu.css" rel="stylesheet"/> -->
    <!-- <link href="menu.css" rel="stylesheet"/> -->



<div id="mySidenav" class="sidenav">
  <!-- <a href="indexscb.php" id="about">&nbsp; &nbsp;Stem Cells bank Information</a> -->
  <a href="index2.php" id="projects">&nbsp; &nbsp;Donee&nbsp; &nbsp; Information</a>
  <a href="indexdepe.php" id="contact">&nbsp; &nbsp;&nbsp; &nbsp;Dependent </a>
  <!-- <a href="index.php" id="blog">&nbsp; &nbsp; &nbsp;Donor&nbsp; &nbsp; Information</a> -->
</div>

  <nav class='header-nav'>
  <ul>
    <li class='active'>
      <a href='home.html'>
        Home
      </a>
    </li>
    <li>
      <a href='donorinfo.php'>
        Donors
      </a>
    </li>
    <li>
      <a href='signup1.php'>
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


</head>
    <body>
    <div class="container">  
  <form id="contact2"  method="post" action="dependent.php">
    <h3>Dependent information</h3>
    <h4> Enter the dependent information here<h4> 
   
    <fieldset>
      <input placeholder="Dependent Name" type="text" tabindex="1" name="Name" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Relationship with Donee" type="text" tabindex="2" name="Relationship" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" tabindex="3" name="Contact" required>
    </fieldset>
    <fieldset>
      <input placeholder="Donee_ID" type="text" tabindex="4" name="Donee_ID"  required>
    </fieldset>
    <fieldset>
     
    <fieldset>
    <button name="submit" type="submit" onclick="location.href='stemcellsbankdonee.php'" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset> 
  </form>
 
  
</div>





        <!-- <h2>DEPENDENT Information</h2>
        <form action="dependent.php" method="post">
            Name:
            <input type="text" name="Name" maxlength="25">
            <br><br>
            Relationship:
            <input type="text" name="Relationship" maxlength="25">
            <br><br>
            Contact:
            <input type="text" name="Contact" maxlength="12">
            <br><br> 
            Donee ID:
            <input type="text" name=Donee_ID maxlength="10">
            <br><br> 
          <div>
                <button name=submit onclick="location.href='stemcellsbank.php'"> Submit </button>
              
          </div>
        </form>
        <button name=submit onclick="location.href='stemcellsbankdonee.php'"> Submit </button> -->
    
<?php

include("config.php");  

     if(isset($_POST['submit'])) {
   

      $name = mysqli_real_escape_string($mysqli, $_POST['Name']);
      $relationship = mysqli_real_escape_string($mysqli, $_POST['Relationship']);
      $contact = mysqli_real_escape_string($mysqli, $_POST['Contact']);
      $doneeid= mysqli_real_escape_string($mysqli, $_POST['Donee_ID']);
      

    $result = mysqli_query($mysqli, "INSERT INTO DEPENDENT(DE_NAME, CONTACT, RELATIONSHIP, DONEE_ID) 
    VALUES('$name','$contact ','$relationship ','$doneeid')");
    //header('Location:/stemcellsbank/stemcellsbank.php');
      
		// echo "<font color='green'>Data added successfully.";
    // echo "<br/><a href='indexdepe.php'>View Result</a>";

    }
?>

    </body>
    
</html>
