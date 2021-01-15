<?php

include("validate.php");

$fileanime="anime.txt";


if (isset($_POST["add"]))
{
    $animename=$_POST["animename"];
    $episodes=$_POST["episodes"];

    $legalAnimename=validateAnimename($animename);

}
     if($legalAnimename && $legalEpisodes)
      {

        $fileoperation="a";
        
        $line=$animename. ";" .$episodes. "\n";

        $file=fopen($fileanime, $fileoperation);

        fwrite($file, $line);
        
        fclose($file);
        
        print("Anmie has been registered");

      }




?>
