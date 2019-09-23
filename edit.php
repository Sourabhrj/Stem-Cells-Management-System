<?php
include_once("config.php");

//  if(isset($_GET['DONOR_ID'])){
	$DONOR_ID = $_GET["DONOR_ID"];
//  }


//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM DONOR WHERE DONOR_ID='$DONOR_ID'");

while($res = mysqli_fetch_array($result))
{
	
	$NAME = $res['NAME'];
	// $DONOR_ID = $res['DONOR_ID'];
	$DOB = $res['DOB'];
	$SEX = $res['SEX'];
	$CONTACT = $res['CONTACT'];
	$DOB = $res['DOB'];
	$DOOR_NO = $res['DOOR_NO'];
	$STREET = $res['STREET'];
	$CITY = $res['CITY'];
	$PIN = $res['PIN'];
}

?>



<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	
	
	$NAME = mysqli_real_escape_string($mysqli, $_POST['NAME']);
	$DONOR_ID= mysqli_real_escape_string($mysqli, $_POST['DONOR_ID']);
	$SEX = mysqli_real_escape_string($mysqli, $_POST['SEX']);
	$CONTACT = mysqli_real_escape_string($mysqli, $_POST['CONTACT']);
	$DOB = mysqli_real_escape_string($mysqli, $_POST['DOB']);
	$DOOR_NO = mysqli_real_escape_string($mysqli, $_POST['DOOR_NO']);
	$STREET = mysqli_real_escape_string($mysqli, $_POST['STREET']);
	$CITY = mysqli_real_escape_string($mysqli, $_POST['CITY']);
	$PIN = mysqli_real_escape_string($mysqli, $_POST['PIN']);	
	
	// checking empty fields
	if(empty($NAME) || empty($DONOR_ID) || empty($SEX) || empty($CONTACT)|| empty($DOB)|| empty($DOOR_NO)|| empty($STREET)|| empty($CITY)|| empty($SPIN) ) {	
			
		if(empty($NAME)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
	
		if(empty($SEX)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}	
		
		if(empty($CONTACT)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}	
		
		if(empty($DOB)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}	
		
		if(empty($DOOR_NO)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}	
		
		if(empty($STREET)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}	
		
		if(empty($CITY)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}	
		
		if(empty($PIN)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}	
		

	} else {	
		// $DONOR_ID = $_GET['DONOR_ID'];
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE DONOR SET NAME ='$NAME',SEX='$SEX',CONTACT='$CONTACT',DOB='$DOB',DOOR_NO='$DOOR_NO',STREET='$STREET',CITY='$CITY',PIN='$PIN' 
		WHERE DONOR_ID='$DONOR_ID'");


		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>

<html>
<head>	
<link href="cstyles.css" rel="stylesheet"/>
	<title>Edit Data</title>

<style>
      body {
          background-image: url("assets/img13.jpg");
      }
</style>

</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form  method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Name</td>
				<td><input type="text" name="NAME" value="<?php echo $NAME;?>"></td>
			</tr>
			<tr> 
				<td>DOB</td>
				<td><input type="text" name="DOB" value="<?php echo $DOB;?>"></td>
			</tr>
			<tr> 
				<td>SEX</td>
				<td><input type="text" name="SEX" value="<?php echo $SEX;?>"></td>
			</tr>
			<tr> 
				<td>CONTACT</td>
				<td><input type="text" name="CONTACT" value="<?php echo $CONTACT;?>"></td>
			</tr>
			
			<tr> 
				<td>DOOR NO</td>
				<td><input type="text" name="DOOR_NO" value="<?php echo $DOOR_NO;?>"></td>
			</tr>
			<tr> 
				<td>STREET</td>
				<td><input type="text" name="STREET" value="<?php echo $STREET;?>"></td>
			</tr>
			<tr> 
				<td>CITY</td>
				<td><input type="text" name="CITY" value="<?php echo $CITY;?>"></td>
			</tr>
			<tr> 
				<td>PIN</td>
				<td><input type="text" name="PIN" value="<?php echo $PIN;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="DONOR_ID" value="<?php echo $_GET['DONOR_ID'];?>"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
