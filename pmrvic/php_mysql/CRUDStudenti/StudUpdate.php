<?php
require_once 'dbconnect.php';

if(isset($_POST['uredi'])){
    $updated_at=(new DateTime())->format('Y-m-d H:i:s');
    $stmt=$conn->prepare("UPDATE `fakultet`.`stud` SET "
            . "  `imeStud`=?"
            . ", `prezStud`=?"
            . ", `pbrRod`=?"
            . ", `pbrStan`=?"
            . ", `datRodStud`=?"
            . ", `jmbgStud`=?"            
            . ", `updated_at`=?  "
            . "WHERE  `mbrStud`=?");
$stmt->bind_param("ssiisssi"
        ,$_POST['imeStud']
        ,$_POST['prezStud']
        ,$_POST['pbrRod']
        ,$_POST['pbrStan']
        ,$_POST['datRodStud']
        ,$_POST['jmbgStud']
        ,$updated_at
        ,$_POST['mbrStud']);

if ( false===$stmt ) {
  die ('prepare() failed: ' . $mysqli->error);
}

$validate=TRUE;

if (strlen($_POST['imeStud'])<3){
    $validate=FALSE;
    echo "<span style='color:red'>Broj znakova imena mora biti veći od 3</span><hr>";
}
if (strlen($_POST['prezStud'])<3){
    $validate=FALSE;
    echo "<span style='color:red'>Broj znakova prezimena mora biti veći od 3</span><hr>";
}

if($validate==TRUE){
if($stmt->execute()){
    echo "Uspješno smo uredili studenta<br>";
}
else{
    echo "Dogodila se greška kod uređivanja<br>";
    echo "<span style='color:red'>".$stmt->error."</span><hr>";
}
}
}


$query="SELECT * FROM stud ORDER BY mbrStud DESC LIMIT 10";
$result=$conn->query($query);

if(isset($_GET['mbrStud'])){
  $query="SELECT * FROM stud WHERE mbrStud ";
$result1=$conn->query($query);  
$stmt= $stmt=$conn->prepare("SELECT imeStud,prezStud,pbrRod,pbrStan,datRodStud,jmbgStud FROM stud WHERE mbrStud =?");
$stmt->bind_param("i",$_GET['mbrStud']);
$stmt->execute();
$stmt->bind_result($imeStud,$prezStud,$pbrRod,$pbrStan,$datRodStud,$jmbgStud);
$stmt->fetch();

}


?>
<!DOCTYPE html>
<!-- 
C-reate
R-ead
U-pdate
D-elete
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <form action="" method="post">
                <input type="hidden" name="mbrStud" value="<?php echo $_GET['mbrStud'];?>">
                <table cellpadding="0">
                    <thead>
                        <tr>
                            <th colspan="2"> Uredi studenta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label for="imeStud">Ime studenta:</label></td>
                            <td><input type="text" name="imeStud" required="TRUE"  pattern=".{3,}" title="Ime studenta mora biti minimalno 3 znaka" value="<?= $imeStud?>"></td> 
                        </tr>
                                                <tr>
                            <td><label for="prezStud">Prezime studenta:</label></td>
                            <td><input type="text" name="prezStud" required="TRUE"  pattern=".{3,}" title="Prezime studenta mora biti minimalno 3 znaka" value="<?= $prezStud?>"></td> 
                        </tr>
                        </tr>
                                   <tr>
                            <td><label for="pbrRod">Adresa prebivališta:</label></td>
                            <td><select name="pbrRod">
                                    <option value="<?= $pbrRod?>"><?= $pbrRod?></option>
                                    <option value="51000">Rijeka</option>
                    </select></td> 
                        </tr>                        
                                   <tr>
                            <td><label for="pbrStan">Adresa stanovanja:</label></td>
                            <td><select name="pbrStan">
                                    <option value="<?= $pbrStan?>"><?= $pbrStan?></option>
                                    <option value="10000">Zagreb</option>
                                    <option value="51000">Rijeka</option>
                    </select></td> 
                        </tr>                         
                       <tr>
                            <td><label for="datRodStud">Datum rođenja:</label></td>
                            <td><input type="date" name="datRodStud"  value="<?= $datRodStud?>"></td> 
                        </tr> 
                     <tr>
                            <td><label for="jmbgStud">JMBG:</label></td>
                            <td><input type="text" required  pattern=".{13}" title="JMBG mora imati 13 znamenaka" name="jmbgStud"  value="<?= $jmbgStud?>"></td> 
                        </tr>   
                        <tr><td colspan="2"><input type="submit" name="uredi" value="Uredi studenta"></td></tr>
                    </tbody>
                                       
                    
                </table>
              
                
                
            </form>
            
            <ul>
                <?php  while($stud=$result->fetch_assoc()){ 
                    
                 echo  "<li>"
                    .$stud['mbrStud']
                         ." ,"
                    .$stud['imeStud']
                         ." ,"
                         .$stud['datRodStud']
                         ." prebivalište:"
                         .$stud['pbrRod']
                         ." studira u:"
                         .$stud['pbrStan']
                         ." JMBG:"
                         .$stud['jmbgStud']
                   ." <a href='?mbrStud=".$stud['mbrStud']."'>edit</a>"      
                   ."</li>";  
                }  ?>
            </ul>
            
        
        
        
        
        
        
        </div>
    </body>
</html>
