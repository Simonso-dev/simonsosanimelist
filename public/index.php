<?php
include("header.php");
?>
                

               <form method="post" action="registerAnime.php" id="register anime" name="register anime">

                Anime name<input type="text" id="animename" name="animename">

                Episodes<input type="text" id="episodes" name="episodes">

                Score <input type="text" id="score" name="score">

                <input type="submit" value="Add" id="add" name="add">

               </form>


<?php 
include("readAnimelist.php");


include("footer.php")
?>