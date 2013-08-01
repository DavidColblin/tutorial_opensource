<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
  <title>Week 1</title>
  <!--
  Author: David Moutoussamy
  Date: 15March2010
  Descr: Adding 2 number & Multiplication Table-->
</head>

<body>
        <h1> OpenSource Tech.  </h1> <h2> Week 1</h2>
                      <hr>
        <?php
                  $num1 = 10;
                  $num2 = 5;
                  $sum = $num1+ $num2;

                  echo "The Sum is $sum";


?>
<br />
             <h3> Multiplication</h3>
<?php
        $multi = 2;
              for ($i=1; $i<10; ++$i)   {
                       $ix= $multi * $i;
              echo "$ix<br/>";

              }

  ?>


</body>

</html>
