<?php

	if ($_POST['submit']){
		if (!$_POST['email']) $error.="<br>Please enter your email address";
			else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="Please enter a valid email address";
		if (!$_POST['password']) $error.="<br>Please enter your password";
			else {
				if (strlen($_POST['password'])<8) $error.="<br>Please ensure your password has at least 8 characters";
				if (!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br>Please ensure you have a capital letter in your password";
			}
		if ($error) echo "There were error(s) in your submission: ".$error;
	}

?>

<!-- SIGN UP FORM -->
<form method="post">
	<label for="email">Email</label>
	<input type="email" name="email" id="email" />
	<br />
	<label for="password">Password</label>
	<input type="password" name="password" />
	<br />
	<input type="submit" name="submit" value="Sign Up" />

</form>