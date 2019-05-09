<?php

session_start();

echo "Welcome to page 01";

$_SESSION['firstname'] = 'Bob';
$_SESSION['lastname'] = 'Silva';
$_SESSION['gender'] = 'Male';

$_SESSION['firstname'] = 'John';

session_destroy();

echo '<br /> <a href="session_page2.php">page 2</a>';


?>