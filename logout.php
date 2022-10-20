<?php
session_start();
$phone =$_SESSION['customer'];

session_destroy();
header("refresh:0;url=ui.html")


?>