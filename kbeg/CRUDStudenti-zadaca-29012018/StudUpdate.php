<?php
require_once 'dbconnect.php';

// kada se ispunjena forma potvrdi (submita) 
if (isset($_POST['uredi'])) {
  $updated_at = (new DateTime())->format('Y-m-d H:i:s');
  $stmt = $conn->prepare("UPDATE `fakultet`.`stud` SET "
      . "  `imeStud`=?"
      . ", `prezStud`=?"
      . ", `pbrRod`=?"
      . ", `pbrStan`=?"
      . ", `datRodStud`=?"
      . ", `jmbgStud`=?"
      . ", `updated_at`=?  "
      . "WHERE  `mbrStud`=?");
  $stmt->bind_param("ssiisssi"
      , $_POST['imeStud']
      , $_POST['prezStud']
      , $_POST['pbrRod']
      , $_POST['pbrStan']
      , $_POST['datRodStud']
      , $_POST['jmbgStud']
      , $updated_at
      , $_POST['mbrStud']);

  if (false === $stmt) {
    die('prepare() failed: ' . $mysqli->error);
  }

  $validate = TRUE;

  if (strlen($_POST['imeStud']) < 3) {
    $validate = FALSE;
    echo "<span style='color:red'>Broj znakova imena mora biti veći od 3</span><hr>";
  }
  if (strlen($_POST['prezStud']) < 3) {
    $validate = FALSE;
    echo "<span style='color:red'>Broj znakova prezimena mora biti veći od 3</span><hr>";
  }

  if ($validate == TRUE) {
    if ($stmt->execute()) {
      echo "Uspješno smo uredili studenta<br>";
    } else {
      echo "Dogodila se greška kod uređivanja<br>";
      echo "<span style='color:red'>" . $stmt->error . "</span><hr>";
    }
  }
}

// za ispis zadnjih 10 studenata
$query = "SELECT * FROM stud ORDER BY mbrStud DESC LIMIT 10";
$result = $conn->query($query);

// za ispis postanskih brojeva i mjesta
$query = "SELECT pbr, nazMjesto FROM mjesto ORDER BY nazMjesto ASC";
$resultMjesto = $conn->query($query);

// za popunjavanje forme
if (isset($_GET['mbrStud'])) {
  $query = "SELECT * FROM stud WHERE mbrStud ";
  $result1 = $conn->query($query);
  $stmt = $stmt = $conn->prepare("SELECT imeStud,prezStud,pbrRod,pbrStan,datRodStud,jmbgStud FROM stud WHERE mbrStud =?");
  $stmt->bind_param("i", $_GET['mbrStud']);
  $stmt->execute();
  $stmt->bind_result($imeStud, $prezStud, $pbrRod, $pbrStan, $datRodStud, $jmbgStud);
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">-->
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>TODO supply a title</title>
            <meta name="keywords" content="" />
            <meta name="description" content="" />
            <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900|Quicksand:400,700|Questrial" rel="stylesheet" />
            <link href="default.css" rel="stylesheet" type="text/css" media="all" />
            <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
            <!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
    </head>
    <body>
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><span class="icon icon-cog"></span><a href="#">Algebra Online 2017</a></h1>
                <div id="menu">
                    <ul>
                        <li class="current_page_item"><a href="#" accesskey="1" title="">Početna</a></li>
                        <li><a target="_blank" href="https://github.com/algebrateam/online2017" accesskey="2" title="">GIT</a></li>
                        <li><a target="_blank" href="https://trello.com/" accesskey="3" title="">Trello</a></li>
                        <li><a href="#" accesskey="4" title="">O nama</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="page-wrapper">

        <div id="page" class="container">
        <div><span></span>
            <form action="" method="post">
                <input type="hidden" name="mbrStud" value="<?php echo $_GET['mbrStud']; ?>">
                <table cellpadding="0">
                    <thead>
                        <tr>
                            <div class="title">
                                <h2>Uredi studenta</h2>
                            </div>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><label for="imeStud">Ime studenta:</label></td>
                            <td><input type="text" name="imeStud" required="TRUE"  pattern=".{3,}" title="Ime studenta mora biti minimalno 3 znaka" value="<?= $imeStud ?>"></td> 
                        </tr>
                        <tr>
                            <td><label for="prezStud">Prezime studenta:</label></td>
                            <td><input type="text" name="prezStud" required="TRUE"  pattern=".{3,}" title="Prezime studenta mora biti minimalno 3 znaka" value="<?= $prezStud ?>"></td> 
                        </tr>
                        </tr>
                        <?php
      $data = array();
      while ($mjesto = $resultMjesto->fetch_assoc()) {
            $data[$mjesto['pbr']]=$mjesto['nazMjesto'];
      }
      $adresaPbrRod=$data[$pbrRod];
      $adresaPbrStan=$data[$pbrStan];
       
      ?>
                        <tr>
                            <td><label for="pbrRod">Adresa prebivališta:</label></td>
                            <td><select name="pbrRod">
                                    <option value="<?= $pbrRod ?>"><?= $adresaPbrRod ?></option>
<?php
mysqli_data_seek($resultMjesto, 0);   
      while ($mjesto = $resultMjesto->fetch_assoc()) {
printf("<option value='%d'>%s</option>",$mjesto['pbr'],$mjesto['nazMjesto'] );
      }
        ?>
                              
                                </select></td> 
                        </tr>                        
                        <tr>
                            <td><label for="pbrStan">Adresa stanovanja:</label></td>
                            <td><select name="pbrStan">
                                    <option value="<?= $pbrStan ?>"><?= $adresaPbrStan ?></option>
<?php
mysqli_data_seek($resultMjesto, 0);      
while ($mjesto = $resultMjesto->fetch_assoc()) {
printf("<option value='%d'>%s</option>",$mjesto['pbr'],$mjesto['nazMjesto'] );
      }
        ?>
                                </select></td> 
                        </tr>                         
                        <tr>
                            <td><label for="datRodStud">Datum rođenja:</label></td>
                            <td><input type="date" name="datRodStud"  value="<?php echo substr($datRodStud, 0, 10) ?>"></td> 
                        </tr> 
                        <tr>
                            <td><label for="jmbgStud">JMBG:</label></td>
                            <td><input type="text" required  pattern=".{13}" title="JMBG mora imati 13 znamenaka" name="jmbgStud"  value="<?= $jmbgStud ?>"></td> 
                        </tr>   
                        <tr><td colspan="2"><input type="submit" class="button" name="uredi" value="Uredi studenta"></td></tr>
                    </tbody>
                </table>
            </form>

        </div>
        </div>
        </div>
    <div id="wrapper2">
        <div id="tools">
            <ul>
                <?php
                while ($stud = $result->fetch_assoc()) {

                    echo "<li>"
                        . $stud['mbrStud']
                        . " ,"
                        . $stud['imeStud']
                        . " ,"
                        . $stud['datRodStud']
                        . " prebivalište:"
                        . $stud['pbrRod']
                        . " studira u:"
                        . $stud['pbrStan']
                        . " JMBG:"
                        . $stud['jmbgStud']
                        . " <a href='?mbrStud=" . $stud['mbrStud'] . "'>edit</a>"
                        . "</li>";
                }
                ?>
            </ul>
        </div>
    </div>
    <div id="copyright" class="container">
        <p>&copy; Untitled.</p>
    </div>
    </body>
</html>
