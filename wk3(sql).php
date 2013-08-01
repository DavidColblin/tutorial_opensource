<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body align="center"> 
<?php 

echo "<h1>Trying some SQL</h1>";

mysql_connect ("localhost","root","");
mysql_select_db("davidtest");




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
