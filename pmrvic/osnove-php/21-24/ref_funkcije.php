<?php
// predaja parametara po referenci

function potencija(&$var,$n=2){
   $var1=$var;   // tu je skoro svima greška
  
  // prvi način
 // $var=pow($var,$n);
  
  // treći način
   // kao $var^2   == $var**2
  $var=$var**$n;

// drugi način
  /*
  while($n>0){
  	
	$var*=$var1;
	$n--;
  }*/
  //return $var;
}

$x=3;
$y=2;

//echo potencija($x,2);
potencija($x,3);

potencija($y);

echo $x."  y=".$y;

?>