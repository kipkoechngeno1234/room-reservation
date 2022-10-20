<html>
    <head>
        <style>
            .body{
                
            background-color: black;
            color: white;
             
            }
            </style>
    </head>
<body class="body">
</body >
</html>
<?php
 
     session_start(); 
     $phone = $_SESSION['customer'];

    $con = mysqli_connect('localhost','root','','hotel');
    //mysqli_select_db($con,'fraud');
   

$pending = "SELECT room,date,status FROM book WHERE phone='$phone' AND status='booked'";// ORDER by name'; 
$query =mysqli_query($con,$pending);
     
    // Send the query to MySQL     
	$result = $con->query($pending, MYSQLI_STORE_RESULT);  
    // Iterate through the result set  
         echo'<h1><a href="customer.php">HOME</a>&nbsp&nbsp<u>MY BOOKINGS</h1></u>';	
         echo'<h1>'; 
	while(list($room,$date,$status) = $result->fetch_row()) 
    printf("ROOM NUMBER: %s<br> DATE: %s<br>STATUS: %s<br><hr> ", $room,$date,$status);
        
?>