<?php

  include "wk4db.php";

$quewry= mysql_query("Select * from person");


echo '<select name="sel">';

while($personw = mysql_fetch_array($quewry) )
{

echo '<option value='. $personw['id'] .'>' . $personw['name'] .'</option>';
}

echo '</select>';

mysql_close();
?>





