<?php

function validateAnimename($animename) {

     $legalAnimename=true;

    if(!preg_match("/^[a-zA-Z-' ]*$/", $animename)) {

         $legalAnimename=false;
         print("<div class='Msg'>Anime name can't contain special characters</div>");
       }

    return $legalAnimename;
}

function validateEpisodes($episodes) {

    $legalEpisodes=true;

    if(!ctype_digit($episodes)) {

          $legalEpisodes=false;
          print("<div class='Msg'>Episodes must contain numbers only</div>");
      }

    return $legalEpisodes;
}

function validateScore($score) {

    $legalScore=true;

    if(!ctype_digit($score)) {

          $legalScore=false;
          print("<div class='Msg'>Score must contain numbers only</div>");
      }

    return $legalScore;
}
?>
