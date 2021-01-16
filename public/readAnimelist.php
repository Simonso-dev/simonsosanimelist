<?php


$fileanime="anime.txt";


if(!$fileanime)
  {
      print("This file doesn't exist");
  }

$fp=fopen("anime.txt", "r");

if(!$fp)
  {
   print("File cannot be read");   
  }
  echo "<table>";
  $counter=1;
  while(!feof($fp))
  {
      $anime=fgets($fp);

      if(strlen($anime)>0)
        {
          echo "<tr><td>$counter</td>";
          echo "<td>$anime</td></tr>";
          $counter++;
        }
      
  }
      echo "</table>";

  fclose($fp);

?>