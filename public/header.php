<?php
session_start();
@$loggedinUser=$_SESSION["username"];

if(!$loggedinUser)
{
  // print("Not logged in");
  // print("<meta http-equiv='refresh' content='0;url=index.php'>");
}
?>
<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" href="./styles/main.css">

    <title>Simonso's Anime List</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     

</head>
         <body>

<div class="container">

                <header>

                <h1>Simonso's Anime List</h1>

                <p><a href="login.php">Login</a></p>
                <p><a href="logout.php">Logout</a></p>

                </header>

              <nav>
                <form method="post" id="register anime" name="register anime">

                Anime name<input type="text" id="animename" name="animename">

                Episodes<input type="text" id="episodes" name="episodes">

                Score <input type="text" id="score" name="score">

                <input type="submit" value="Add" id="add" name="add">

                </form>
              </nav>

                <main>