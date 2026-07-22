<?php

$conn = mysqli_connect("localhost", "root", "", "meet_7194");
 $sql = "DELETE FROM `users` WHERE  id=2";
 mysqli_query($conn,$sql);

  echo "record Deted"
?>