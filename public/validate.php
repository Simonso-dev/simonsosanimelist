<?php


function validateAnimename($animename)
{
     $legalAnimename=true;

    if(!$animename)
       {
         $legalAnimename=false;
         print("Anime name isn't filled out")  
       }
    
    return $legalAnimename;
}



function validateEpisodes($episodes)
{
 
    $legalEpisodes=true;

    if(!ctype_digit($episodes))
      {
          $legalEpisodes=false;
          print("Must contain numbers only");
      }

    return $legalEpisodes;
}


function validateScore($score)
{
   
    $legalScore=true;

    if(!ctype_digit($score)!=3)
      {
          $legalScore=false;
          print("Must contain numbers between 1 and 10 only")
      }

    return $legalScore;
}



?>