<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

include("functions.php");

session_start();
@$loggedinUser=$_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>

    <link rel="manifest" href="manifest.json">

    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="application-name" content="SAL">
    <meta name="apple-mobile-web-app-title" content="SAL">
    <meta name="theme-color" content="#FFFFFF">
    <meta name="msapplication-navbutton-color" content="#FFFFFF">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="msapplication-starturl" content="/">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" sizes="192x192" href="images/SAL LOGO v2.png">
    <link rel="apple-touch-icon" type="image/png" sizes="192x192" href="images/SAL LOGO v2.png">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/addAnime.css">
    <link rel="stylesheet" href="styles/deleteAnime.css">

    <title>Simonso's Anime List</title>

    <script src="registerSW.js"></script>
  </head>
         <body>
            <div class="container">
             <header>
              <h1>Simonso's Anime List</h1>
               <div class="logo">
                <img src="images/SAL LOGO v2.jpg" alt="SAL logo">
               </div>
          <!-- <input type="text" name="search" id="search" value="Search">
                <input type="submit" name="searchbutton" id="searchbutton"> -->
                <a class="logout" href="logout.php">Logout</a>
                <a class="login" href="login.php">Login</a>
                <?php loggedIn(); ?> 
             </header>
              <nav>
                <ul>
                 <li><a href="index.php">Home</a></li>
                 <li><a href="addAnime.php">Add</a></li>
                 <li><a href="deleteAnime.php">Delete</a></li>
                </li>
              </nav>
                <main>