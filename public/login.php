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

    <link rel="stylesheet" href="styles/login.css">

    <title>Simonso's Anime List</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
  <div class="container">

 <header></header>
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
     <footer>Created by Simonso </footer>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

if(isset($_POST["login"])) {

    include("db.php");

    $username=$_POST["username"];
    $password=$_POST["password"];

    $stmt=$conn->prepare("SELECT Username, Password
                          FROM Users
                          WHERE Username=?;");
    $stmt->bind_param("s",$username);
  
    $stmt->execute();
    $stmt->store_result();
  
    $stmt->bind_result($uname, $hasedPwd);
  
    if($stmt->num_rows==1) {
        $stmt->fetch();
        if(password_verify($password,$hasedPwd)) {
          session_start();
          $_SESSION["username"]=$uname;

          print("<meta http-equiv='refresh' content='0;url=index.php'>");
        }
    }
    else{
      print("<div class='error'>Wrong username or password</div>");
    }

}
?>
</div>
