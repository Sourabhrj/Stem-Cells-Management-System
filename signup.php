<!DOCTYPE html>
<html>
    <head>



        <!-- <link href="C:\xampp\htdocs\index2\menu.css" rel="stylesheet">  -->
        
<style>
body {font-family: Arial, Helvetica, sans-serif;
    background-image: linear-gradient(120deg, #84fab0 0%, #8fd3f4 100%);}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 300%;
    padding: 19px;
    margin: 6px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
    border-radius: 10px;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
    background-color: #fff;
    border-radius: 10px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
.table {
    margin-left: 160px;
    margin-bottom: 50px;

}
td {
    font-size: 20px;
}
.button {
    background-color: rgb(249, 253, 249); /* Green */
    border: none;
    color: black;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    width: 200px;
    box-shadow: 0 4px 4px 0 rgba(60,64,67,0.302), 0 1px 3px 1px rgba(60,64,67,0.149);
    border-radius: 10px;
}
</style>







            
    </head>

<body>







<!-- <div class="container landing">
<div class="row">
<div class="col s12 m6 offset-m3">
  <div class="row">
    <div class="signup-box">
      <h1 class="app-title">Sign UP</h1>
      <form class="signin hide animated bounceIn">
        <div class="section">
          <!-- <a class="btn btn-fb hide-on-small-only">Log in with Facebook</a>
          <a class="btn btn-fb hide-on-med-and-up"><i class="fa fa-facebook-official"></i> Log in</a> -->
        <!-- </div>
        <div class="divider"></div>
        <div class="section">
          <input type="text" name="username" placeholder="Username" />
          <input type="password" name="password" placeholder="Password" />
          <button class="btn waves-effect waves-light btn-signup" type="submit">Log in</button>
        </div> -->
      <!-- </form>
      <form class="signup animated bounceIn" action="signup.php" method="post">
        <!-- <h2>Sign up to watch your friends pictures ... </h2> -->
        <!-- <div class="section"> -->
          <!-- <a class="btn btn-fb hide-on-small-only">Sign in with Facebook</a>
          <a class="btn btn-fb hide-on-med-and-up"><i class="fa fa-facebook-official"></i> Sign in </a> -->
        <!-- </div>
        <div class="divider"></div>
        <div class="section">
          <input type="text" name="h_name" placeholder="Hospital Namr" />
          <input type="text" name="h_id" placeholder="Hospital ID" />
          <input type="text" name="phone_number" placeholder="Contact Number" />
          <input type="password" name="h_location" placeholder="Hospital Location" />
          <input type="text" name="DONOR_ID" placeholder="Donor ID" />
          <input type="password" name="DONEE_ID" placeholder="Donee ID" /> -->

          <!-- <button class="btn waves-effect waves-light btn-signup" name="h_register" type="submit">Sign up</button>
        </div>
      </form> -->
    <!-- </div>
  </div>
  <div class="row">
    <div class="login-box sign-in-box">
      Already have account? <a onclick="toggleSignup()" href="#"> Sign in</a>
    </div> 
    <div class="login-box sign-up-box hide">
      Don't have an account? <a onclick="toggleSignup()" href="#"> Sign up</a>
    </div>
  </div>
  </div>
</div>
</div>
</div> -->











   
<div class="container" style="margin-left: 50px;">
<form action="signup.php" method="post" name="register">
       
            <div class="table">
        <table width="40%" border="0">
             <tr> 
                    <td>UserName</td>
                            <td><input type="text" name="username" placeholder="Enter username"></td>
            </tr>
                                    
            <tr> 
                    <td>Password</td>
                         <td><input type="password" name="password" placeholder="Enter password"></td>
            </tr>
                          
             <tr>   
                <td>Hospital Name</td>
                <td><input type="text" name="h_name" placeholder="Enter Hospital Name"></td>
            </tr>
                        
            <tr> 
                <td>Hospital Id</td>
                <td><input type="text" name="h_id" placeholder="Enter Hospital ID"></td>
            </tr>
            <tr> 
                <td>Contact Number</td>
                <td><input type="text" name="phone_number" placeholder="Enter Conatct Number"></td>
            </tr>
            <tr> 
                <td>Hospital Location</td>
                <td><input type="text" name="h_location" placeholder="Enter Location"></td>
            </tr>
            <tr> 
                <td>DONOR ID</td>
                <td><input type="text" name="DONOR_ID" placeholder="Enter DONOR_ID"></td>
            </tr>
            <tr> 
                <td>DONEE_ID</td>
                <td><input type="text" name="DONEE_ID" placeholder="Enter DONEE_ID"></td>
            </tr>
            <tr> 
                <td></td>
                 <!-- <td><input class="button" onclick="location.href='donor.php'" type="submit" name="h_register" value="Submit"></td>
                 <td><input class="button" onclick="location.href='try.php'" type="submit" name="submit" value="close"></td>  -->
            </tr> 
        </table>
    </div>

    
    </form>
    <input class="button" onclick="location.href='donor.php'" type="submit" name="h_register" value="Submit">
</div> 

<?php

include_once("config.php");

if(isset($_POST['h_register'])) {
	$username = mysqli_real_escape_string($mysqli, $_POST['username']);
	$password = mysqli_real_escape_string($mysqli, $_POST['password']);
    $h_name = mysqli_real_escape_string($mysqli, $_POST['h_name']);
	$h_id = mysqli_real_escape_string($mysqli, $_POST['h_id']);
	$phone_number = mysqli_real_escape_string($mysqli, $_POST['phone_number']);
    $h_location = mysqli_real_escape_string($mysqli, $_POST['h_location']);
    $donorid = mysqli_real_escape_string($mysqli, $_POST['DONOR_ID']);
	$doneeid = mysqli_real_escape_string($mysqli, $_POST['DONEE_ID']);
		

	// if( empty('$username') || empty('$password') || empty('$h_id') || empty('$h_name') empty('$phone_number') || empty('$h_location')) {

	// 	if(empty($username)) {
	// 		echo "<font color='red'>Name field is empty.</font><br/>";
	// 	}
		 		
	// 	if(empty($password)) {
	// 		echo "<font color='red'>Name field is empty.</font><br/>";
	// 	}
	// 	if(empty($h_name)) {
	// 		echo "<font color='red'>Name field is empty.</font><br/>";
	// 	}
		 		
	// 	if(empty($h_id)) {
	// 		echo "<font color='red'>Name field is empty.</font><br/>";
	// 	}
		
	// 	if(empty($phone_number)) {
	// 		echo "<font color='red'>phone_number field is empty.</font><br/>";
	// 	}
		
	// 	if(empty($h_location)) {
	// 		echo "<font color='red'>h_location field is empty.</font><br/>";
	// 	}

	// 	echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	// } else { 
		
			

		$result = mysqli_query($mysqli, "INSERT INTO hospital(USERNAME, PASSWORD, H_NAME,H_ID,CONTACT,LOCATION,DONOR_ID,DONEE_ID) 
		VALUES('$username','$password','$h_name','$h_id','$phone_number','$h_location','$donorid','$doneeid')");
		
       header('location:donor.php');
		echo "<font color='green'>Data added successfully.";
		// echo "<br/><a href='index.php'>View Result</a>";
	
}
?>


</body>
</html>
