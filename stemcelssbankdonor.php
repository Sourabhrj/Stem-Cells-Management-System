<!DOCTYPE HTML>

<html>
<head>

<!-- <link href="donorstyle.css" rel="stylesheet"/> -->
<link href="donorstyle.css" rel="stylesheet"/>
<link href="stemcellsbankdoneestyles.css" rel="stylesheet"/>
<link href="cstyles.css" rel="stylesheet"/>
<link href="scbdonee.css" rel="stylesheet"/>
<!-- <link href="menu.css" rel="stylesheet"/> -->


<div id="mySidenav" class="sidenav">
  <!-- <a href="indexscb.php" id="about">&nbsp; &nbsp;Stem Cells bank Information</a> -->
  <a href="index2.php" id="projects">&nbsp; &nbsp;Donor&nbsp; &nbsp; Information</a>
  <!-- <a href="indexdepe.php" id="contact">&nbsp; &nbsp;&nbsp; &nbsp;Dependent </a> -->
  <a href="indexscb.php" id="blog">&nbsp; &nbsp;SCB Information</a>
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
    <a href="index.php"></a>
        
        
        
 <div class="container">  
  <form id="contact2" action="" method="post" action="stemcelssbankdonor.php">
    <h3>&nbsp;&nbsp;&nbsp;&nbsp;Stem Cells Bank &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Information</h3>
    <h4> Enter the information here<h4> 
   
    <fieldset>
      <input placeholder="Stem Cells Bank Name" type="text" tabindex="1" name="SCB_Name" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Stem Cells Bank NO" type="text" tabindex="2" name="SCB_No" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" type="text" tabindex="3" name="Contact" required>
    </fieldset>
    <fieldset>
      <input placeholder="Location" type="text" tabindex="4" name="Location"  required>
    </fieldset>
    <fieldset>
    <fieldset>
      <input placeholder="Hospital ID" type="text" tabindex="4" name="H_ID"  required>
    </fieldset>
    <fieldset>
    <button name='login' onclick="location.href='donor.php'" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset> 
  </form>
        
        
        
        
    
       
<?php 

include_once("config.php");

if(isset($_POST['login'])) {
	$name = mysqli_real_escape_string($mysqli, $_POST['SCB_Name']);
	$scbno = mysqli_real_escape_string($mysqli, $_POST['SCB_No']);
    $contact = mysqli_real_escape_string($mysqli, $_POST['Contact']);
    $location = mysqli_real_escape_string($mysqli, $_POST['Location']);
    $hid = mysqli_real_escape_string($mysqli, $_POST['H_ID']);
					

		$result = mysqli_query($mysqli, "INSERT INTO stem_cells_bank(SCB_NAME, SCB_NO, CONTACT, LOCATION, H_ID)
		VALUES('$name','$scbno','$contact','$location','$hid')");
		
      
		// echo "<font color='green'>Data added successfully.";
		// echo "<br/><a href='index.php'>View Result</a>";
	
}
?>





    </body>
</html>