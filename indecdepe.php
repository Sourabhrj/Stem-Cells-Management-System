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

</head>


<?php

include("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM DEPENDENT ORDER BY DEPE_NAME ASC"); 
?>

<html>
<head>	
<link href="cstyles.css" rel="stylesheet"/>
	<title>Dependent information</title>
</head>

<body>
<h1>DEPENDENT INFORMATION</h1>
<a href="dependent.php">Add New Data</a><br/><br/>
	<diV class="container">

	<table class="table table-hover" width='50%'height='15%' border='0'>

	<tr bgcolor='skyblue'>
                
		 
    	  <td>DE_Name</td>
		<td>Contact</td>
		<td>Relationship</td>
		
        <td>DONEE_ID</td>
		


		 <!-- <td>Update</td> -->
		 <!-- <td>Remove</td> -->
		
	</tr>
	<?php 
	
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
                echo "<td>".$res['SCB_NO']."</td>";
		echo "<td bgcolor=''>".$res['DE_NAME']."</td>";
		
		echo "<td>".$res['CONTACT']."</td>";
        echo "<td>".$res['RELATIONSHIP']."</td>";
        echo "<td>".$res['DONEE_ID']."</td>";
		
		
// echo "<td bgcolor='grey'><a href=\"ws3.php?DONOR_ID=$res[DONOR_ID]\"><font color='white'>Edit</a>";
//  echo"<td bgcolor='grey'> <a href=\"delete.php?DONOR_ID=$res[DONOR_ID]\" onClick=\"return confirm('Are you sure you want to delete?')\"><font color='white'>Delete</a></td>";        
	}
	?>
	</table>
</div>
</body>
</html>
