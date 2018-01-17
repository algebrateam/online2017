<?php

$mysqli= new mysqli('127.0.0.1','root','','fakultet');
mysqli_set_charset($mysqli,'utf8'); // bez ovoga su čudni znakovi?!
if(mysqli_connect_errno()){
	echo "Pogreška";
	echo mysqli_connect_error();
	exit;
}

$query = "SELECT * FROM mjesto LIMIT 5";

if($result=$mysqli->query($query)){
	while ($row=$result->fetch_assoc()) {
		echo $row["nazMjesto"];
		echo "<br/>";
	}
}

/// vezani parametri strana 57

$query_tpl="SELECT pbr FROM mjesto WHERE nazMjesto=?";

$naziv="Zagreb";

if ($stmt=$mysqli->prepare($query_tpl)){ // pripremamo predložak za unos varijabli
	$stmt->bind_param('s',$naziv); // Postavljamo vrijednosti
	$stmt->execute();

$stmt->bind_result($pbr);

$stmt->fetch();
echo $pbr;
$stmt->close();
}

/// vezani rezultat strana 59
echo "<hr>";
echo "vezani rezultat, bind_result()<br>";

// Ovo je blok koda od <<<END  <neki kod...> END 
$query=<<<krajzavrsetakende
SELECT pbr, nazMjesto FROM mjesto WHERE nazMjesto LIKE 'Zag%';
krajzavrsetakende;

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
SELECT pbr FROM mjesto WHERE nazMjesto LIKE ? LIMIT 10
END;

$naziv="Zag%";

if($stmt=$mysqli->prepare($query_tpl)){

$stmt->bind_param('s',$naziv);

	$stmt->execute();
	
	$stmt->bind_result($col1);

	while($stmt->fetch()){
		echo $col1;
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
select count(*) from STUD WHERE imeStud LIKE ?  ;
END;

$naziv="A%";

if($stmt=$mysqli->prepare($query_tpl)){

$stmt->bind_param('s',$naziv);

	$stmt->execute();
	
	$stmt->bind_result($col1);

     echo "Broj nastavnika koji počinju s M je:".$stmt->num_rows;
/*
	while($stmt->fetch()){
		echo "Broj nastavnika koji počinju s M je:".$col1;
		echo "<br/>";
	}
*/
}

// zadatak 4:
/// Vezani paremetri i rezuiltati
echo "<hr>";
echo "Zadatak 4:".nl2br("");

$query_tpl=<<<END
select count(*) from STUD WHERE imeStud LIKE ?  ;
END;

$naziv="A%";

if($stmt=$mysqli->prepare($query_tpl)){

$stmt->bind_param('s',$naziv);

	$stmt->execute();
	
	$stmt->bind_result($col1);

     echo "Broj nastavnika koji počinju s M je:".$stmt->num_rows;
/*
	while($stmt->fetch()){
		echo "Broj nastavnika koji počinju s M je:".$col1;
		echo "<br/>";
	}
*/
}
// kraj 













?>