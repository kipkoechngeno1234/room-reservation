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



$pending = "SELECT room,status FROM rooms WHERE room='$room' AND status='booked'";// ORDER by name'; 
$query =mysqli_query($con,$pending);
if(mysqli_num_rows($query)==1)
{
echo "This room is booked";
header("refresh:1;url=book.php");
die();
}

$sql="INSERT INTO book(room,phone,status) VALUES('$room','$phone','booked')" ;

$sql1="UPDATE rooms SET status='booked' WHERE room='$room'" ;

if(!(mysqli_query($con,$sql) && mysqli_query($con,$sql1)))
{
    echo "Failed to book";
    header("refresh:1;url=book.php");
}
else
{
	//$sqll =;
    echo"Book Successful";
     header("refresh:1;url=customer.php");
}
//header("refresh:0;url=loginpage.html");
?>