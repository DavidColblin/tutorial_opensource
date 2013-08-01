<?php
         include "wk4db.php";  /*opening up connection for database*/


         mysql_query("INSERT INTO person (name, sex)
                VALUES ('$_GET[nametxt]','$_GET[sextxt]')") or die("CANNOT");



    echo "inserted";
    echo '<a href="wk4.php"> Back </a>' ;
             mysql_close();

?>