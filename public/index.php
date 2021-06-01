<?php
include("header.php");
?>
<script>
if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
      navigator.serviceWorker.register('/sal/public/service-worker.js').then(function(registration) {
        // Registration was successful
        console.log('ServiceWorker registration successful with scope: ', registration.scope);
      }, function(err) {
        // registration failed :(
        console.log('ServiceWorker registration failed: ', err);
      });
    });
  }
</script>
<?php
include("readAnimelist.php");

/*      Søking i databasen
if(isset($_POST["searchbutton"])) {

  $search=$_POST["search"];
  $searchlength=strlen($search);

  $sqlQuery="SELECT Animename
             FROM Anime";

  $sqlResult=mysqli_query($conn, $sqlQuery) or die ("Not able to read data");
  $numrows=mysqli_num_rows($sqlResult);

  if($numrows==0) {
    print("0 hits in the search result");
  }
  else {

  }
}
*/

include("footer.php");
?>
