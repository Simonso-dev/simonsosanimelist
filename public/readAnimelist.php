<?php

include("db.php");

print("<table>");
print("<tr><th>AnimeNr</th><th>Anime Name</th><th>Episodes</th><th>Score</th></tr>");

$sqlQuery="SELECT *
           FROM Anime
           GROUP BY Animename;";

$sqlResult=mysqli_query($conn,$sqlQuery);
$numRows=mysqli_num_rows($sqlResult);

for($r=1;$r<=$numRows;$r++) {
  
  $row=mysqli_fetch_array($sqlResult);
  $animenr=$row["AnimeNr"];
  $animename=$row["Animename"];
  $episodes=$row["Episodes"];
  $score=$row["Score"];

  print("<tr><td>$animenr</td> <td>$animename</td> <td>$episodes</td> <td>$score</td></tr>");
}
print("</table>");
?>
