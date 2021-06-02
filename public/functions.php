<?php

// This function gets all the columns in the Anime table
// and shows them dynamically in a listbox
function listboxAnime(){

    include("db.php");

    $sqlQuery="SELECT * 
               FROM Anime 
               ORDER BY Animename;";
    
    $sqlResult=mysqli_query($conn,$sqlQuery);

    $numRows=mysqli_num_rows($sqlResult);

    for($r=1; $r<=$numRows; $r++){
            
            $row=mysqli_fetch_array($sqlResult);
            $animenr=$row["AnimeNr"];
            $animename=$row["Animename"];
            $episodes=$row["Episodes"];
            $score=$row["Score"];

            print("<option value='$animename'>$animename $episodes $score</option>");   
       }
}
?>