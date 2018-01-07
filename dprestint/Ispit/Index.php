
<table>

   <table  BORDER="4"  WIDTH="35%"   CELLPADDING="3" CELLSPACING="2">
    <tr>
            <th bgcolor="#808080">Rbr.</th>
     <th bgcolor="#808080">Prezime</th>
      <th bgcolor="#808080">Ime</th>
    <th bgcolor="#808080">Datum prijave</th>
      <th bgcolor="#808080">Placeno</th>
        </tr>
        <tr>
            <td>
                <?php
                for($i=1;$i <=10;$i++){
                echo  $i, ".","<br/>" ;
                echo "<hr />";
                }
                ?>
                
              </td>
       <td>
<?php
include "data.php" ;
for($i=1; $i <=10; $i++){
   echo $data[$i] ["prezime"], "<br>" ;
   echo "<hr />";
          }
          ?>
    <td>
     <?php  
        for($i=1; $i <=10; $i++){
        echo $data[$i] ["ime"],"<br>"; 
        echo "<hr />";
        }
        ?>
    </td>
    <td>
        <?php
        {
        function novi_datum($date)
            {
            for($i=1;$i <=10;$i++) 
            {return date ('d.m.Y',strtotime($date));
}
            }
            for($i=1;$i <=10;$i++) 
 {
                echo $final_date = novi_datum($data[$i]["datum"]),".","<br>";
                echo "<hr />";
            }
        
      
        }
            ?>
    </td>
    <td>
        <p><select></p>
        <option value="Da" selected>Da</option>
  <option value="Ne">Ne</option>
 </select>
      <p><select></p>
  <option value="Da">Da</option> 
  <option value="Ne" selected>Ne</option>
   </select>
  <p><select></p>
  <option value="Da">Da</option> 
  <option value="Ne" selected>Ne</option>
   </select>
  <p><select></p>
  <option value="Da" selected>Da</option>
  <option value="Ne" >Da</option>
   </select>
  <p><select></p>
  <option value="Da">Da</option> 
  <option value="Ne" selected>Ne</option>
   </select>
  <p><select></p>
  <option value="Da">Da</option> 
  <option value="Ne" selected>Ne</option>
   </select>
  <p><select></p>
  <option value="Da" selected>Da</option>
  <option value="Ne">Ne</option>
   </select>
  <p><select></p>
  <option value="Da" selected>Da</option>
  <option value="Ne">Ne</option>
   </select>
  <p><select></p>
  <option value="Da">Da</option> 
  <option value="Ne" selected>Ne</option>
   </select>
  <p><select></p>
  <option value="Da" selected>Da</option>
  <option value="Ne">Ne</option>
   </select>
  </td>
 
  
 
        
   
      </td>
      </tr>
    </table>

        
        
        
        
        
        








