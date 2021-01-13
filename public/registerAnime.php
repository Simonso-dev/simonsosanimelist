<?php


$fileanime="anmie.txt";


if (isset($_POST["add"]))
{
    $animename=$_POST["animename"];
    $episodes=$_POST["episodes"];
}
     if($legalanimename && $legalepisodes)
      {

        $fileoperation="a";
        
        $line=$animename. ";" .$episodes. "\n";

        $file=fopen($fileanime, $fileoperation);

        fwrite($file, $line);
        
        fclose($file);
        
        print("Anmie has been registered");

      }




?>