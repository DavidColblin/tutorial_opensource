<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>OpenSource Week2</title>
</head>

<body>
<h1>OpenSource Week2 </h1>     <?php  require("dater.php"); ?>
<hr />


<?php
  echo "<h5> NUMBER&nbsp;1 </h5>";
                 if ($_POST){
                   echo "<h3>" ;
                 echo ($_POST["num1"]+$_POST["num2"]);
                   echo "</h3>" ;


                   }
?>
   <form method="post">
num1:<input type="text" name="num1" />
num2:<input type="text" name="num2" />
<input type="submit"  />
</form>
   <hr>
<?php

echo "<h5>NUMBER&nbsp;2</h5>";
 /* READS BLOCK
	$file = "file.txt";
	$temp = fopen($file, "r");
	$content= fread($temp, filesize ($file));
	fclose($temp);
	
	echo $content; */
	
	
/* READS LINE BY LINE*/	
       function fonter ($i, $w){
         switch ($i){
            case 1:
                echo "<b>". $w . "</b>"; break;
            case 2:
                echo "<font color='green'>".$w."</font>"; break;
            case 3:
                echo "<u><i>" . $w."</u></i>"; break;
         }

       }

 $a = "wk2.txt";
$tem = fopen($a, "r");
$i = 1;



		while (!feof($tem)) {
              $e= fgets($tem);

		fonter($i, $e );
        echo "<br/>";
         $i++;
		}//ends While $tem

	fclose($tem);
?>


</body>
</html>
