<!DOCTYPE html>
<html>
 <head>
    <link rel="stylesheet" href="styles/login.css">

    <title>Simonso's Anime List</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
  <div class="container">

 <header></header>
  <div class="side1"></div>
   <main>
    <form id="loginform" name="loginform" method="post">
     <h3>Login</h3>
      Username <input type="text" name="username" id="username"><br>
      Password <input type="password" name="password" id="password"><br>
                <input type="submit" name="login" id="login" value="Login"><br>
    </form>
     <p id="newuser">
      New user? <br>
      Click <a href="registerUser.php">HERE</a> to register
    </p>
   </main>
    <div class="side2"></div>
     <footer>Created by Simonso </footer>
<?php

if(isset($_POST["login"])){

    include("check.php");

    $username=$_POST["username"];
    $password=$_POST["password"];

    if(!checkUsernamePassword($username,$password)) {

          print("<div class='error'>Wrong username or password</div><br>");

    }
    else {

         session_start();
         $_SESSION["username"]=$username;

         print("<meta http-equiv='refresh' content='0;url=index.php'>");
    }
}
?>
</div>
