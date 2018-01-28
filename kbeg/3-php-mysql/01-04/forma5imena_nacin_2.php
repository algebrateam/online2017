<html>
    <head></head>
    <body>
        <form method="POST" action="">
            <?php 
            for($i=0;$i<5;$i++){
            ?>
            <label for="ime_<?php echo $i?>">ime_<?php echo $i?></label>
                <input name="ime[]" type="text">
            <input name="prezime[]" type="text">
            <hr>
            <?php }?>
            <input type="submit" name="Potvrdi" value="Potvrdi">
        </form>
        
    </body>
</html>
<?php
if(isset($_POST['Potvrdi'])){
    print_r($_POST);
    
    echo "<hr>";
    foreach ($_POST['ime'] as $key => $value) {
        echo "pozdrav moje ime je: ".$value;
    }
    echo "<ol>";
    for($i=0;$i<count($_POST['ime']);$i++){
        echo "<li>".$_POST['ime'][$i]." ".$_POST['prezime'][$i]."</li> ";
    }
    echo "</ol>";
    
}
