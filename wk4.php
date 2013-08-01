<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <title>Week 4</title>
  <!--
  Author: David Moutoussamy
  Date: 3/31/2010
  Descr: MySQL INSERT DELETE MODIFY + PHP-->
</head>

<body>
        <h1> OpenSource Tech.  </h1> <h2> Week 4</h2>
                      <hr>
        <?php

              include "wk4db.php";



$query= mysql_query("Select * from person");

$i=0;


echo "<table border='1'><tr><td>ID</td><td>Name</td><td>Sex</td></tr>";
while($person = mysql_fetch_array($query) )
{

	echo "<tr>";
	echo '<td>'. $person['id']. "</td><td>". $person['name']. "</td><td>". $person['sex'].'</td>';
	echo "<tr/>";

}//ends while
echo '</table>';
mysql_close();


?>


</body>

</html>
