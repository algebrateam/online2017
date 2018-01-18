<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fakultet";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type='text/javascript' src='dyntable/vendor/jquery-1.7.2.min.js'></script>
<link rel="stylesheet" media="all" href="dyntable/jquery.dynatable.css" />
<link rel="stylesheet" media="all" href="dyntable/bootstrap-2.3.2.min.css" />
<link rel="stylesheet" media="all" href="dyntable/reset.css" />
<script type='text/javascript' src='dyntable/jquery.dynatable.js'></script>
<script type='text/javascript'>
      $(document).ready( function() {
          $('#my-table').dynatable({
  dataset:{
    perPageDefault: 8,
    perPageOptions: [3,4,6,8,10,50,100]
  }
  
});
      })
      </script>
      <style type="text/css">
          th{
              background-color: #468847
          }
      </style>
    </head>
    <body>
        <div style="box-sizing: border-box; width: 550">
            <?php
            // uz funkciju mysqli_fetch_array
            $result = mysqli_query($conn, "SELECT * FROM stud LIMIT 100");
            echo "<table id='my-table' class='table table-bordered table-striped'>";
            echo "<thead><tr><th>MBR</th><th>Ime studenta</th><th>Prezime studenta</th></tr></thead><tbody>"; 
             
            while ($row = mysqli_fetch_array($result)) {

                echo "<tr><td>"
                        . $row[0] . "</td><td>" 
                        . $row['imeStud'] . "</td><td>" 
                        . $row['prezStud'] . "</td></tr>";
            }
            echo "   </tbody></table>";
            
    echo "<hr>";
    ?>
            </div>
        <div>
            <?php
    
                // uz funkciju mysqli_fetch_object
            $result = mysqli_query($conn, "SELECT * FROM stud LIMIT 10");
            echo "<table>";
            echo "<tr><th>MBR</th><th>Ime studenta</th><th>Prezime studenta</th></tr>";
            while ($row = mysqli_fetch_object($result)) {

                echo "<tr><td>"
                        . $row->mbrStud . "</td><td>" 
                        . $row->imeStud . "</td><td>" 
                        . $row->prezStud . "</td></tr>";
            }
            echo "</table>";
            
            ?>


        </div>
    </body>
</html>


