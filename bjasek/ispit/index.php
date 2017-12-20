<?php

include 'data.php';

echo "<table border='1'>";
echo "<tr>
<th>Ime</th>
<th>Prezime</th>
<th>Datum</th>
<th>Plaćeno</th>
</tr>";

foreach ($data as $rbroj)
    {
    echo "<tr>";
    foreach($rbroj as $kategorija)
        {
            echo "<td>$kategorija</td>";                    
        }
        echo '</tr>';
    }
    
    echo '</table>';     
    
    
    echo "<hr>";  

function date_trans($novidatum)
{
  return date ('d.m.Y',strtotime($novidatum));
}

echo $pravidatum = date_trans($data[1]["datum"]);

    echo "<hr>";

?>
