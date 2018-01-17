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

    </head>
    <body>
        <div>
            <?php
            // uz funkciju mysqli_fetch_array
            $result = mysqli_query($conn, "SELECT * FROM stud LIMIT 10");
            echo "<table id='my-table'>";
            echo "<tr><th>MBR</th><th>Ime studenta</th><th>Prezime studenta</th></tr>";
            while ($row = mysqli_fetch_array($result)) {

                echo "<tr><td>"
                        . $row[0] . "</td><td>" 
                        . $row['imeStud'] . "</td><td>" 
                        . $row['prezStud'] . "</td></tr>";
            }
            echo "</table>";
            
    echo "<hr>";
    
    
                // uz funkciju mysqli_fetch_object
            $result = mysqli_query($conn, "SELECT * FROM stud LIMIT 10");
            echo "<table id='my-table'>";
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


