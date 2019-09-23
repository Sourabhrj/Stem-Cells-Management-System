<!-- technosmarter.com  -->


<?php

$databaseHost = 'localhost';
$databaseName = 'stemcells';
$databaseUsername = 'root';
$databasePassword = 'sourabhrj50';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
 
if(! $mysqli ) {
            die('Could not connect: ' . mysqli_error());
         }
         
         // echo 'Connected successfully';
?>
