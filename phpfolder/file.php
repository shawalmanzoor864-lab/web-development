<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1>login form</h1><br><br>

	<form action="file.php" method="POST">
		
	<label for="first">Name</label><br>
	<input type=text name="name" id="first">
	<br><br>
	<label for="second">Email</label><br>
	<input type=email name="email" id=second><br><br>

    <label for="sixth">TGFRage</label><br>
    <input type="text" id="sixtRRW3h" name="age"><br><br>


	<br>
	<input type=submit><br>
    <input type=reset><br>
</form>
<h1>MY TABLE</h1>

<table border="1">
	<tr>
		<th>Name</th>
		<th>Age</th>
		<th>Email</th>
	</tr>
	<?php
	$con = mysqli_connect("localhost","root","","phplanguage");
	$result=mysqli_query($con,"SELECT * FROM profile");
	while($row=mysqli_fetch_assoc($result)){?>
	<tr>
		<td><?php echo $row["Name"] ?></td>
	<td><?php echo $row["Age"] ?></td>
	<td><?php echo $row["Email"] ?></td>
</tr>

	<?php }?>
</table>
</body>
</html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);



if (!$con) die("connection failed: " . mysqli_connect_error());

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $name=$_POST["name"] ?? '';
    $email=$_POST['email'] ?? '';
    $age=$_POST['age'] ?? '';


   if ($name && $email && $age){
    $sql = "INSERT INTO profile (name, age, email) VALUES ('$name' , '$age' , '$email')";
    if (mysqli_query($con, $sql)){

    

    echo "<p style='color:green'>Data inserted successfully!</p>";
    }
    else{
        echo "<p style='color:red'>Error: ". mysqli_error($con) . "</p>";

   }

}
}

?>
