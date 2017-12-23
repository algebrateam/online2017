<?php
 include 'data.php';
 echo $data[6]['prezime']."<br>"; 
 print_r($data);

 function date_trans($datum) {
 $datum_format = implode('.', array_reverse(explode('-', $datum)));
 return $datum_format;
}

echo'   
<table style = "border: 1px solid black" >  
<tr style="background-color: grey; border: 2px solid black;">
        <th style="border: 2px solid black">Rbr.</th>
        <th style="border: 2px solid black">Prezime</th>
        <th style="border: 2px solid black">Ime</th>
        <th style="border: 2px solid black">Datum prijave</th>
        <th style="border: 2px solid black">Placeno</th>
 </tr>';


 foreach ($data as $key => $value ) {
   echo"<tr>"
        . "<td style=\"border: 1px solid black\">$key.</td>";
    $ime = $value['ime'];
    $prezime = $value['prezime'];
    $novi_datum = date_trans($value['datum']);
    $placeno = $value['placeno'];
     
    echo"<td  style=\"border: 1px solid black\">$prezime</td>"
            . "<td  style=\"border: 1px solid black\">$ime</td> "
            . "<td  style=\"border: 1px solid black\">$novi_datum</td>";
     
     if ($placeno == "Da"){
        echo
        '<td>'
         . '<select>'
             . '<option selected>Da</option>'
             . '<option>Ne</option>'
         . '<select>'
        . '</td>';
     }
     else {
 	echo 
        '<td>'
         . '<select>'
                . '<option>Ne</option>'
                . '<option>Da</option>'
         . '<select>'
        . '</td>';
     }
     
    echo '</tr>';
     
 }
        
echo'</table>'; 

?>