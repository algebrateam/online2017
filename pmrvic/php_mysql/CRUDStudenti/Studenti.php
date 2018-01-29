<?php
require_once 'dbconnect.php';

if(isset($_POST['unesi'])){
    $created_at=(new DateTime())->format('Y-m-d H:i:s');
    $stmt=$conn->prepare("INSERT INTO `fakultet`.`stud` (`imeStud`, `prezStud`, `pbrRod`, `pbrStan`, `datRodStud`, `jmbgStud`, `created_at`) VALUES (?,?,?,?,?,?,?)");
$stmt->bind_param("ssiisss"
        ,$_POST['imeStud']
        ,$_POST['prezStud']
        ,$_POST['pbrRod']
        ,$_POST['pbrStan']
        ,$_POST['datRodStud']
        ,$_POST['jmbgStud']
        ,$created_at);
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
    echo "Uspješno dodan student";
}
else{
    echo "Dogodila se greško kod inserta<br>";
    echo "<span style='color:red'>".$stmt->error."</span><hr>";
}
}
}


$query="SELECT * FROM stud ORDER BY mbrStud DESC LIMIT 10";
$result=$conn->query($query);
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
                <table cellpadding="0">
                    <thead>
                        <tr>
                            <th colspan="2"> Dodaj novog studenta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label for="imeStud">Ime studenta:</label></td>
                            <td><input type="text" name="imeStud" required="TRUE"  pattern=".{3,}" title="Ime studenta mora biti minimalno 3 znaka"></td> 
                        </tr>
                                                <tr>
                            <td><label for="prezStud">Prezime studenta:</label></td>
                            <td><input type="text" name="prezStud" required="TRUE"  pattern=".{3,}" title="Prezime studenta mora biti minimalno 3 znaka"></td> 
                        </tr>
                        </tr>
                                   <tr>
                            <td><label for="pbrRod">Adresa prebivališta:</label></td>
                            <td><select name="pbrRod">
                                    <option value="10000">Zagreb</option>
                                    <option value="51000">Rijeka</option>
                    </select></td> 
                        </tr>                        
                                   <tr>
                            <td><label for="pbrStan">Adresa stanovanja:</label></td>
                            <td><select name="pbrStan">
                                    <option value="10000">Zagreb</option>
                                    <option value="51000">Rijeka</option>
                    </select></td> 
                        </tr>                         
                       <tr>
                            <td><label for="datRodStud">Datum rođenja:</label></td>
                            <td><input type="date" name="datRodStud"></td> 
                        </tr> 
                     <tr>
                            <td><label for="jmbgStud">JMBG:</label></td>
                            <td><input type="text" required  pattern=".{13}" title="JMBG mora imati 13 znamenaka" name="jmbgStud" value="<?php echo(rand(1000,9999)."555555555");?>"></td> 
                        </tr>   
                        <tr><td colspan="2"><input type="submit" name="unesi" value="Unesi studenta"></td></tr>
                    </tbody>
                                       
                    
                </table>
              
                
                
            </form>
            
            <ul>
                <?php 
                  $result_table = "<table border='1'>";
                  $result_table .= "<tr>";
                  $result_table .= "<th>Ime</th>";
                  $result_table .= "<th>Dat. Rodj.</th>";
                  $result_table .= "<th>Prebivaliste</th>";
                  $result_table .= "<th>Studira u</th>";
                  $result_table .= "<th>JMBG</th>";
                  $result_table .= "</tr>";
                  
                    while($stud=$result->fetch_assoc()){ 
                    $result_table .= "<tr>";   
                    $result_table .= "<td>".$stud['imeStud']."</td>";
                    $result_table .= "<td>".$stud['datRodStud']."</td>";
                    $result_table .= "<td>".$stud['pbrRod']."</td>";
                    $result_table .= "<td>".$stud['pbrStan']."</td>";
                    $result_table .= "<td>".$stud['jmbgStud']."</td>";
                    $result_table .= "</tr>";
                    }
                  
                  $result_table .= "</table>";
                  
                  echo $result_table;
                ?>
            </ul>
            
        
        
        
        
        
        
        </div>
    </body>
</html>
