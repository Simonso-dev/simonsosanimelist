<?php

include("validate.php");

include("db.php");


if (isset($_POST["add"]))
{
    $animenr=$_POST["animenr"];
    $animename=$_POST["animename"];
    $episodes=$_POST["episodes"];
    $score=$_POST["score"];

    $legalAnimename=validateAnimename($animename);
    $legalEpisodes=validateEpisodes($episodes);
    $legalScore=validateScore($score);

}
     if($legalAnimename && $legalEpisodes && $score)
      {

        $sqlQuery="INSERT INTO Anime (Animename, Episodes, Score)
                    VALUES ('$animename','$episodes','$score');";

        $sqlResult=mysqli_query($conn, $sqlQuery);

        
        print("Anmie has been registered");

      }
?>
