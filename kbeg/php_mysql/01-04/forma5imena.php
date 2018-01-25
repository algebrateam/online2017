<html>
    <head></head>
    <body>
        <form method="POST" action="">
            <?php 
            for($i=0;$i<5;$i++){
            ?>
            <label for="ime_<?php echo $i?>">ime_<?php echo $i?></label>
                <input name="ime_<?php echo $i?>" type="text">
            <input name="prezime_<?php echo $i?>" type="text">
            <hr>
            <?php }?>
            <input type="submit" name="Potvrdi" value="Potvrdi">
        </form>
        
    </body>
</html>
<?php
if(isset($_POST['Potvrdi'])){
    print_r($_POST);
    
}
