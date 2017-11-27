<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Ovo je moja prva php stranica</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>

        <h3>PHP zbroj</h3>

        <div style="color: crimson">
            <?php
            /*
             * To change this license header, choose License Headers in Project Properties.
             * To change this template file, choose Tools | Templates
             * and open the template in the editor.
             */

            echo "uskrs pada " . easter_days(2018) . " dana nakon 21.03.<br>";
            echo "uskrs za 2018 je" . easter_date(2018);
//echo date_format(easter_date(2018), 'Y-m-d H:i:s');
//TODO vidjeti kako iz PHP datetime formata pretvoriti u human readable format
            echo "prvi txt" . " drugi" . " treciphp";

            $var;  //ovo je ok
            $VAR;  // nečitljivo i rezervirano za konstante
# $12greska; // ne mozemo nazvati varijablu brojem
# linijski
// linijski
            /*
             * 
             * Blok komentar
             * */
            /**
             * ovo je rezervirano za dokumentaciju
             * */
            $a = 5;
            $b = 7;
            $c = $a + $b;
            echo "<br>zbroj broja <b>" 
            . $a 
            . "</b> i broja <i>" 
            . $b 
            . "</i> je: " 
            . $c;
            ?>

        </div>


    </body>
</html>


