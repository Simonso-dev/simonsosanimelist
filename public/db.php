<?php
$url = parse_url(getenv("mysql://b5b71d88dff84a:40f8dada@eu-cdbr-west-03.cleardb.net/heroku_bec9e21fd1904b0?reconnect=true"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);
?>


