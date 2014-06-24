<?php

$host="mysql.hostinger.in";
$username="u627003911_gomal";
$password="power123";

$db="u627003911_gomal";
$table="user";
mysql_connect("$host","$username","$password") or die(mysql_error());
mysql_select_db("$db") or die(mysql_error());

?>