<?php 
	include "lib/library.php";
	global $con;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Here</title>
	<link rel="stylesheet" type="text/css" href="css/design.css?<?php echo time(); ?>">
	<link rel="shortcut icon" type="image/png" href="assets/img/logo.png">
</head>
<body>
	<div id="reg">
		<h1>Sign Up Here</h1>
		<div id="error">
			<?php 
				if ( isset($_POST['signup']) ) {
					foreach ($_POST as $key => $value) $$key = $value;
					$valid = 1;

					$password = md5($_POST['password']);

					if ( $valid == 1 ) {
						$query = "";
					}
				}
			?>
		</div>
		<form method="post" enctype="multipart/form-data">
			<input type="text" name="username" placeholder="Name" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ?>"><br><br>
			<input type="password" name="password" placeholder="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ?>"><br><br>
			<input type="password" name="retype" placeholder="Retype Password" value="<?php echo isset($_POST['retype']) ? $_POST['retype'] : '' ?>"><br>
			<h3>Select your profile photo:</h3><br>
				<input type="file" name="fileToUpload" id="fileToUpload" align="center"><br><br>
			<input type="submit" name="signup" id="btn" value="Sign Up">
		</form>
	</div>
</body>
</html>