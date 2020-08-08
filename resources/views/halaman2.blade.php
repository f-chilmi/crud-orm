<!DOCTYPE html>
<html>
<head>
	<title>Buat Account Baru!</title>
</head>
<body>
<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
<form action="/welcome" method="POST">
{{csrf_field()}}		
	<label for="first_name">First name:</label><br>
	<input type="text" id="first_name" name="first_name"><br><br>

	<label for="last_name">Last name:</label><br>
	<input type="text" id="last_name" name="last_name"><br><br>

	<label for="gender">Gender:</label><br>
	<input type="radio" name="gender">Male<br>
	<input type="radio" name="gender">Female<br>
	<input type="radio" name="gender">Other<br><br>

	<label for="nationality">Nationality:</label><br>
	<select>
		<option value="Indonesian">Indonesian</option>
		<option value="Malaysian">Malaysian</option>
		<option value="Singapuran">Singapuran</option>
		<option value="Other">Other</option><br><br>
	</select><br>

	<br><label for="languange">Languange spoken:</label><br>
	<input type="checkbox" name="languange_spoken">Bahasa Indonesia<br>
	<input type="checkbox" name="languange_spoken">English<br>
	<input type="checkbox" name="languange_spoken">Other<br><br>

	<label for="bio">Bio:</label><br>
	<textarea id="bio" cols="30" rows="7"></textarea> <br><br>

	<input type="submit" value="Sign Up">


</form>


</body>
</html>