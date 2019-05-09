<?php 

   $servername='localhost';
   $username='root';
   $password='';
   $database_name="Batman_merchandise";


   //connection code starts here
   //object oriented

  /* $conn = new mysqli($servername,$username,$password,$database_name);

   if($conn->connect_error){
   	die("connection failed".$conn->connect_error);
   }else{
   	echo "Connection successful";
   }  */

   //procedure oriented

  /* $conn=mysqli_connect($servername,$username,$password,$database_name);
   if(!$conn){
       die("connection failed".mysqli_connect_error());
   }else{
   	echo "Connection successful";
   }*/

   //pdo method

   function connect()
   {
   	global $servername,$username,$password,$database_name;
    try{
     $conn = new PDO("mysql:host=$servername;dbname=$database_name",$username,$password);
     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
   //echo "connection successful";
   return $conn;
       }catch(Exception $e){
	echo "Connection failed".$e->getmessage();
    }
    function connect_close()
    {
      $conn->close();//close mysqli connection in object oriented way
      mysqli_close($conn);
      $conn=null;
    }
}


?>