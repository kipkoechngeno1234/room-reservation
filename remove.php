<?php
$con= mysqli_connect('localhost','root','','hotel');
if(!$con)
{
    echo'not connected to the server';
}
if(!mysqli_select_db($con,'hotel'))
{
 echo'not connected to the database';
}
$username=$_POST['username'];
   $sql1 = "SELECT username FROM manager WHERE username='$username'"; 
   $res =mysqli_query($con,$sql1);


   if(mysqli_num_rows($res)==0)
   {
   	echo "Invalid username";
   	 header("refresh:1;url=remove.html");
   	die();
   }

$sql="DELETE FROM manager WHERE username='$username'";

if(!mysqli_query($con,$sql))
{
    echo "Failed to delete()";
    header("refresh:1;url=remove.html");
}
else
{
    echo"Deletion Successful";
     header("refresh:1;url=admin.html");
}
//header("refresh:0;url=loginpage.html");
?>