<?php
	include_once "wk4constants.php";

	mysql_connect(db_server,db_user,db_pwd) or die("Cannot Connect to server");

        mysql_select_db(db_name) or die("Cannot Connect to database");

?>