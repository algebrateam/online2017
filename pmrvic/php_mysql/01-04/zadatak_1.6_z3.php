<!-- Ovo se trebalo zvati skripta.php  -->
<html>
    <head></head>
    <body>
        
<?php
for($i=1;$i<6;$i++){
    echo "<a href='zadatak_1.6_z3.php?broj=".$i."'>".$i."</a><br>";  
}
?>
        <hr>
<?php for($i=1;$i<6;$i++){ ?>       
   <a href='zadatak_1.6_z3.php?broj=<?php echo $i?>'><?php echo $i?></a><br>     
 <?php } ?>       
     
<?php
if(isset($_GET['broj'])){
    echo "vi ste na stranici ".$_GET['broj'];
}
?>
    </body>
</html>