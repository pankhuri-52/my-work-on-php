<?php
require 'connect.php';
$conn=connect();

//$sql="select * from users limit 3";
//$sql="update users set lastname='lastname' where id=2";
$sql="delete from usertest where id=20";
	$stmt=$conn->prepare($sql);
	$stmt->execute();
	//$result=$stmt->setfetchMode(PDO::FETCH_ASSOC);
	//$result=$stmt->fetchall();

	//print_r($result);


?>