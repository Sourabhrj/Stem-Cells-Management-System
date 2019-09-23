<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$SCB_NO = $_GET['SCB_NO'];

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM STEM_CELLS_BANK WHERE SCB_NO=$SCB_NO");

//redirecting to the display page (index.php in our case)
header("Location:indexscb.php");
?>

