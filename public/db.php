<?php
$url = parse_url(getenv("mysql://ofe7c7506pnk3swy:z4ypie1ranjpaa1x@eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com:3306/o9d6d8m1y5kentde"));

$server = "eporqep6b4b8ql12.chr7pe7iynqr.eu-west-1.rds.amazonaws.com";
$username = "ofe7c7506pnk3swy";
$password = "z4ypie1ranjpaa1x";
$db = "o9d6d8m1y5kentde";

$conn = new mysqli($server, $username, $password, $db) or die("Not able to contact the database-server");
?>