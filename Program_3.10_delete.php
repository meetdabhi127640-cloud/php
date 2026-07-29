<?php

$conn = mysqli_connect("localhost","root","","meet_7194");

$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM users WHERE id=$id");

header("Location: Program_30.php");

?>