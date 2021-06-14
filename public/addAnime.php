<?php
include("header.php");
?>
  <form method="post" id="registerAnime" name="register anime">
    <p>Anime name</p><input type="text" id="animename" name="animename"><br>
    <p>Episodes</p><input type="text" id="episodes" name="episodes"><br>
    <p>Score</p><input type="text" id="score" name="score"><br>
    <input type="submit" value="Add" id="add" name="add">
  </form>
<?php
include("db.php");
include("validate.php");


if (isset($_POST["add"])) {

    $query="SELECT Username, is_admin 
            FROM Users
            WHERE Username='$loggedinUser' AND is_admin=1;";

    $result=mysqli_query($conn,$query);

    $numRows=mysqli_num_rows($result);

    for($r=1; $r<=$numRows; $r++) {
  
    $row=mysqli_fetch_array($result);
    $username=$row["Username"];
    $isAdmin=$row["is_admin"];

    }  

    if(!@$isAdmin) {
      print("<div class='Msg'>You don't have permission to add anime</div>");
    }
    if(@$isAdmin) {

      $animename=$_POST["animename"];
      $episodes=$_POST["episodes"];
      $score=$_POST["score"];

      $legalAnimename=validateAnimename($animename);
      $legalEpisodes=validateEpisodes($episodes);
      $legalScore=validateScore($score);

      if($legalAnimename && $legalEpisodes && $score) {

          $query="INSERT INTO Anime (Animename, Episodes, Score)
                    VALUES ('$animename','$episodes','$score');";

          $result=mysqli_query($conn, $query) or die ("Not able to register data");

          print("<div class='Msg'>Anmie has been registered</div>");
        }
    }
}
include("footer.php");
?>