<?php
include("header.php");
?>
 <form method="post" id="deleteAnimeform" name="deleteAnimeform">
  Anime <select name="animename">
         <?php print("<option>Choose Anime</option>");
            include("functions.php"); listboxAnime(); ?>
        </select><br>
         <input type="submit" value="Delete anime" name="deleteanime" id="deleteAnime">
 </form>
<?php

if(isset($_POST["deleteanime"])) {

    $animename=$_POST["animename"];

    if(!$animename) {

        print("You haven't picked an anime");
    }
    else {
        
        include("db.php");

        $sqlQuery="DELETE FROM Anime
                   WHERE Animename='$animename';";
        
        mysqli_query($conn,$sqlQuery) or die ("Can't delete data");

        print("Anime $animename has been deleted<br>");
    }
}
include("footer.php");
?>