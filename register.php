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
$password=$_POST['password'];

$sql="INSERT INTO customers(name,phone,id,password) VALUES('$name','$phone','$id','$password')";

if(!mysqli_query($con,$sql))
{
    echo "Failed to register";
    header("refresh:1;url=Register.html");
}
else
{
    echo"Registration Successful";
     header("refresh:1;url=loginpage.html");
}
//header("refresh:0;url=loginpage.html");
?>