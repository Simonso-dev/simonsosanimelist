

<table>

<tr name="main-row"><th>Anime Name</th><th>Episdoes</th><th>Score</th></tr>

</table>


<?php

include("db.php");

$sqlQuery="SELECT *
           FROM Anime
           GROUP BY Animename;";

$sqlResult=mysqli_query($db, $sqlQuery);
$numRows=mysqli_num_rows($sqlResult);

for($r=1;$r<=$numRows;$r++)
{
  $row=mysqli_fetch_array($sqlResult);
  $animenr=$row["AnimeNr"];
  $animename=$row["AnimeName"];
  $episodes=$row["Episodes"];
  $score=$row["Score"];

  print("<tr><td>$animenr</td> <td>$animename</td> <td>$episodes</td> <td>$score</td></tr>");
}













?>