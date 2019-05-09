<?php
session_start();

echo "Welcome to page 02<br />";
echo "Your firstname is ".$_SESSION['firstname'];
echo "<br />Your Lastname is ".$_SESSION['lastname'];
echo "<br />Your gender is ".$_SESSION['gender'];

echo '<br /><a href="session_page1.php">page 1<a>';
if(isset($_COOKIE['user'])){
	echo "Your name is ".$_COOKIE['user'];
}else{
	echo "No cookie is set";
}


?>