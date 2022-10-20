<?php
session_start();
$phone =$_SESSION['customer'];
$con= mysqli_connect('localhost','root','','hotel');
if(!$con)
{
    echo'not connected to the server';
}
if(!mysqli_select_db($con,'hotel'))
{
 echo'not connected to the database';
}
$room=$_POST['room'];
   $sql1 = "SELECT phone,room FROM book WHERE phone='$phone' AND room='$room'"; 
   $res =mysqli_query($con,$sql1);


   if(mysqli_num_rows($res)==0)
   {
   	echo "Invalid room number";
   	 header("refresh:1;url=release.php");
   	die();
   }

$sql="DELETE FROM book WHERE phone ='$phone' AND room='$room'";
$sql2="UPDATE rooms SET status='unbooked' WHERE room='$room'" ;

if(!(mysqli_query($con,$sql) && mysqli_query($con,$sql2)))
{
    echo "Failed to release";
    header("refresh:1;url=release.php");
}
else
{
    echo"Released Successfuly";
     header("refresh:1;url=customer.php");
}
//header("refresh:0;url=loginpage.html");
?>