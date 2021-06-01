<?php
session_start();
@$loggedinUser=$_SESSION["username"];

if(!$loggedinUser) {
  // print("Not logged in");
  // print("<meta http-equiv='refresh' content='0;url=index.php'>");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/addAnime.css">
    <link rel="stylesheet" href="styles/deleteAnime.css">

    <title>Simonso's Anime List</title>
    <link rel="icon" src="/sal/public/images/SAL LOGO v2.jpg">
  </head>
         <body>
            <div class="container">
             <header>
              <h1>Simonso's Anime List</h1>
          <!-- <input type="text" name="search" id="search" value="Search">
                <input type="submit" name="searchbutton" id="searchbutton"> -->
                <!--    <p><a href="logout.php">Logout</a></p>
                <p><a href="login.php">Login</a></p> -->
               <div class="logo">
                <img src="/sal/public/images/SAL LOGO v2.jpg" alt="SAL logo">
               </div>
             </header>
              <nav>
                <ul>
                 <li><a href="index.php">Home</a></li>
                 <li><a href="addAnime.php">Add</a></li>
                 <li><a href="deleteAnime.php">Delete</a></li>
                </li>
              </nav>
               <div class="side1"></div>
                <main>
