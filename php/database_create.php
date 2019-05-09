<?php
require 'connect.php';
$conn=connect();

try{
   // $sql="create database test2";
	//$sql="CREATE table usertest1(id int(6) AUTO_INCREMENT PRIMARY KEY,firstname varchar(30),lastname varchar(30),email varchar(60),reg_date timestamp)";

	$sql="Insert into usertest values('',:firstname,:lastname,:email,:reg_date)";

	$stmt=$conn->prepare($sql);

	 $stmt->bindParam(':firstname',$firstname);
	  $stmt->bindParam(':lastname',$lastname);
	   $stmt->bindParam(':email',$email);
	    $stmt->bindParam(':reg_date',$reg_date);

	    $firstname='ram';
	    $lastname='sharma';
	    $email='sharma@interntheory.com';
	    $reg_date='2018-07-23 00:00:00';
    $stmt->execute();

    //$conn->exec($sql);
    echo "data inserted";
    connect_close();
}catch(Exception $e){
	echo "query failed".$e->getmessage();
}
?>