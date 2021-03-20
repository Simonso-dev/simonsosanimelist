<?php
$url = parse_url(getenv("mysql://b5b71d88dff84a:40f8dada@eu-cdbr-west-03.cleardb.net/heroku_bec9e21fd1904b0?reconnect=true"));

$server = "eu-cdbr-west-03.cleardb.net";
$username = "b5b71d88dff84a";
$password = "40f8dada";
$db = "heroku_bec9e21fd1904b0";

$conn = new mysqli($server, $username, $password, $db) or die("Not able to contact the database-server");
?>


