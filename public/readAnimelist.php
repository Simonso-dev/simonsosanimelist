<?php

if(!fileanime("anime.txt"))
  {
      print("This file doesn't exist");
  }

$fp=fopen("anime.txt". "r");

if(!$fp)
  {
   print("File cannot be read");   
  }
  echo "<table border =4>";
  $counter=1;
  while(!feof($fp))
  {
      $anime=fgets($fp);
      echo "<tr><td>$counter</td>";
      echo "<td>$anime</td>";
      $counter++;
  }
      echo "</table>";

  fclose($fp);

?>