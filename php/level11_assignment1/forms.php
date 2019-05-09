<html>
<head>
	<title></title>
  <style>
    body
    {
      background-image:url('batmanbanner.jpg');
    }
    form
    {
      color:white;
    }
    h1
    {
      color:white;
    }
  </style>
	</head>
	<body>

		<?php
            session_start();
            if(isset($_SESSION['errors'])){
            $errors=$_SESSION['errors'];
        }

            if(isset($_SESSION['values'])){
            $values=$_SESSION['values'];
        }
		?>
		<h1>Register Now</h1>
		<form action="welcome.php" method="POST">
			First Name: <input type="text" name="firstname" value="<?php if(isset($values['firstname'])){ echo $values['firstname']; } ?>" >
            <span>
            <?php

               if(isset($errors['firstname'])){
               echo $errors['firstname'];
           }
            ?>

            </span>

			<br><br>

      Last Name: <input type="text" name="lastname" value="<?php if(isset($values['lastname'])){ echo $values['lastname']; } ?>" >
            <span>
            <?php

               if(isset($errors['lastname'])){
               echo $errors['lastname'];
           }
            ?>

            </span>

      <br><br>

			Gender: <select name="gender" value="<?php if(isset($values['gender'])){ echo $values['gender']; } ?>">
				<option value="male">Male</option>
				<option value="female">Female</option>
				<option value="other">Other</option>
			</select>
			 <span>
            <?php

               if(isset($errors['gender'])){
               echo $errors['gender'];
           }
            ?>

            </span>
			<br><br>

      Date Of Birth: <input type="text" name="dob" placeholder="DD-MM-YYYY" value="<?php if(isset($values['dob'])){ echo $values['dob']; } ?>" >
            <span>
            <?php

               if(isset($errors['dob'])){
               echo $errors['dob'];
           }
            ?>

            </span>

      <br><br>

      City: <input type="text" name="city" value="<?php if(isset($values['city'])){ echo $values['city']; } ?>" >
            <span>
            <?php

               if(isset($errors['city'])){
               echo $errors['city'];
           }
            ?>

            </span>

      <br><br>

			<input type="submit">
		</form>
		</body>
</html>