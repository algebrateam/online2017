<?php

include("data.php");

$yesNoArray = array("Ne", "Da");

echo '
<table border="1" cellpadding="5">
<tr bgcolor="#E5E5E5">
<td align="center"><b>Rbr.</b></td>
<td align="center"><b>Prezime</b></td>
<td align="center"><b>Ime</b></td>
<td align="center"><b>Datum prijave</b></td>
<td align="center"><b>Placeno</b></td>
</tr>'; 

foreach($data as $num => $prijava)
{
echo '
<tr>
<td align="center">'.$num.'.</td>
<td>'.$prijava["prezime"].'</td>
<td>'.$prijava["ime"].'</td>
<td>'.date_trans($prijava["datum"]).'</td>
<td>';

echo '
<select name="placeno">'; 

foreach($yesNoArray as $key => $val)
{
$selected = ($val == $prijava["placeno"]) ? "selected" : "";

echo '<option value="'.$val.'" '.$selected.'>'.$val.'</option>';
}

echo '
</select>
</td>
</tr>'; 
}

echo '
</table>';

function date_trans($ulazni_datum) {
$datum_polje = explode ('-', $ulazni_datum);
return $datum_polje[2].'.'.$datum_polje[1].'.'.$datum_polje[0].'.';
}
?>