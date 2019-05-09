<?php
setcookie('user','john',time()+30);

setcookie('user','ben',time()-30);

echo '<br /> <a href="session_page2.php">page 2</a>';
?>