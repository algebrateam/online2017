<?php
if (!isset($_REQUEST['brojimena'])) {
    header('Location: 1.6.1.forma1.php');
    exit;
}
?>
<html>
 <body>
   <form method="post" action="#">
     <input type="hidden" name="brojimena" 
      value="<?php echo $_REQUEST['brojimena']; ?>">

<?php for ($i = 0; $i < $_REQUEST['brojimena']; $i++) { ?>
                
     
     Unesi ime <?php echo $i; ?>:
     <input type="text" name="ime_<?php echo $i; ?>" value="<?php echo $_REQUEST['ime_'.$i]; ?>" /> <br>
            <?php } ?>
            <input type="submit" name="f2" value="Stisni!">
        </form>
    </body>


    <?php
    print_r($_REQUEST);
    /*
     * To change this license header, choose License Headers in Project Properties.
     * To change this template file, choose Tools | Templates
     * and open the template in the editor.
     */
    ?>

</html>