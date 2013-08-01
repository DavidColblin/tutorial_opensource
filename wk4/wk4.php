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

              include "wk4db.php";  /*opening up connection for database*/

            ?>

 <h3>Select</h3>
            <?php
$query= mysql_query("Select * from person");




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
              <hr>
              <table border="1">
              <tr>
              <td>
<h3>Insert</h3>

<form method="get" action="insert.php">
name: <input type="text" name="nametxt"> <br />
sex: <input type="text" name="sextxt">     <br />
<input type="submit" />
</form>
</td>
<td> <h3>Update</h3>

 <form method="get" action="update.php">
 name: <?php
include "optiongenerator.php";
     ?>
                            <br />
sex: <input type="text" name="sextxtupdate">     <br />
<input type="submit" />
</form>
</td>
<td> <h3>Delete</h3>



</td>
</tr>

</body>

</html>
