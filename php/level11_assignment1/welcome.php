<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
    $errors=[];
    $values=[];

   if(empty($_POST['firstname'])){
     $errors['firstname']="First Name is required";
   }else{
   	$values['firstname']=$_POST['firstname'];
   }
   

   if(empty($_POST['lastname'])){
     $errors['lastname']="Last Name is required";
   }else{
    $values['lastname']=$_POST['lastname'];
   }
   


   /*if(empty($_POST['email'])){
     $errors['email']="E-mail is required";
   }else{
   	if(preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)"@[a-z0-9-]+(\.[a-z0-9-]+"(\.[a-z]{2,})$/i",$_POST['email'])){
   		$values['email']=$_POST['email'];
   	}else{
   		$errors['email']='ergInvalid email address';
   	}
   	$values['email']=$_POST['email'];
   }

   if(empty($_POST['password'])){
     $errors['password']="Password is required";
   }else{
   	$values['password']=$_POST['password'];
   }*/

   if(empty($_POST['gender'])){
     $errors['gender']="Gender is required";
   }else{
   	$values['gender']=$_POST['gender'];
   }
   

   if(empty($_POST['dob'])){
     $errors['dob']="Date Of Birth is required";
   }else{
    $values['dob']=$_POST['dob'];
   }
   

   if(empty($_POST['city'])){
     $errors['city']="City is required";
   }else{
    $values['city']=$_POST['city'];
   }
   

   if(count($errors)>0) {
   session_start();
   $_SESSION['errors']=$errors;
   $_SESSION['values']=$values;
   header("Location:forms.php");
}else{
	require 'connect.php';
	$conn=connect();
  
  //connect_close();
}
?>
 Welcome <br> Your Firstname is <?php echo $_POST['firstname']; ?>
<br>
  Your Lastname is <?php echo $_POST['lastname']; ?>
  <br>
 <!-- Your email address <?php// echo $_POST['email']; ?>
  Your password is <?php// echo $_POST['password']; ?> -->
  Your gender is <?php echo $_POST['gender'] ?>
  <br>
  Your Date Of Birth is <?php echo $_POST['dob'] ?>
  <br>
  Your city is <?php echo $_POST['city'] ?>
  <br>
</body>
</html>