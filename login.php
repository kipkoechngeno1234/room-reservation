<?php
   define('DB_SERVER','localhost');
   define('DB_USERNAME','root');
   define('DB_PASSWORD','');
   define('DB_DATABASE','hotel');
   $db = mysqli_connect('localhost','root','','hotel');
 
   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
      // username and password sent from form 
      
      $phone = mysqli_real_escape_string($db,$_POST['phone']);
      $password = mysqli_real_escape_string($db,$_POST['password']);
	  
      
      $sql = "SELECT phone,password FROM customers WHERE phone='$phone' and password='$password'"; 
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);
    
	 if($count == 1) 
      {	
         print 'success';
		   
		    header("refresh:0;url=customer.php");
        session_start();
        $_SESSION['customer'] =$phone;
        }
        if($count != 1) 
        {	 
          print'fail';
          header("refresh:0;url=loginpage.html");
          }
       //  die();
		
         }

      
   else
       {
		    
        header("refresh:1;url=loginpage.html");
        print'incorrect username or password';
      }
   
?>