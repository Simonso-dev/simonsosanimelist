<?php
include("header.php");
?>


<h3>Login</h3>

<form id="loginform" name="loginform" method="post">

Username <input type="text" name="username" id="username"><br>

Password <input type="text" name="password" id="password"><br>

<input type="submit" name="login" id="login" value="Login"><br>

</from>

<?php

if(isset($_POST["login"]))
{
    include("check.php");

    $username=$_POST["username"];
    $password=$_POST["password"];

    if(!checkUsernamePassword($username,$password))
    {
          print("Wrong username or password <br>");
    }
    else
    {
         session_start();
         $_SESSION["username"]=$username;
         
         print("<meta http-equiv='refresh' content='0;url=index.php'>");
    }
}
include("footer.php");
?>