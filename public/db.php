<?php
$url = parse_url(getenv("mysql://b5b71d88dff84a:40f8dada@eu-cdbr-west-03.cleardb.net/heroku_bec9e21fd1904b0?reconnect=true"));

$server = $url["eu-cdbr-west-03.cleardb.net"];
$username = $url["b5b71d88dff84a"];
$password = $url["40f8dada"];
$db = substr($url["heroku_bec9e21fd1904b0"], 1);

$conn = new mysqli($server, $username, $password, $db) or die("Not able to contact the database-server");


console_log($conn);

function console_log( $data ){
    echo '<script>';
    echo 'console.log('. json_encode( $data ) .')';
    echo '</script>';
  }
?>


