<?php
require 'connect.php';
$conn=connect();

try{
	/*$sql="CREATE table usertest2(id int(6) AUTO_INCREMENT PRIMARY KEY,firstname varchar(30),lastname varchar(30),gender varchar(60),dob date,city varchar(30))";
	$conn->exec($sql);*/
	$sql="Insert into usertest2 values('',:firstname,:lastname,:gender,:dob,:city)";
	$stmt=$conn->prepare($sql);
	$stmt->bindParam(':firstname',$firstname);
	  $stmt->bindParam(':lastname',$lastname);
	   $stmt->bindParam(':gender',$gender);
	    $stmt->bindParam(':dob',$dob);
	    $stmt->bindParam(':city',$city);

	   /*  $firstname='Pankhuri';
	    $lastname='Trikha';
	   $gender='F';
	    $dob='16-10-1998';
	    $city='Karnal';*/

	    /*$firstname='Rahul';
	    $lastname='Kumar';
	   $gender='F';
	    $dob='15-02-1998';
	    $city='Chhatisgarh';*/
	    $firstname='Aditi';
	    $lastname='Sharma';
	   $gender='F';
	    $dob='16-10-1998';
	    $city='Chandigarh';
    $stmt->execute();
    echo "data inserted";
    //connect_close();
}catch(Exception $e){
	echo "query failed".$e->getmessage();
}

?>