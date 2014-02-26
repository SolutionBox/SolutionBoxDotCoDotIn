<?php
$username = "a9358409_sbst";
$password = "sbst1108";
$hostname = "mysql16.000webhost.com"; 

$link = mysql_connect($hostname, $username, $password);
if (!$link) {
    die('Not connected : ' . mysql_error());
}

// make foo the current db
$db_selected = mysql_select_db('a9358409_sbst', $link);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
?>