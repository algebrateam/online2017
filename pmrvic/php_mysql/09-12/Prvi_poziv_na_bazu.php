<html>
<head>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css">   
</head>
<body class="text-center">

<?php 
include '..\..\..\dbconn.php';
error_reporting(0); 

# Dohvaćanje filmova s početnim slovom $get iz paginacije
if($_GET['mbr'])
{

$get = $_GET['mbr'];
$query = "SELECT * FROM ispit WHERE mbrStud='".$get."'";
$result = mysqli_query($conn, $query);	

	while($row = mysqli_fetch_assoc($result))
	{
		echo '<div style="text-align:center; font-style:italic;">';
		
		echo $row['sifPred'].' ';
		echo 'Ocjena: '.$row['ocjena'];
		echo '</div>';
	}
   
}  

$query = "SELECT * FROM stud WHERE mbrStud IN (SELECT DISTINCT mbrStud FROM ispit) ORDER BY imeStud";
$result = mysqli_query($conn, $query);		
?>
    
   <form name="studenti" method="get" action="#">
       <select name="mbr" onchange="studenti.submit()">
        <?php
        while($row = mysqli_fetch_assoc($result))
	{
        ?>
        <option value="<?php  echo $row['mbrStud'];?>">
            <?php  echo $row['imeStud'].' '.$row['prezStud'];?>
        </option>
        <?php
        }
        ?>
    </select>
       
</form>
    
    
    <?php

echo "<table border='1px' class='table table-hover'>";  
  
	echo '<tr"><ul class="pagination">'; 
        $query = "SELECT * FROM stud WHERE mbrStud IN (SELECT DISTINCT mbrStud FROM ispit) ";
$result = mysqli_query($conn, $query);	

	while($row = mysqli_fetch_assoc($result))
	{
	echo '<li>'
            . '<a class="letter" href=?mbr='
            .$row['mbrStud']
            .'> '
            .$row['imeStud']
            .' '
            .$row['prezStud']
            .'</a></li>';	
	}
	echo '</ul></tr>'; 

echo '</table>';
?>



</body>
</html>

