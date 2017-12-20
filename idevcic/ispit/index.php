<?php

/*
 * Otvoreno učilište Algebra
 * Uvod u PHP i objektno orijentirano programiranje
 * Parcijalni ispit - prosinac 2017.
 * Polaznik: Ivana Devčić
 */

print '<table style="font-family:Roboto, sans-serif; font-size:16px; padding: 2px; margin: 5px; width: 600px; border: 1px solid black; border-collapse: separate; border-spacing: 1px; overflow:hidden; word-break:normal; text-align: left;">';
print '<tr style="background-color: silver; border: 1px solid black; text-align: center;"><th>R. Br.</th><th>Prezime</th><th>Ime</th><th>Datum prijave</th><th>Placeno</th></tr>';
include 'data.php';

function date_trans($datum) {
$newdate = implode('.', array_reverse(explode('-', $datum)));
return $newdate;
}

foreach ($data as $key => $value ) {
    print "<tr style=\"border: 1px solid black;\"><td style=\"border: 1px solid black; text-align: center;\">$key.</td>";
    $name = $value['ime'];
    $lname = $value['prezime'];
    $day = date_trans($value['datum']);
    $paid = $value['placeno'];
    
    print "<td style=\"border: 1px solid black;\">$lname</td> <td style=\"border: 1px solid black;\">$name</td> <td style=\"border: 1px solid black;\">$day.</td>";
    
    if ($paid === "Da") {
    print '<td style="border: 1px solid black;"><select name="text"><option value="value1" selected>Da</option><option value="value2">Ne</option><select></td>';
    }
    else {
	print '<td style="border: 1px solid black;"><select name="text"><option value="value1" selected>Ne</option><option value="value2">Da</option><select></td>';
    }
    print '<td style="border: 1px solid black;"><select name="text"><option value="value1" ';
    echo ($paid=="Da")?'selected>Da': 'selected>Ne';
    print '</option><option value="value2">Da</option><select></td>';
    
	print '</tr>';
    
}
print '</table>';

?>
