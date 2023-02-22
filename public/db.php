<?php
$url = parse_url(getenv(""));

$server = "";
$username = "";
$password = "";
$db = "";

$conn = new mysqli($server, $username, $password, $db) or die("Not able to contact the database-server");
?>
