<?php
include("header.php");
?>
 <form method="post" id="deleteAnimeform" name="deleteAnimeform">
  Anime <select name="animename">
         <?php print("<option>Choose Anime</option>"); listboxAnime(); ?>
        </select><br>
         <input type="submit" value="Delete anime" name="deleteanime" id="deleteAnime">
 </form>
<?php

if(isset($_POST["deleteanime"])) {

    $animename=$_POST["animename"];

    include("db.php");

    $query="SELECT Username, is_admin 
            FROM Users
            WHERE Username='$loggedinUser' AND is_admin=1;";

    $result=mysqli_query($conn,$query);

    $numRows=mysqli_num_rows($result);

    for($r=1; $r<=$numRows; $r++) {
  
    $row=mysqli_fetch_array($result);
    $username=$row["Username"];
    $isAdmin=$row["is_admin"];

    }  

    if(!@$isAdmin) {
      print("<div class='Msg'>You don't have permission to delete anime</div>");
    }
    if(@$isAdmin) {

    if(!$animename) {

        print("<div class='Msg'>You haven't picked an anime</div>");
    }
    else {
        
        include("db.php");

        $sqlQuery="DELETE FROM Anime
                   WHERE Animename='$animename';";
        
        mysqli_query($conn,$sqlQuery) or die ("Can't delete data");

        print("<div class='Msg'>Anime $animename has been deleted</div>");
    }
  }
}
include("footer.php");
?>