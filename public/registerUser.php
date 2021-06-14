<!DOCTYPE html>
<html>
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

    <link rel="stylesheet" href="styles/registerUser.css">

    <title>Simonso's Anime List</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>

<div class="container">
 <header></header>
   <main>
    <form id="registerform" name="registerform" method="post">
     <h3>Register</h3>
      Username <input type="text" name="username" id="username"><br>
      Password <input type="password" name="password" id="password"><br>
                <input type="submit" name="register" id="register" value="Register"><br>
    </form>
    <p id="registered">
      Allready registered? <br>
      Click <a href="login.php">HERE</a> to login
    </p>
   </main>
     <footer>Created by Simonso </footer>
<?php
include("db.php");

if(isset($_POST["register"])) {

    $username=$_POST["username"];
    $password=$_POST["password"];

    if(!$username || !$password) {
        
        print("Username and password is required");
    }
    else {

        $query="SELECT *
                 FROM Users
                 WHERE Username='$username';";
        $result=mysqli_query($conn,$query);

        if(mysqli_num_rows($result)!=0) {
            print("Username is already registered");
        }
        else {

            $password=password_hash($password, PASSWORD_DEFAULT);

            $query="INSERT INTO Users (Username, Password, is_admin)
                    VALUES ('$username','$password','0');";
            mysqli_query($conn, $query);

            print("You're now registered with the username: $username");
        }
    }
}
?>
</div>