<?php
session_start();
$dbHost = 'localhost';
$dbName = 'mydb';
$dbUsername = 'root';
$dbPassword = '';
$dbc = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);

try 
{
    $conn = new PDO("mysql:host=$host;dbname=mydb", $username, $password);
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