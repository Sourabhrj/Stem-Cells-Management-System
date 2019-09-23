<!DOCTYPE html>
<html>
    <head>
        <title>Donor information stored procedure</title>
        <link rel="stylesheet" href="a.css" type="text/css" />
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
    <body><div class="table-title">

</div>

        <?php
        require_once 'config.php';
        try {
            $pdo = new PDO("mysql:host=$databaseHost;dbname=$databaseName", $databaseUsername, $databasePassword);
            // execute the stored procedure
            $sql = 'CALL DONOR_DISP()';
            // call the stored procedure
            $q = $pdo->query($sql);
            $q->setFetchMode(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Error occurred:" . $e->getMessage());
        }
        ?>
        <div class="container">
            <table class="table table-hover" width='50%' border='0' >
        	<thead><br>
            <tr bgcolor="grey">
                <th class="text-left">DONOR_ID</th>
                <th class="text-left">DOB</th>
                <th class="text-left">SEX</th>
                <th class="text-left">CITY</th>
            </tr></thead>
            <?php while ($r = $q->fetch()): ?>
               <tbody class="table-hover"> <tr>
                    <td  class="text-left" ><?php echo $r['DONOR_ID'] ?></td>
                    <td  class="text-left"><?php echo $r['DOB'] ?></td>
                    <td  class="text-left"><?php echo $r['SEX'] ?></td>
                    <td  class="text-left"><?php echo $r['CITY'] ?></td>
                </tr></tbody>
            <?php endwhile; ?>
        </table>
    </div>
    </body>
</html>