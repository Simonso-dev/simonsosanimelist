<?php

// This function selects all the columns in the Anime table
// and shows them dynamically in a listbox
function listboxAnime() {

    include("db.php");

    $query="SELECT * 
            FROM Anime 
            ORDER BY Animename;";
    
    $result=mysqli_query($conn,$query);

    $numRows=mysqli_num_rows($result);

    for($r=1; $r<=$numRows; $r++) {
            
            $row=mysqli_fetch_array($result);
            $animenr=$row["AnimeNr"];
            $animename=$row["Animename"];
            $episodes=$row["Episodes"];
            $score=$row["Score"];

            print("<option value='$animename'>$animename $episodes $score</option>");   
       }
}
// Searches for users in the database.
// When it finds a match it prints out a new form.
// Where you can grant or revoke admin access from a user.
function searchUsers() {

 if(isset($_POST["search"])) {

     $search=$_POST["searchUsers"];

     include("db.php");

     $query="SELECT Username, is_admin
             FROM Users
             WHERE Username LIKE '$search';";
     
     $result=mysqli_query($conn,$query);

     $numRows=mysqli_num_rows($result);

     if($numRows==0) {
          print("<div class='Msg'>no matching user</div>");
     }
     else {

          for($r=1; $r<=$numRows; $r++) {
      
               $row=mysqli_fetch_array($result);
               $username=$row["Username"];
               $isAdmin=$row["is_admin"];
          }
          
          $grantAdmin="<input type='submit' name='revokeAdmin' value='Revoke' class='revokeAdmin'>";
          $adminTxt="Yes";
          if($isAdmin==0) {
               $adminTxt="No";
               $grantAdmin="<input type='submit' name='grantAdmin' value='Grant' class='grantAdmin'>";
          }

          print("<form method='post' name='grantAndRevokeAdminForm'>");
          print("<input type='hidden' name='user' value='$username' readonly><p>Username: $username</p>");
          print("Admin: $adminTxt $grantAdmin");
          print("</form>");
     }
 }

}
// Checks if a user is logged in or not.
// Then it prints out if you're logged in or not in the navigation bar
function loggedIn() {

     @$loggedinUser=$_SESSION["username"];
     
     if(!$loggedinUser) {
          print("<li><a class='login' href='login.php'>Login</a></li>");
     }
     else {
          print("<li><a class='logout' href='logout.php'>Logout</a></li>");
     } 
}
// Checks if your logged in or not 
// and prints it in the user info section on the settings page.
// If you're logged in it will display your username and if you're an admin.
function userInfo() {
     
     @$loggedinUser=$_SESSION["username"];

     include("db.php");

     $query="SELECT Username, is_admin
             FROM Users
             WHERE Username='$loggedinUser';";
     
     $result=mysqli_query($conn,$query);

     $numRows=mysqli_num_rows($result);

     for($r=1; $r<=$numRows; $r++) {
      
          $row=mysqli_fetch_array($result);
          $username=$row["Username"];
          $isAdmin=$row["is_admin"];
     }

     if(!$loggedinUser) {

          print("<p>Username: *</p>");
          print("<p>Admin: *</p>");
          print("<p>You are not logged in</p>");
          print("<or>Click <a href='login.php'>HERE</a> to login, or <a href='registerUser.php'>HERE</a> to register.</p>");
     }
     else {

          $adminTxt="Yes";
          if(@$isAdmin==0) {
               $adminTxt="No";
          }

          print("<p>Username: $loggedinUser</p>");
          print("<p>Admin: $adminTxt</p>");
     }
}
?>