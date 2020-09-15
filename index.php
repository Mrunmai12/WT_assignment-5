<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Example</title>
  <?php include 'links.php'  ?>
</head>
<body>
<div class="container">
 <form action="" method="POST">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="iid"><b>ID</b></label>
    <input type="number" placeholder="Enter id" name="iid" id="iid" required>
<br>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" id="name" required>
<br>

  <label for="prn"><b>PRN</b></label>
    <input type="number" placeholder="Enter PRN" name="prn" id="prn" required>
<br>


  <label for="mobile"><b>MOBILE</b></label>
    <input type="number" placeholder="Enter MOBILE NUMBER" name="mobile" id="mobile" required>
<br>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
<br>

       <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
<br>
    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
<br>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn
    " name="submit" value="register"/>Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>

  <div class="view_form"><a href="display.php">
  	VIEW FORM
  </a>
   </div>
</form>
</div>

</body>
</html>

<?php 
include 'connection.php';

if (isset($_POST['submit'])) {
	# code...

	$id = $_POST['iid'];
	$name = $_POST['name'];
	$prn = $_POST['prn'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$psw = $_POST['psw'];
	$psw_repeat = $_POST['psw-repeat'];

	$insertquery = "insert into form_registration(id, name,prn,mobile,email,password,rep_password) values ('$id','$name','$prn','$mobile','$email','$psw','$psw_repeat')" ;

	$res = mysqli_query($con,$insertquery);

	if($res){
		?>
		<script>
			alert("data inserted properly");
		</script>
		<?php
	}
	else
	{
		?>
		<script>
			alert("data not inserted properly");
		</script>
		<?php
	}
}

 ?>

