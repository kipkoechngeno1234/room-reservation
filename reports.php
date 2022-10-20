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
   

$pending = "SELECT phone,room,date,status FROM book";// ORDER by name'; 
$query =mysqli_query($con,$pending);
     
    // Send the query to MySQL     
	$result = $con->query($pending, MYSQLI_STORE_RESULT);  
    // Iterate through the result set  
         echo'<h1><a href="admin.html">HOME</a>&nbsp&nbsp<u>ROOMS</h1></u>';	
         echo'<h1>'; 
	while(list($phone,$room,$date,$status) = $result->fetch_row()) 
    printf("PHONE: %s<br> ROOM: %s<br>DATE: %s<br> STATUS: %s<br><hr> ",$phone,$room,$date,$status);
        
?>