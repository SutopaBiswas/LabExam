<!DOCTYPE html>
<html>
<head></head>
<body>
	<form method="POST" action="Test.php" >
	<fieldset>
		<legend>REGISTRATION</legend>
	    Id</br><input type="text" name="id" value=""/></br>
		Password</br><input type="password" name="password" value=""/></br>
		Confirm Password</br><input type="password" name="password" value=""/></br>
		Name</br><input type="text" name="name" value=""/></br>
		User Type</br><input type="radio" name="utype" value=""/>User
					  <input type="radio" name="utype" value=""/>Admin</br>
		<input type="submit" name="submit" value="Sign Up"> 
		<a href="login.php">Sign In</a>
	</fieldset>
	</form>
</body>


</html>