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
$name=$_POST['name'];
$phone=$_POST['phone'];
$id=$_POST['id'];
$username =$_POST['username'];
$password=$_POST['password'];

$sql="INSERT INTO manager(name,phone,id,username,password) VALUES('$name','$phone','$id','$username','$password')";

if(!mysqli_query($con,$sql))
{
    echo "Failed to register";
    header("refresh:1;url=Hotelmanagerregistration.html");
}
else
{
    echo"Registration Successful";
     header("refresh:2;url=admin.html");
}
//header("refresh:0;url=loginpage.html");
?>