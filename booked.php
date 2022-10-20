<html>
    <head>
        <style>
            .body{
                
            background-color: lightgreen;
            color: black;
             
            }
            </style>
    </head>
<body class="body">
</body >
</html>
<?php
  

    $con = mysqli_connect('localhost','root','','hotel');
    //mysqli_select_db($con,'fraud');
   

$pending = "SELECT room FROM rooms WHERE status='booked'";// ORDER by name'; 
$query =mysqli_query($con,$pending);
     
    // Send the query to MySQL     
	$result = $con->query($pending, MYSQLI_STORE_RESULT);  
    // Iterate through the result set  
         echo'<h1><a href="manager.html">HOME</a>&nbsp&nbsp<u>BOOKED HOUSES</h1></u>';	
         echo'<h1>'; 
	while(list($room) = $result->fetch_row()) 
    printf(" ROOM NUMBER: %s<br><hr> ", $room);
        
?>