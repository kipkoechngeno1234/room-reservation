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
 
$phone=$_POST['phone'];
$room=$_POST['room'];


$pending = "SELECT room,status FROM book WHERE room='$room' AND status='booked'";// ORDER by name'; 
$query =mysqli_query($con,$pending);
if(mysqli_num_rows($query)==1)
{
echo "This room is booked";
die();
}

$sql="INSERT INTO book(phone,room,status) VALUES('$phone','$room','booked')";

if(!mysqli_query($con,$sql))
{
    echo "Failed to book";
    header("refresh:1;url=manager.html");
}
else
{
    echo"Book Successful";
     header("refresh:1;url=manager.html");
}
//header("refresh:0;url=loginpage.html");
?>