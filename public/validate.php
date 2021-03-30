<?php


function validateAnimename($animename)
{
     $legalAnimename=true;

    if(!ctype_alpha($animename))
       {
         $legalAnimename=false;
         print("Anime name isn't filled out </br>"); 
       }
    
    return $legalAnimename;
}



function validateEpisodes($episodes)
{
 
    $legalEpisodes=true;

    if(!ctype_digit($episodes))
      {
          $legalEpisodes=false;
          print("Episodes must contain numbers only </br>");
      }

    return $legalEpisodes;
}


function validateScore($score)
{
   
    $legalScore=true;

    if(!ctype_digit($score))
      {
          $legalScore=false;
          print("Score must contain numbers only </br>");
      }

    return $legalScore;
}



?>