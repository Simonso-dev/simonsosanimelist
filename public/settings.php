<?php
include("header.php");
?>
<div class="settingsFlex">
  <div class="settingsCol">
   <div class="settingsBG">
    <h3>User info</h3>
     <?php userInfo(); ?>
   </div>
  </div>
 <div class="settingsCol">
  <div class="settingsBG">
   <h3>Search users</h3>
    <form method="post" name="searchUsersForm">
     <input type="text" name="searchUsers" class="searchUsers" placeholder="Search users">
     <input type="submit" name="search" class="search" value="Search">
    </form>
      <?php searchUsers(); ?>
  </div>
 </div>
 <div class="settingsCol">
  <div class="settingsBG">
   <h3>Privacy and Cookies</h3>
    <p> The only information stored about users are username and password. 
        Due to security reasons "for example if a hacker or someone other than me gets access to the database"
        users shouldn't pick an username nor password that can be identified with them.
        Even when passwords in the database is encrypted.
    </p>
     <p>The only cookies that are used is a session cookie wich stores your username.
        Reason for this so I can make functionalites such checking if a user is logged in or if a user is an admin.
     </p>
  </div>
 </div>
</div>
<?php
// This function grants admin privlliges to a user 
if(isset($_POST["grantAdmin"])) {
  
  include("db.php");
  
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
  print("<div class='Msg'>You don't have permission to grant admin</div>");
}
if(@$isAdmin) {
  
  $user=$_POST["user"];
  
       include("db.php");

       $query="UPDATE Users
               SET is_admin = 1
               WHERE Username='$user';";
  
       mysqli_query($conn,$query);

       print("<div class='Msg'>granted $user admin access");

  }

}
// This function revokes admin privlliges to a user 
if(isset($_POST["revokeAdmin"])) {

  include("db.php");

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
    print("<div class='Msg'>You don't have permission to revoke admin</div>");
  }
  if(@$isAdmin) {

    $user=$_POST["user"];

       include("db.php");

       $query="UPDATE Users
               SET is_admin = 0
               WHERE Username='$user';";
  
       mysqli_query($conn,$query);

       print("<div class='Msg'>revoked $user's admin access");

  }

}

include("footer.php");
?>