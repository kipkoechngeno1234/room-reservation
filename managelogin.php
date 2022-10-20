<?php
   define('DB_SERVER','localhost');
   define('DB_USERNAME','root');
   define('DB_PASSWORD','');
   define('DB_DATABASE','hotel');
   $db = mysqli_connect('localhost','root','','hotel');
 
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['password']);
	  
      
      $sql = "SELECT username,password FROM manager WHERE username='$username' and password='$password'"; 
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
    
	 if($count == 1) 
      {	
         print 'success';
		   
		    header("refresh:0;url=manager.html");
        
        }
        if($count != 1) 
        {	 
          print'fail';
          header("refresh:0;url=managerlogin.html");
          }
       //  die();
		
         }

      
   else
       {
		    
        header("refresh:1;url=managerlogin.html");
        print'incorrect username or password';
      }
   
?>