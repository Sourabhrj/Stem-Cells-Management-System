<html>
    <head>
        <title>Sign Up</title>
        <link href="signup1.css" rel="stylesheet">
        
        <!-- <link href="menu.css" rel="stylesheet"> -->
        <link href="cstyles.css" rel="stylesheet"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
         function toggleSignup(){
   document.getElementById("login-toggle").style.backgroundColor="#fff";
    document.getElementById("login-toggle").style.color="#222";
    document.getElementById("signup-toggle").style.backgroundColor="#57b846";
    document.getElementById("signup-toggle").style.color="#fff";
    document.getElementById("login-form").style.display="none";
    document.getElementById("signup-form").style.display="block";
}

function toggleLogin(){
    document.getElementById("login-toggle").style.backgroundColor="#57B846";
    document.getElementById("login-toggle").style.color="#fff";
    document.getElementById("signup-toggle").style.backgroundColor="#fff";
    document.getElementById("signup-toggle").style.color="#222";
    document.getElementById("signup-form").style.display="none";
    document.getElementById("login-form").style.display="block";
}

        </script>

        <!-- <div id="mySidenav" class="sidenav">
            <a href="#" id="about">&nbsp; &nbsp; About</a>
            <a href="#" id="projects">&nbsp; &nbsp;Support</a>
            <a href="#" id="contact">&nbsp; &nbsp;Contact</a>
            <a href="#" id="blog">&nbsp; &nbsp;Credits</a>
        </div> -->

</head>
<body>


<nav class='header-nav'>
  <ul>
    <li class=''>
      <a href='home.html'>
        Home
      </a>
    </li>
    <li class=''>
      <a href='donorinfo.php'>
        Donors
      </a>
    </li>
    <li class='active'>
      <a href='signup1.php'>
        Sign Up
      </a>
    </li>
    <li class=''>
      <a href='home.html'>
        Log_Out
      </a>
    </li>
    
    <div class='marker'></div>
  </ul>
</nav>
</div>



<div class="form-modal">
    
    <div class="form-toggle">
        <button id="login-toggle" onclick="toggleLogin()">Log In</button>
        <button id="signup-toggle" onclick=" toggleSignup()">Sign Up</button>
    </div>

    <div id="login-form">
        <form action="signup1.php" method="post">
            <input type="text" name="USERNAME" placeholder="Enter username" required/>
            <input type="password" name="PASSWORD" placeholder="Enter password" required/>
            <input type="text" name="h_id" placeholder="Enter Hospital ID" required/>
           <input class="btn login" type="submit"  name="login" value="Submit">

                    
            <!-- <button type="button" name="login" onclick="location.href='donor.php'" class="btn login">Login</button> -->
            <!-- <p><a href="javascript:void(0)">Forgotten account</a></p> -->
            <hr/>
        </form>
        <!-- <button type="button" name="login" onclick="location.href='donor.php'" class="btn login">Login</button> -->
        <!-- <button type="button" name="login"  class="btn login">Login</button> -->
    </div>


<?php

include("config.php");  

    if(isset($_POST['login'])) {
    $user = $_POST['USERNAME'];
    $psw = $_POST['PASSWORD'];
    $hid = $_POST['h_id']; 
                $result = mysqli_query($mysqli,"SELECT * FROM HOSPITAL WHERE USERNAME='$user' and PASSWORD='$psw' and H_ID='$hid'");
                
                if($row = mysqli_fetch_array($result))
                {
                    session_start();
                    echo "done";
            header("Location:donor.php");
                }
                else{
                    // echo "\n invalid login";
                    //  $message="Ivalid_Login_Details"
                    echo "<script> alert(' invalid login'); </script>";
                }

                }
?>







    <div id="signup-form">
        <form action="myproject.php" method="post">
        <input type="text" name="USERNAME" placeholder="Enter username"/>
            <input type="password" name="PASSWORD" placeholder="Enter password"/>
            <input type="text" name="h_id" placeholder="Enter Hospital ID"/>
            <input type="text" name="phone_number" placeholder="Enter Contact Number"/>
            <input type="text" name="h_name" placeholder="Enter Hospital Name"/>
            
            <input type="text" name="h_location" placeholder="Enter Hospital Loccation"/>
            
            
            <input type="text" name="DONOR_ID" placeholder="Enter Donor ID"/>
            <input type="text" name="DONEE_ID" placeholder="Enter Donee ID"/>

          <input class="btn login" type="submit"  name="h_register" value="Submit">


           
            <!-- <button type="button" onclick="location.href='donor.php'" name="h_register" class="btn login">Sign Up</button> -->
            <!-- <button type="button" name='h_register' onclick="location.href='donor.php'" class="btn login" > Sign Up</button> -->
            
            <!-- <button type="button" onclick="location.href='donor.php'" name="h_register" class="btn login">Sign Up</button> -->
            <hr/>
        </form>
        <!-- <input class="button" type="submit"  name="h_register" value="Submit"> -->
        <!-- <button type="button" onclick="location.href='donor.php'" name="h_register" class="btn login">Sign Up</button> -->
           
    </div>

</div>
   
</body>

</html>



// <?php

// include_once("config.php");

// if(isset($_POST['h_register'])) {
//         $username = mysqli_real_escape_string($mysqli, $_POST['USERNAME']);
//         $password = mysqli_real_escape_string($mysqli, $_POST['PASSWORD']);
//         $h_name = mysqli_real_escape_string($mysqli, $_POST['h_name']);
//         $h_id = mysqli_real_escape_string($mysqli, $_POST['h_id']);
//         $phone_number = mysqli_real_escape_string($mysqli, $_POST['phone_number']);
//         $h_location = mysqli_real_escape_string($mysqli, $_POST['h_location']);
//         $donorid = mysqli_real_escape_string($mysqli, $_POST['DONOR_ID']);
//         $doneeid = mysqli_real_escape_string($mysqli, $_POST['DONEE_ID']);
		
			

// 		$result = mysqli_query($mysqli, "INSERT INTO HOSPITAL(USERNAME, PASSWORD, H_NAME,H_ID,CONTACT,LOCATION,DONOR_ID,DONEE_ID) 
// 		VALUES('$username','$password','$h_name','$h_id','$phone_number','$h_location','$donorid','$doneeid')");
		
//     header('location:donor.php');
// 		echo "<font color='white'>Data added successfully.";
// 		// echo "<br/><a href='index.php'>View Result</a>";
	
// }
// ?>

 