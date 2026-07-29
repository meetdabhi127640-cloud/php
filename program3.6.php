<?php
session_start();

$name1 =   $_SESSION['username'];
echo "welcome". "  " . $name1;

session_destroy();

?>