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

        mysql_query("INSERT INTO person (name, sex)
VALUES ('we', 'sw')");



    echo "inserted";
             mysql_close();
            ?>

</body>

</html>
