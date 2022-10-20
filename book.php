<?php
session_start();
$phone =$_SESSION['customer'];

?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.submit
		{
	border:none;
	outline: none;
	height: 40px;
	width: 200px;
	background:#fb2525;
	color: #fff;
	font-size: 18px;
	border-radius: 20px;
       }
       ul
       {
       	height: 90px;
       	background-color: maroon;
       	color: white;
       	font-size: 30px;
       }
	</style>
	<title>book</title>
</head>
<body>
	<ul><h1>ROOM RESERVATION SYSTEM</h1></ul>
<form method="post" action="booking.php">
	<figure>
		<img src="room1.jpg" width="250px" height="200px">
		<figcaption>Location: Mombasa beach <br>Price: 6000 per night</figcaption>
		<input type="radio" name="room" value="1">
	</figure> <br>


    <figure>
		<img src="room2.jpg" width="250px" height="200px">
		<figcaption>Location: Nyali Price: 8000 per night</figcaption>
		<input type="radio" name="room" value="2">
	</figure> <br>

	 <figure>
		<img src="room3.jpg" width="250px" height="200px">
		<figcaption>Location: Mtwapa Price: 8000 per night</figcaption>
		<input type="radio" name="room" value="3">
	</figure> <br>
	 <figure>
		<img src="room4.jpg" width="250px" height="200px">
		<figcaption>Location: Kilifi Price: 8000 per night</figcaption>
		<input type="radio" name="room" value="4">
	</figure> <br>
	<input type="submit" class="submit" name="" value="Book">

</form>
</body>
</html>