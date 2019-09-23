<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$DONOR_ID = $_GET['DONOR_ID'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM DONOR WHERE DONOR_ID=$DONOR_ID");

//redirecting to the display page (index.php in our case)
header("Location:index.php");
?>

