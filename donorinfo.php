<?php

include("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM DONOR ORDER BY DONOR_ID DESC"); 
?>

<html>
<head>	
<link href="cstyles.css" rel="stylesheet"/>
    <title>Donor</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link href="reset.css" rel="stylesheet"/>
    <link href="cstyles.css" rel="stylesheet"/>
	<link href="menu.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">  <link type="text/css" rel="stylesheet" href="normalize.css" /> 
	<link href="style.css" rel="stylesheet"/>
	

<nav class='header-nav'>
  <ul>
    <li class=''>
      <a href='home.html'>
        Home
      </a>
    </li>
    <li class='active'>
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
  <style>
      body {
          background-image: url("assets/img13.jpg");
      }
</style>
</head>

<body>

<div class="container">
	<table width='50%'height='15%' border='0' class="table table-hover">

	<tr bgcolor='skyblue'>
                
		 <td>DONOR_Id</td>
    	  <!-- <td>Name</td> -->
		<td>DOB</td>
		<td>Sex</td>
		<!-- <td>Contact</td> -->
		<!-- <td>Door_NO</td> -->
		<!-- <td>Street</td> -->
		<td>City</td>
		<!-- <td>PIN</td> -->


		
		
	</tr>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
                echo "<td>".$res['DONOR_ID']."</td>";
		// echo "<td bgcolor=''>".$res['NAMES']."</td>";
		echo "<td>".$res['DOB']."</td>";
		echo "<td>".$res['SEX']."</td>";
		
	
		// echo "<td>".$res['CONTACT']."</td>";
		
		// echo "<td>".$res['DOOR_NO']."</td>";
		// echo "<td>".$res['STREET']."</td>";
		
		echo "<td>".$res['CITY']."</td>";
		// echo "<td>".$res['PIN']."</td>";
		
// echo "<td bgcolor='green'><a href=\"edit.php?DONOR_ID=$res[DONOR_ID]\"><font color='white'>Edit</a>";
//  echo"<td bgcolor='red'> <a href=\"delete.php?DONOR_ID=$res[DONOR_ID]\" onClick=\"return confirm('Are you sure you want to delete?')\"><font color='white'>Delete</a></td>";        
	}
	?>
    </table>
</div>
</body>
</html>
