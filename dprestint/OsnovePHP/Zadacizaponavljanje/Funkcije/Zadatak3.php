<?php
$x = 25 ;
$y = 5 ;
function zbroj ($a,$b) 
{ 
    return $a + $b ;
    
}
function razlika ($a,$b)
{
    return $a - $b ;
}
function umnozak ($a,$b)
{
    return $a*$b;
    
}
function dijeljenje ($a,$b) 
{
        return $a/$b ;
}
function allfunctions ($a,$b)
{
    echo "Zbroj :",zbroj($a, $b),"<br>";
    echo "Razlika :",razlika($a,$b),"<br>" ;
    echo "Umnozak :" , umnozak($a,$b),"<br>";
    echo "Dijeljenje:", dijeljenje ($a,$b),"<br>" ;
    }
    
   allfunctions ($x,$y);
   
   
   ?>
   

