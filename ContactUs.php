<?php
include('login.php');

error_reporting(0);

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select {
  width: 50%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
</head>
<body>
<form action="" method="GET">
	Name       :<br>
	<input type="text" name="name" value ="" placeholder="Enter your name..."> <br>
	Email      :<br>
	<input type="text" name="email" value ="" placeholder="Enter your email..."><br>
	Suggestions:<br>
	<input type="text" name="suggestions" value ="" placeholder="Enter your suggestion..."><br><br>
	<input type="submit" name="submit" value="Submit"><br> <br>
	
</form>

<?php
if($_GET['submit']){
$rn = $_GET['name'];
$sn = $_GET['email'];
$cl = $_GET['suggestions'];
if($rn!="" && $sn!="" && $cl!="")
{
$query = " INSERT INTO CONTACTUS VALUES ('$rn', '$sn',' $cl')";
$data = mysqli_query($con , $query);
 if($data){
 	echo "Your information is submitted ! Thank you for your feedback!";
 }
}
else
{
	echo "All Fields are required";
}
}

?>
</body>
</html>