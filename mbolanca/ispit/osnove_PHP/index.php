<?php

include ("data.php");

function date_trans($datum) {
    $novi_datum = explode("-", $datum);
    return $novi_datum[2] . "." . $novi_datum[1] . "." . $novi_datum[0] . ".";
}

echo '
    <table border =2 cellpadding =7>
      <tr style="background-color:lightgrey; text-align:left;">
        <th>Rbr.</th>
        <th>Prezime</th>
        <th>Ime</th>
        <th>Datum prijave</th>
        <th>Placeno</th>
      </tr>';

foreach ($data as $key => $value) {
    echo '
<tr>
<td>' . $key . '.</td>
<td>' . $value["prezime"] . '</td>
<td>' . $value["ime"] . '</td>
<td>' . date_trans($value["datum"]) . '</td>
<td>';

    $placeno = $value["placeno"];

    echo '<select name="placeno">';

    if ($placeno == "Da") {
        echo "<option value selected>Da</option>
        <option value>Ne</option>";
    } else {
        echo "<option value>Da</option>
        <option value selected>Ne</option>";
    };

    '</select>
</td>    
</tr>';

    '</table>';
};
?>