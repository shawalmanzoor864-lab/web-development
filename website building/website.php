<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
    <style>
      body {
  background: url(WhatsApp\ Image\ 2026-03-13\ at\ 10.07.33\ AM.jpeg);
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: fixed;
}
        .wrapper {
  overflow: hidden;
  max-width: 390px;
  padding: 30px;
  background: rgba(255, 255, 255, 0.015);
  backdrop-filter: blur(10px);
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
}
.wrapper .title-box {
  display: flex;
  width: 200%;
}
.wrapper .title {
  color: antiquewhite;
  width: 50%;
}
        
    </style>
</head>
<body>

<h1>Students Marks Manager</h1>
<br><br>
       <div class="wrapper">
        <div class="title-box">
          <div class="title">
<form action="website.php" method="POST">
<label for="name">Name</label><br>
<input type="text" id="name" name="Name"><br>
<br>

<label for="fname">Fathername</label><br>
<input type="text" id="fname" name="Fathername">
<br><br>

<label for="marks">Total Marks</label>
<input type="number" id="marks" name="TotalMarks">
<br><br>

<label for="Omarks">obtained Marks</label>
<input type="number" id="Omarks" name="obtainedMarks">
<br><br>



<input type="submit">
<input type="reset">
</form>
</div>
</div>
</div>


<h1>student Managment Table</h1><br>
<div class="wrapper">
        <div class="title-box">
          <div class="title">
<table border="1">
<tr>
    <th>Name</th>
    <th>Father name</th>
    <th>TotalMarks</th>
    <th>ObtainedMarks</th>
</tr>
<?php
	$con = mysqli_connect("localhost","root","","phplanguage");
	$result=mysqli_query($con,"SELECT * FROM profile");
	while($row=mysqli_fetch_assoc($result)){?>
<tr>
  <td><?php echo $row["Name"] ?></td>
	<td><?php echo $row["Fathername"] ?></td>
	<td><?php echo $row["TotalMarks"] ?></td>
    <td><?php echo $row["ObtainedMarks"] ?></td>
</tr>
<?php }?>
</table>
</div>
</div>
</div>
    
</body>


</html>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);



if (!$con) die("connection failed: " . mysqli_connect_error());

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $name=$_POST["name"] ?? '';
    $Fname=$_POST['Fathername'] ?? '';
    $TMarks=$_POST['TotalMarks'] ?? '';
     $OMarks=$_POST['ObtainedMarks'] ?? '';



   if ($name && $email && $age){
    $sql = "INSERT INTO profile (name, Fathername, Total marks, Obtained marks) VALUES ('$name' , '$Fname' , '$TMarks', '$OMarks')";
    if (mysqli_query($con, $sql)){

    

    echo "<p style='color:green'>Data inserted successfully!</p>";
    }
    else{
        echo "<p style='color:red'>Error: ". mysqli_error($con) . "</p>";

   }

}
}

?>
