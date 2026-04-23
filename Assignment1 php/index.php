<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>login form</h1><br><br>

	<form action="practice.php" method="POST">
		
	<label for="first">Name</label><br>
	<input type=text name="name" id="first">
	<br><br>
	<label for="second">Email</label><br>
	<input type=email name="email" id=second><br><br>


    <label>Gender</label><br>
	<input type=radio name="Gender" value="Male" Checked  id="male">
	<label for="male">Male</label><br>
	
    <input type=radio name="Gender" value="Female"  id="female">
	<label for="female">Female</label><br>

	<label for="fourth">Agreed to terms</label><br>
	<input type="checkbox" id="fourth" name="agreedtoterms">
	<br><br>

	<label for="fifth">Country</label><br>
	<select name=Country Multiples id="fifth">
		<option>Pakistan
	    <option>Iran
		<option>USA
		<option>saudia Arabia
		
	</select><br>
	<br>
	<input type=submit><br>
    <input type=reset><br>
</form>
</body>
</html>