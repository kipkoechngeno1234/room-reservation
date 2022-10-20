<?php
session_start();
$phone =$_SESSION['customer'];
echo"you are logged in as".$phone;
?>

<!DOCTYPE html>
  <html>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <body>
    <div class="ch">
  <ul>
  	<li><a>Home</a></li>
  	<ul>
   </ul>
  </li>
  <li><a href="book.php">Book</a>
    
 </li>
  	<li><a href="viewbook.php">View booking</a>
    
    </li>
    <li><a href="release.php">Release Room</a>
    
    </li>
  	<li><a href="logout.php">Logout</a></li>
  </ul>
  </div>
  </body>
  </html>    