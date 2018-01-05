<?php
function imena_i_prezimena($i)
{
    echo"<caption>Učenici</caption> <table border='1'width = '100'>" ;
    foreach ($i as $key => $ime)
    {
        echo "
        <tr>
        <th>Ime</th>
        <th>Prezime</th>
        <td> ".$key." </td>
                <td> ".$ime." </td>
                </tr>" ;
    }
    echo "</table>";
    
    }
    $ucenici = array ("Marko","Darko","Žarko");
    
    imena_i_prezimena($ucenici);
    
    
    
    

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

