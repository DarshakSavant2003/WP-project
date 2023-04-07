<?php
	$server_name="localhost";
	$username="root";
	$password="";
	$database_name="cooking website";
	$conn =  mysqli_connect($server_name,$username,$password,$database_name);

	if(!$conn){
		die("Connection Failed : ". mysqli_connect_error());
	} 
	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$sql="SELECT * FROM user WHERE email='$email' AND pass='$password'";
		$result = $conn->query($sql);
		if($result ->num_rows >0){
			echo '<script>alert("Login Sucessful");</script>';
		} 
		else{
			echo '<script>alert("Wrong details");</script>';
			}
		mysqli_close($conn);
	}
?>