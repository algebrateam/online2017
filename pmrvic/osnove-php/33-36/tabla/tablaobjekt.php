<?php

echo "<h3>Dinamičko kreiranje html tablice</h3><br>";
class tabla{
var $brojac=0;	// služi nam za dinamičko numeriranje redova u tablici
var $imena;		// array sa imenima oblika ['Ime1 Prezime1','Ime2 Prezime2'...]
var $left=0;    // pozicija X "<div>" layera
var $top=0;		// pozicija Y "<div>" layera
var $position="relative;";    // default 'relative'. ukoliko zadamo $top i $left moramo promjeniti u 'absolute'

/**
*  Ubacujemo imena u obliku "ime1,prezime1,ime2,prezime2,..."
*  potrebno je takav oblik "razbiti" u array pomoću funkcije explode()
**/
function __construct($ulaznaimena){  
	$this->imena=explode(',',$ulaznaimena);
}

// postavljamo layer u kojemu je tablica u neku točku
function pozicija($left,$top){
	$this->left=$left;
	$this->top=$top;
	$this->position='absolute;';
}

// upisujemo CSS koordinate u "style" atribut <div> layera
function poz(){
	return "left:".$this->left.";top:".$this->top;
}


/*
 ______________________________
|_Broj______|_Ime___|_Prezime__|
|__0________|_Goran_|_Gerić____|
|__1________|_Ivan__|_Marić____|
|__2________|_Kruno_|_Bilić____|
|__$brojac__|_$vex[0]_|_$vex[1]|

*/
function ispis(){
	echo '
	<div class="CSSTableGenerator"
	onMouseOver="this.style.zIndex = 10" 
	onMouseOut="this.style.zIndex = 1"
	style="width:300px;position:'.$this->position.''.$this->poz().'">
	<table id="myTable">
		<tr>
			<td>Broj</td>
			<td>Ime</td>
			<td>Prezime</td>
		</tr>

		';
		foreach ($this->imena as $key => $value) {  // $value ima oblik "ime prezime"

			$vex=explode(' ',$value);  // $vex ima oblik ['ime','prezime']
			echo "<tr> 
			<td>".
				$this->brojac.
				"</td>
				<td >".
					$vex[0].
					"</td>
					<td>".
						$vex[1].
						"</td>
					</tr>";

					$this->brojac++;
		}
				echo '</table ></div>';
	}
}


?>


<!-- Počinjemo s formiranjem HTML dokumenta  -->
<html>

<head>
	<!-- Bring to you by http://www.CSSTableGenerator.com -->
	<link rel="stylesheet" href="table.css" type="text/css"/>	<!-- Malo css šminke  -->
</head>

<body>

	<?php 
	$listaimena="Goran Gerić,Ivan Marić,Krunoslav Bilić,Lada Mejkovski,Iskra Raguž,Tena Marjanović";
	$t1=new tabla($listaimena);
	$t1->ispis();

	$t1->pozicija(100,200);
	$t1->ispis();

	$t2=new tabla("Jabuke 5.00kn,kruške 2.00kn,šljive 3.00kn,banane 7.99kn,lješnjaci 12.85kn,grožđe 4.99kn");
	$t2->pozicija(250,100);
	$t2->ispis();
	?>

</body>
</html>