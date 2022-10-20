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
   

$pending = "SELECT name,phone,id FROM customers";// ORDER by name'; 
$query =mysqli_query($con,$pending);
     
    // Send the query to MySQL     
	$result = $con->query($pending, MYSQLI_STORE_RESULT);  
    // Iterate through the result set  
         echo'<h1><a href="admin.html">HOME</a>&nbsp&nbsp<u><br>CUSTOMERS</h1></u>';	
         echo'<h1>'; 
	while(list($name,$phone,$id) = $result->fetch_row()) 
    printf("NAME: %s<br> PHONE: %s<br>ID: %s<br> <hr> ", $name,$phone,$id );
        
?>