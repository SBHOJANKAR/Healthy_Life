<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
// $dbc = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);

try 
{
    $conn = new PDO("mysql:host=$dbHost;dbname=mydb", $dbUsername, $dbPassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

if(isset($_POST['signup']))
{
	//print_r($_POST);
	$sql = "INSERT INTO users(fname, lname, phone,email,gender,age,height,weight,bloodgrp,address,password) VALUES('".addslashes($_POST['fname'])."', '".addslashes($_POST['lname'])."','".addslashes($_POST['phone'])."','".addslashes($_POST['email'])."','".addslashes($_POST['gender'])."','".addslashes($_POST['age'])."','".addslashes($_POST['height'])."','".addslashes($_POST['weight'])."','".addslashes($_POST['bloodgrp'])."','".addslashes($_POST['address'])."','".addslashes($_POST['password'])."')";
	$conn->query($sql);
}

?>





<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SignUp</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>


  <body>
    
  <div class="signup-container">

<div class="row">
    <div class="col-sm-4">
    </div>

    <div class="col-sm-4">
        
        <img src="img1.jpg" alt="" class="logo img-fluid">
    
    </div>

    <div class="col-sm-4">
    </div>

</div>

<div class="row">

<?php
if(isset($_POST['signup']))
{
    extract($_POST);
    if(strlen($fname)<3)
    {
        $error[]= 'Please enter atleast 3 characters';
    }

    if(strlen($fname)>20)
    {
        $error[]= 'first name : max length is 20 characters';
    }
}
?>

    <div class="col-sm-4">
        <?php
        if(isset($error))
        {
            foreach($error as $error)
            {
                echo '<p class="errmsg">&#x26A0;'.$error.'</p>';
            }
        }
        ?>
    </div>

    <div class="col-sm-4">
    <div class="signup_form">
        <form action="" method="POST"></form>

        <div class="form-group">
            <label class="label_txt">First Name</label>
            <input type="text" class="form-control" name="fname" required="">
        </div>

        <div class="form-group">
            <label class="label_txt">Last Name</label>
            <input type="text" class="form-control" name="lname" required="">
        </div>

        <div class="form-group">
            <label class="label_txt">Phone</label>
            <input type="text" class="form-control" name="phone" required="">
        </div>

        <div class="form-group">
            <label class="label_txt">Email</label>
            <input type="email" class="form-control" name="email" required="">
        </div>

        <div class="form-group">
            <label class="label_txt">Gender</label>
            <input type="text" class="form-control" name="gender" required="">
        </div>

        <div class="form-group">
            <label class="label_txt">Age</label>
            <input type="number" class="form-control" name="age" required="">
        </div>

        <div class="form-group">
            <label class="label_txt">Height</label>
            <input type="number" class="form-control" name="height" required="">
        </div>

        <div class="form-group">
            <label class="label_txt">Weight</label>
            <input type="number" class="form-control" name="weight" required="">
        </div>

        <div class="form-group">
            <label class="label_txt">Blood Group</label>
            <input type="text" class="form-control" name="bloodgrp" required="">
        </div>

        <div class="form-group">
            <label class="label_txt">Address</label>
            <input type="text" class="form-control" name="address" required="">
        </div>

        <div class="form-group">
            <label class="label_txt">Password</label>
            <input type="password" class="form-control" name="password" required="">
        </div>

        <button type="submit" name="signup" class="btn btn-primary form_btn">SignUp</button>
    </form>

    <p style="font-size: 12px; text-align: center; margin-top:10px;">
        <a href="forgot-password.php" style="color: #00376b;">Forgot Password</a>
    </p>

    <br>
    <p>Don't Have an account? <a href="signup.php">Sign Up</a></p>
    </div>
    </div>

    <div class="col-sm-4">
    </div>
    
    </div>

</div>

</body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>