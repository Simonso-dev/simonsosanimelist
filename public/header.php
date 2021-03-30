<?php
session_start();
@$loggedinUser=$_SESSION["username"];

if(!$loggedinUser)
{
   print("Not logged in");
  // print("<meta http-equiv='refresh' content='0;url=index.php'>");
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Simonso's Anime List</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     

</head>
         <body>
                <header>

                <h1>Simonso's Anime List</h1>

                </header>