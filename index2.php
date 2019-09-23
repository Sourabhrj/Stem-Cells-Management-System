<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

	<link href="reset.css" rel="stylesheet"/>	
    <link href="cstyles.css" rel="stylesheet"/>
	<link href="menu.css" rel="stylesheet"/>

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
<style>
      body {
          background-image: url("assets/img13.jpg");
      }
</style>

	<?php

include("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM DONEE ORDER BY DONEE_ID DESC"); 
?>

<html>
<head>	
<link href="cstyles.css" rel="stylesheet"/>
	<title>Donee</title>
</head>

<div class="container">
<body>
<a href="donor.php">Add New Data</a><br/><br/>

	<table class="table table-hover" width='50%'height='15%' border='0'>

	<tr bgcolor='grey'>
                
		 <td>DONEE_ID</td>
    	  <td>Name</td>
		<td>DOB</td>
		<td>Sex</td>
		<td>Contact</td>
		<td>Door_NO</td>
		<td>Street</td>
		<td>City</td>
		<td>PIN</td>


	
		<td>Remove</td>
		
	</tr>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
                echo "<td>".$res['DONEE_ID']."</td>";
		echo "<td bgcolor=''>".$res['NAME']."</td>";
		echo "<td>".$res['DOB']."</td>";
		echo "<td>".$res['SEX']."</td>";
		
	
		echo "<td>".$res['CONTACT']."</td>";
		
		echo "<td>".$res['DOOR_NO']."</td>";
		echo "<td>".$res['STREET']."</td>";
		
		echo "<td>".$res['CITY']."</td>";
		echo "<td>".$res['PIN']."</td>";
		
 echo"<td bgcolor='grey'> <a href=\"delete2.php?DONEE_ID=$res[DONEE_ID]\" onClick=\"return confirm('Are you sure you want to delete?')\"><font color='white'>Delete</a></td>";        
	}
	?>
	</table>
</div>
</body>
</html>
