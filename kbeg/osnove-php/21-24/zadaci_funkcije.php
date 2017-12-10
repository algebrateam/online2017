<?php


function ispisitablu(){

$mojaimena=func_get_arg(0);


echo "
<table border=1>
<tr>
  <th>Broj</th>
  <th>Ime</th>
  <th>Prezime</th>
</tr>
";
for ($i=0; $i<count($mojaimena) ; $i+=2) { 
	echo "
 <tr>
  <td>".($i/2)."</td>
  <td>".$mojaimena[$i]."</td>
  <td>".$mojaimena[$i+1]."</td>
</tr>
";
}





echo "</table>";


}


$poljeimena = array('Pero','Perić','Ivo','Ivić','Jure','Jurić');


ispisitablu($poljeimena)




?>