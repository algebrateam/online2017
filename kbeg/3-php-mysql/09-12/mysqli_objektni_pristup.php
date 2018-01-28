<?php
require_once 'db_mysqli.php';


if (isset($_GET['nazMjesto'])){
$query = "SELECT * FROM mjesto WHERE nazMjesto LIKE '".$_GET['nazMjesto']."%' LIMIT 5";
}
else{
    $query = "SELECT * FROM mjesto LIMIT 5";
}

if($result=$mysqli->query($query)){
	while ($row=$result->fetch_assoc()) {
		echo $row["nazMjesto"];
		echo "<br/>";
	}
}
echo "<br>Broj pronađenih zapisa:".$mysqli->affected_rows." <br>";
echo "<br>Broj kolumni (polja) u tablici:".$mysqli->field_count." <br>";
/*
$query="INSERT INTO `fakultet`.`stud` (`imeStud`, `prezStud`, `pbrRod`, `pbrStan`, `datRodStud`, `jmbgStud`, `created_at`) VALUES ('ProbaIme1', 'ProbaPrezime1', '20225', '32235', '2018-01-19 19:07:59', '1234567894444', '2018-01-19 19:08:22')";

$result=$mysqli->query($query);
 */
echo "<br>Broj pronađenih zapisa:".$mysqli->affected_rows." <br>";
echo "<br>Zadnji uneseni ID:".$mysqli->insert_id." <br>";



/// vezani parametri strana 47
//$query_tpl="SELECT pbr FROM mjesto WHERE nazMjesto='".$_GET['nazMjesto']."'";

$query_tpl="SELECT pbr FROM mjesto WHERE nazMjesto=?";

if(isset($_GET['nazMjesto'])){
    $naziv=$_GET['nazMjesto'];
}
else{
  $naziv="Zagreb";  
}

//  i  -> integer
//  d  -> double
//  b  -> blob
//  s  -> sve drugo, obično string
if ($stmt=$mysqli->prepare($query_tpl)){ // pripremamo predložak za unos varijabli
	$stmt->bind_param('s',$naziv); // Postavljamo vrijednosti
	$stmt->execute();

$stmt->bind_result($pbr);

$stmt->fetch();
echo "Za mjesto naziva ".$naziv." je poštanski broj:".$pbr;
$stmt->close();
}

/// vezani rezultat strana 59
echo "<hr>";
echo "vezani rezultat, bind_result()<br>";

// Ovo je blok koda od <<<END  <neki kod...> END 
$query=<<<krajzavrsetakende
SELECT pbr, nazMjesto FROM mjesto WHERE nazMjesto LIKE 'Zag%';
        
        
krajzavrsetakende;
echo "<hr>mysqli bind result: <br>";
if($stmt=$mysqli->prepare($query)){

	$stmt->execute();
	$stmt->bind_result($col1,$col2);  // proizvoljno nazovemo polja

	while($stmt->fetch()){
		echo $col1." ".$col2;
		echo "<br/>";
	}
}



/// Vezani paremetri i rezuiltati
echo "<hr>";
echo "Bindani parametri i rezultat".nl2br("");

$query_tpl=<<<END
SELECT pbr, nazMjesto FROM mjesto WHERE nazMjesto LIKE ? LIMIT 10
END;

$naziv="Or%";

if($stmt=$mysqli->prepare($query_tpl)){

$stmt->bind_param('s',$naziv);

	$stmt->execute();
	
	$stmt->bind_result($col1,$nazii);

	while($stmt->fetch()){
		echo $col1. " ".$nazii;
		echo "<br/>";
	}
}


// zadatak 6:
/// Vezani paremetri i rezuiltati
echo "<hr>";
echo "Zadatak 6:".nl2br("");

$query_tpl=<<<END
select count(*) from nastavnik WHERE prezNastavnik LIKE ?  ;
END;

$naziv="M%";

if($stmt=$mysqli->prepare($query_tpl)){

$stmt->bind_param('s',$naziv);

	$stmt->execute();
	
	$stmt->bind_result($col1);

	while($stmt->fetch()){
		echo "Broj nastavnika koji počinju s M je:".$col1;
		echo "<br/>";
	}
}


// zadatak 5:
/// Vezani paremetri i rezuiltati
echo "<hr>";
echo "Zadatak 5:".nl2br("");

$query_tpl=<<<END
select imeStud from STUD WHERE imeStud LIKE ?  ;
END;

$naziv="A%";

if($stmt=$mysqli->prepare($query_tpl)){

$stmt->bind_param('s',$naziv);

	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($col1);

        echo "Broj studenata koji počinju s A je:".$stmt->num_rows;
        
        // Ispis studenata
        /*
	while($stmt->fetch()){
		echo "Broj studenata koji počinju s A je:".$col1;//
		echo "<br/>";
	}*/
         

}

// zadatak 4:
/// Vezani paremetri i rezuiltati
echo "<hr>";
echo "Zadatak 4:".nl2br("");

$query_tpl=<<<END
select imeStud, prezStud from STUD WHERE pbrRod =?;
END;

$naziv=10000;

if($stmt=$mysqli->prepare($query_tpl)){

$stmt->bind_param('i',$naziv);

	$stmt->execute();
	
	$stmt->bind_result($ime,$prezime);
 $stmt->store_result();
        
        
     echo "<h3>Studenata iz zagreba ima:".$stmt->num_rows."</h3>";
echo "Ispis studenata iz Zg";
echo "<ol>";
	while($stmt->fetch()){
		echo "<li>".$ime." ".$prezime."</li>";
	}
echo "</ol>";
}
// kraj

$mysqli->close();



?>