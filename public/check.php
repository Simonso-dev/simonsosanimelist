<?php

function checkUsernamePassword($username,$password)
{
        include("db.php");

        $legalUser=true;

        $sqlQuery="SELECT *
                   FROM Users
                   WHERE username='$username';";

        $sqlResult=mysqli_query($conn, $sqlQuery);

        if(!$sqlResult)
         {
              $legalUser=false;
         }
        else
          {
            $row=mysqli_fetch_array($sqlResult);
            $storedPassword=$row["password"];

            if($password!=$storedPassword)
             {
                $legalUser=false;
             }
          }
        return $legalUser;
}
?>
