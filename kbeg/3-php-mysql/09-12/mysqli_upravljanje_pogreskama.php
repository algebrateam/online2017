<?php
 require 'dbconnect.php';
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
            <h1>Ispis predmeta</h1>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM pred");
                  if($result){
                      echo "<ol>";
                      while ($row = mysqli_fetch_object($result)) {
                          echo "<li>".$row->imeStud."</li>";
                      }
                      echo "</ol>";
                  }
                  else{
                   echo mysqli_errno($conn)." ". mysqli_error($conn);   
                  }
                  
            //die("Ne mogu dohvatiti predmete");
            ?>
            
            <br>
            ovo je neki text ispod table
        </div>
    </body>
</html>


