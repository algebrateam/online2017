<?PHP
$polje=json_decode('{"data": [{"value": "500"}, {"value": "300"}, {"value": "300"}]}', true);
array_push($polje['data'], ['value'=>333]);
array_push($polje['data'], ['value'=>333]);
array_push($polje['data'], ['value'=>333]);
array_push($polje['data'], ['value'=>333]);
array_push($polje['data'], ['value'=>333]);

print_r($polje);

$data = $polje;
//header('Content-Type: application/json');
echo json_encode($data,JSON_PRETTY_PRINT);