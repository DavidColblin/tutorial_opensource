<?php
         include "wk4db.php";  /*opening up connection for database*/

           $val = "$_GET[sel]";  

         mysql_query("UPDATE person SET sex= '$_GET[sextxtupdate]'
            WHERE id= '$val' ") or die("CANNOT");



    echo "inserted";
    echo '<a href="wk4.php"> Back </a>' ;
             mysql_close();

?>