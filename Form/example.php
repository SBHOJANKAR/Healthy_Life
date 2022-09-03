<?php
$host = "localhost";
$username = "root";
$password = "";

try 
{
    $conn = new PDO("mysql:host=$host;dbname=phptest", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

// FORM SUBMITTED DATA CAN ACCESSED BY:
// 1. $_REQUEST : CAN BE USED FOR BOTH get AND post METHOD
// 2. $_POST : CAN BE USED ONLY FOR post METHOD
// 3. $_GET : CAN BE USED ONLY FOR get METHOD

if(isset($_POST['save_contact']))
{
	//print_r($_POST);
	$sql = "INSERT INTO contacts(fname,lname, phone, email,password,gender,age,height,weight,blood,address) VALUES('".addslashes($_POST['fname'])."','".addslashes($_POST['lname'])."', '".addslashes($_POST['phone'])."', '".addslashes($_POST['email'])."','".addslashes($_POST['password'])."','".addslashes($_POST['gender'])."','".addslashes($_POST['age'])."','".addslashes($_POST['height'])."','".addslashes($_POST['weight'])."','".addslashes($_POST['blood'])."','".addslashes($_POST['address'])."')";
	$conn->query($sql);
}

?>

<html>
	<head>
		<title>PHP Form</title>
		<link rel="stylesheet" href="example.css">
	</head>
<body>

	<div class="logo">
		<img src="img1.jpg" alt="" class="img-fluid">
	</div>

	<div class="all">
		<form action="" method="post">
			<div class="t1"> First Name: <input type="text" name="fname" value="" /></div>
			<div class="t2"> Last Name: <input type="text" name="lname" value="" /></div>
			<div class="t3"> Phone: <input type="text" name="phone" value="" /></div>
			<div class="t4"> Email: <input type="text" name="email" value="" /></div>
			<div class="t5"> Password: <input type="password" name="password" value="" /></div>
			<div class="t6"> Gender: <input type="text" name="gender" value="" /></div>
			<div class="t7"> Age: <input type="text" name="age" value="" /></div>
			<div class="t8"> Height: <input type="text" name="height" value="" /></div>
			<div class="t9"> Weight: <input type="text" name="weight" value="" /></div>
			<div class="t10"> Blood Group: <input type="text" name="blood" value="" /></div>
			<div class="t11"> Address: <input type="text" name="address" value="" /></div>
			<div class="t12"> <input type="submit" name="save_contact" value="Save"/><a href="home.php"></a></div>
		</form>
	</div>
</body>
</html>