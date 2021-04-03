<?php
include("header.php");

?>
                

            


<?php 
include("db.php");
include("readAnimelist.php");
include("validate.php");


if (isset($_POST["add"]))
{
    $animename=$_POST["animename"];
    $episodes=$_POST["episodes"];
    $score=$_POST["score"];

    $legalAnimename=validateAnimename($animename);
    $legalEpisodes=validateEpisodes($episodes);
    $legalScore=validateScore($score);


     if($legalAnimename && $legalEpisodes && $score)
      {

        $sqlQuery="INSERT INTO Anime (Animename, Episodes, Score)
                    VALUES ('$animename','$episodes','$score');";

        $sqlResult=mysqli_query($conn, $sqlQuery) or die ("Not able to register data");

        
        print("Anmie has been registered");

      }
}
include("footer.php");
?>