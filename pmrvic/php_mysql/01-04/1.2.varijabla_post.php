<html>
    <body>
        <form method="POST" action="#">
            
            ime: <br><input type="text" name="ime" value="" required="true"><br>
            prezime:<br><input type="text" name="prezime" value=""><br>
            spol:<br>
            <input type="radio" name="spol" value="M">musko<br>
            <input type="radio" name="spol" value="Z">zensko<br>
            Raspon: <input name="raspon" type="range" min ="4" step="2" max="10" onchange="console.log(raspon.value),getElementById('metar').value=raspon.value">
            Meter<br>
            <meter name="metar" id="metar" value="2" min="0" max="10">2 out of 10</meter><br>
            zupanija:<br>
            <select  name="zupanija">
                <option value="1">a</option>
                <option value="2">b</option>
            </select>
                <br>
            interesi:<br>
            <input type="checkbox" name="interesi" value="1">sport</input>
            <input type="checkbox" name="interesi" value="2">tv</input>
            <input type="checkbox" name="interesi" value="3">pivo</input>
            napomena:<br>
            <textarea name="napomena" cols="50">
                
            </textarea>
            <input type="submit" name="submit_btn" value="Obrada">
        </form>
        
    </body>
    
    
</html>
<?php

if(isset($_POST['submit_btn'])){
    echo "<br>Post varijable<pre>";
    print_r($_POST);
    echo "</pre>";
}
if (isset($_GET['submit_btn'])) {
    echo "<br>Get varijable<pre>";
print_r($_GET);
echo "</pre>";
}
if (isset($_REQUEST['submit_btn'])) {
    echo "<br>Request varijable<pre>";
    print_r($_REQUEST);
    echo "</pre>";
}
else echo "Forma nije submitana";