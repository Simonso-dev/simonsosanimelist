<?php

include("validate.php");

$fileanime="anmie.txt";


if (isset($_POST["add"]))
{
    $animename=$_POST["animename"];
    $episodes=$_POST["episodes"];
    $score=$_POST["score"];

    $legalAnimename=validateAnimename($animename);
    $legalEpisodes=validateEpisodes($episodes);
    $legalScore=validateScore($score);

}
     if($legalAnimename && $legalEpisodes && $score)
      {

        $fileoperation="a";
        
        $line=$animename. ";" .$episodes. "\n";

        $file=fopen($fileanime, $fileoperation);

        fwrite($file, $line);
        
        fclose($file);
        
        print("Anmie has been registered");

      }




?>