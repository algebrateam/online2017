<?php
echo "File handler";

$filename='./ucenici.txt';
/*
$handle=fopen($filename, 'r+');
//$contents=fread($handle, filesize($filename)!=0?filesize($filename):1);

//$contents=fread($handle, filesize($filename)!=0?filesize($filename):1);
$contents= fgets($handle);
$contents= fgets($handle);

fwrite($handle, "upis izmedju 2 i 3 linije XXXXXXX");


echo $contents;
fclose($handle);
*/
// korištene funkcije
/*
fopen(filename, mode);
fread(handle, length);
fwrite(handle, string);
fclose(handle);
*/

$datoteka=file($filename);

echo "<pre>";
print_r($datoteka);

foreach ($datoteka as $key => $value) {
	echo "broj linije:".$key." value:".$value."<br/>";
}
/**/
?>