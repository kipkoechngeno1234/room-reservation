<?php
   define('DB_SERVER','localhost');
   define('DB_USERNAME','root');
   define('DB_PASSWORD','');
   define('DB_DATABASE','fraud');
   $db = mysqli_connect('localhost','root','','fraud');
 
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']);
	  
      
      $sql = "SELECT username,password FROM logins WHERE username='$username' and password='$password'"; 
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
    
	 if($count == 1) 
      {	
        print'success';
		session_start(); 
        $_SESSION['userid'] = $username;	
		    header("refresh:0;url=customer.php");
        }
        if($count != 1) 
        {	 
          header("refresh:0;url=login.html");
          }
       //  die();
		
         }

      
   else
       {
		    
        header("refresh:1;url=login.html");
        print'incorrect username or password';
      }
   
?>