<?php
include ("data.php");

function date_trans ($datum) {
   
}

print_r($data);
 
echo '
    <table border =2 cellpadding =7>
      <tr style="background-color:lightgrey;">
        <th>Rbr.</th>
        <th>Prezime</th>
        <th>Ime</th>
        <th>Datum prijave</th>
        <th>Placeno</th>
      </tr>';  
      
foreach ($data as $key => $value) {
    echo '
<tr>
<td>'.$key.'.</td>
<td>'.$value["prezime"].'</td>
<td>'.$value["ime"].'</td>
<td>'.date_trans($value["datum"]).'</td>
<td>';}



?>