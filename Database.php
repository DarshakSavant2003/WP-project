<?php
	$server_name="localhost";
	$username="root";
	$password="";
	$database_name="cooking website";
$conn =  mysqli_connect($server_name,$username,$password,$database_name);
if(!$conn){
		die("Connection Failed : ". mysqli_connect_error());
	} 
	if(isset($_POST['save'])){
		$firstName = $_POST['fname'];
		$lastName = $_POST['lastn'];
		$gender = $_POST['Gender'];
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$DOB = $_POST['DOB'];
$sql_query="INSERT INTO user(fname,lastn,DOB,email,pass) VALUES('$firstName','$lastName','$DOB','$email','$password')";
		if(mysqli_query($conn,$sql_query)){
			echo"Data Submitted Sucessfully";
			header("Location:Register.html");
		} 
		else{
			echo "Error". $sql_query.mysqli_error($conn);
		}
		mysqli_close($conn);
	}
?>